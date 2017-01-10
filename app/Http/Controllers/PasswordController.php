<?php
namespace Medikaria\Http\Controllers;

use Validator;
use Illuminate\Http\Request;
use Illuminate\Http\Message;
Use Illuminate\Support\Facades\Auth;
Use Illuminate\Support\Facades\Password;
use Illuminate\Foundation\Auth\ResetsPasswords;
use Medikaria\Http\Requests;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class PasswordController extends Controller
{

  use ResetsPasswords;

   public function getEmail()
   {
       return view('admin/auth/password');
   }

   public function postEmail(Request $request)
   {
       $this->validate($request,['email' => 'required|email']);
       $response = Password::sendResetLink($request->only('email'),function(Message $message)
       {
          $message->subject($this->getEmailSubject());
       });
       switch ($response) {
           case Password::RESET_LINK_SENT:
              return redirect()->back()->with('status', trans($response));

           case Password::INVALID_USER:
              return redirect()->back()->withErrors(['email' => trans($response)]);
       }
   }

   /**
     * Get the e-mail subject line to be used for the reset link email.
     *
     * @return string
     */
    protected function getEmailSubject()
    {
        return isset($this->subject) ? $this->subject : 'Your Password Reset Link';
    }

   public function getReset($token = null)
   {
      if(is_null($token)) {
            throw new NotFoundHttpException;
      }

      return view('admin/auth/reset')->with('token', $token);
   }

   public function postReset()
   {
     return 'hi';
   }
}
