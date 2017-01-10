<?php

namespace Medikaria\Http\Controllers\Mail;

use Illuminate\Http\Request;
use Mail;
Use Session;
Use Redirect;
use Medikaria\Http\Requests;

class MailController extends Controller
{
    //email de bienvenida
    public function sendEmailWelcome(Request $request)
    {
      Mail::send('emails.contact',$request->all,function($msj)
      {
        $msj->subject('Correo de Contacto');
        $msj->to('barrientos.isc@gmail.com ');
      });
      Session::flash('message','Mensaje enviado correctamente');
      return Redirect::to('/contacto');
    }

    //email de cambio de contraseña
    public function sendEmailResetPassword(Request $request)
    {
      Mail::send('emails.contact',$request->all,function($msj)
      {
        $msj->subject('Correo de Contacto');
        $msj->to('barrientos.isc@gmail.com ');
      });
      Session::flash('message','Mensaje enviado correctamente');
      return redirect()->route('auth_show_completed_path');
    }
}
