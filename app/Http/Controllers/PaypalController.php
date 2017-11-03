<?php

namespace Medikaria\Http\Controllers;

use Medikaria\Http\Requests;

use Illuminate\Http\Request;
use Illuminate\Foundation\Bus\DispatchesCommands;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;

use PayPal\Rest\ApiContext;
use PayPal\Auth\OAuthTokenCredential;
use PayPal\Api\Amount;
use PayPal\Api\Details;
use PayPal\Api\Item;
use PayPal\Api\ItemList;
use PayPal\Api\Payer;
use PayPal\Api\Payment;
use PayPal\Api\RedirectUrls;
use PayPal\Api\ExecutePayment;
use PayPal\Api\PaymentExecution;
use PayPal\Api\Transaction;

use Medikaria\Models\Orden;
use Medikaria\Models\Medicamento;
//use Medikaria\Models\OrderItem;

class PaypalController extends BaseController
{
  private $_api_context;

  public function __construct()
  {
    // setup PayPal api context
    $paypal_conf = \Config::get('paypal');
    //dd($paypal_conf['client_id'],$paypal_conf['secret'],$paypal_conf['settings']);
    $this->_api_context = new ApiContext(new OAuthTokenCredential($paypal_conf['client_id'], $paypal_conf['secret']));
    $this->_api_context->setConfig($paypal_conf['settings']);
  }

  public function postPayment($idOrden)
  {
    $payer = new Payer();
    $payer->setPaymentMethod('paypal');

    $items = array();
    $subtotal = 0;
    $currency = 'MXN';

    $orden = Orden::findOrFail($idOrden);
    //dd($orden->medicamentos);

    foreach($orden->medicamentos as $producto){
      $item = new Item();
      $item->setName($producto->nombremedicamento)
      ->setCurrency($currency)
      ->setDescription($producto->contenidodescripcion)
      ->setQuantity($producto->pivot->cantidad_or)
      ->setPrice($producto->pivot->subtotal_or);

      $items[] = $item;
      $subtotal += $producto->pivot->subtotal_or;
    }

    //dd($items);
    $item_list = new ItemList();
    $item_list->setItems($items);

    $details = new Details();
    $details->setSubtotal($subtotal)
    ->setShipping(100);

    $total = $subtotal + 100;

    $amount = new Amount();
    $amount->setCurrency($currency)
      ->setTotal($total)
      ->setDetails($details);

    $transaction = new Transaction();
    $transaction->setAmount($amount)
      ->setItemList($item_list)
      ->setDescription('Pedido de prueba en mi Laravel App Store');

    $redirect_urls = new RedirectUrls();
    $redirect_urls->setReturnUrl(\URL::route('payment.status'))
      ->setCancelUrl(\URL::route('payment.status'));

    $payment = new Payment();
    $payment->setIntent('Sale')
      ->setPayer($payer)
      ->setRedirectUrls($redirect_urls)
      ->setTransactions(array($transaction));

    try {
      //dd($payment->getLinks());
      $payment->create($this->_api_context);
      //dd($payment->getLinks());
    } catch (\PayPal\Exception\PPConnectionException $ex) {
      //dd('entro a catch');
      if (\Config::get('app.debug')) {
        //dd('entro a catch');
        echo "Exception: " . $ex->getMessage() . PHP_EOL;
        $err_data = json_decode($ex->getData(), true);
        exit;
      } else {
        //dd('Ups! Algo salió mal');
        die('Ups! Algo salió mal');
      }
    }

    foreach($payment->getLinks() as $link) {
      if($link->getRel() == 'approval_url') {
        $redirect_url = $link->getHref();
        break;
      }
    }

    //dd($payment->getId());
    // add payment ID to session
    \Session::put('paypal_payment_id', $payment->getId());

    if(isset($redirect_url)) {
      // redirect to paypal
      return \Redirect::away($redirect_url);
    }

    return \Redirect::route('cart-show')
      ->with('message', 'Ups! Error desconocido.');

  }

  public function getPaymentStatus()
  {
    // Get the payment ID before session clear
    $payment_id = \Session::get('paypal_payment_id');

    // clear the session payment ID
    \Session::forget('paypal_payment_id');

    $payerId = \Input::get('PayerID');
    $token = \Input::get('token');

    if (empty($payerId) || empty($token)) {
      return \Redirect::route('home')
        ->with('message', 'Hubo un problema al intentar pagar con Paypal');
    }

    $payment = Payment::get($payment_id, $this->_api_context);

    $execution = new PaymentExecution();
    $execution->setPayerId(\Input::get('PayerID'));

    $result = $payment->execute($execution, $this->_api_context);


    if ($result->getState() == 'approved') {

      //$this->saveOrder();

      \Session::forget('cart');

      return \Redirect::route('home')
        ->with('message', 'Compra realizada de forma correcta');
    }
    return \Redirect::route('home')
      ->with('message', 'La compra fue cancelada');
  }

  protected function saveOrder()
  {
    $subtotal = 0;
    $cart = \Session::get('cart');
    $shipping = 100;

    foreach($cart as $producto){
      $subtotal += $producto->quantity * $producto->price;
    }

    $order = Order::create([
      'subtotal' => $subtotal,
      'shipping' => $shipping,
      'user_id' => \Auth::user()->id
    ]);

    /*foreach($cart as $producto){
      $this->saveOrderItem($producto, $order->id);
    }*/
  }
  protected function saveOrderItem($producto, $order_id)
  {
    OrderItem::create([
      'price' => $producto->price,
      'quantity' => $producto->quantity,
      'product_id' => $producto->id,
      'order_id' => $order_id
    ]);
  }
}
