<?php

namespace Medikaria\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


use Medikaria\Http\Requests;
use Medikaria\Http\Controllers\Controller;
use Medikaria\Models\User;

class HomeController extends Controller
{
  public function index()
  {
    dd(Auth::user()->email);
    //return view('admin/home/home');
  }
}
