<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ActorContoller extends Controller
{

    public function listar() {
      $actors= Actor::all();
      return view('actores')
      ->with('actores',$actors);
    }
}
