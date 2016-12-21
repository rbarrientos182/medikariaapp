<?php

namespace Medikaria\Http\Controllers;

use Illuminate\Http\Request;
use Medikaria\Http\Requests;

class RegisterController extends Controller
{
  public function index()
  {
    return view('admin/auth/register');
  }// fin de index

  public function store(Request $request)
  {
      $this->validate($request,[
      'name'     => 'required',
      'email'    => 'required|email',
      'password' => 'required',
      'password' => 'required']
    );
  }
}
