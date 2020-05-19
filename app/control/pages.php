<?php
//controlador principal desde aqui se hace la conexion entre vista y modelos por ende es el controlador jeje  xD
class pages extends control{


  public function __construct(){
    //configuracion incial
    $this->ConfigModelo = $this->modelo('config');
    $this->SessionModelo = $this->modelo('start');
  }
  /*--------------------------------------------------------
  paginas principales
  --------------------------------------------------------*/
  public function index(){

    $this->vista('pages/inicio');
  }



}//end class
?>
