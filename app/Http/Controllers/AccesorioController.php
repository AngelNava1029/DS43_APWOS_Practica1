<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccesorioController extends Controller
{
  public function index(){
    return view('accesorios/index');
  }
}  
