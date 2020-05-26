<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class utilidades extends Controller
{

  // redirecciona a la pagina de resivo de valores

  public function recibovalores(){

    return view('/utilidades/recibovalores');
  }

  public function simulador(){

    return view('/utilidades/simulador');
  }

  public function incidentes(){

    return view('/utilidades/controlInicidentes');
  }

}
