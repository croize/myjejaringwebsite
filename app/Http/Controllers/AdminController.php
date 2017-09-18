<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __construct(){
      $this->middleware('auth');
      $this->middleware('access:1');
      $this->middleware('access:1')
    }

    public function index(){
      return redirect('');
    }
}
