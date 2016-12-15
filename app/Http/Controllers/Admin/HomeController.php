<?php

namespace Medikaria\Http\Controllers\Admin;

use Illuminate\Http\Request;

use Medikaria\Http\Requests;
use Medikaria\Http\Controllers\Controller;

class HomeController extends Controller
{
  public function index()
  {
    return view('admin/home/home');
  }
}
