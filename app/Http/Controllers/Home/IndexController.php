<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
  public function Index(){
    echo 'home';
    return view('home.index');

  }
}
