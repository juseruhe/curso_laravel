<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    
  public function index($name,$age){

    if($age < 18){

        return ucfirst($name)." no puedes ingresar al sitio";
    }
    else {

        return ucfirst($name)." si puedes ingresar al sitio";
    }
  }


}
