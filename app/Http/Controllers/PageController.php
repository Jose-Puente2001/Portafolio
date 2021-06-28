<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
  public function Home()
  {
    return view('home');  
  }
   
  public function Portafolio()
  {
     return view('portafolio');
  }

  public function Contactos()
  {
    return view('contacto');
  }
}
