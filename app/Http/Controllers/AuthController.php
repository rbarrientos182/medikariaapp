<?php

namespace Medikaria\Http\Controllers;

use Illuminate\Http\Request;

use Medikaria\Http\Requests;

class AuthController extends Controller
{
    public function index()
    {
      return view('admin/auth/auth');
    }
}
