<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReservasiController extends Controller
{
   public function reservasi(){
    return view('reservasi.index');
   }
}
