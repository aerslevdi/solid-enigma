<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NumberController extends Controller
{
  public function numero($numero){
    {if ($numero%2===0) {
      echo "el numero es par";
    }else {
      echo "el numero es impar";
    }

    }
  }

}
