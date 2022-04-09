<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Inicio extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->model('inicio_model','Modelo');
    }

    public function index()
  {
    $datos['inicio']=$this->Modelo->inicio();
    //echo var_dump($datos);die();
   
    $this->load->view('header', $datos);
    $this->load->view('index', $datos);
    $this->load->view('footer');
  }
   function servicios()
  {
    $datos['inicio']=$this->Modelo->inicio();
    $datos['servicios']=$this->Modelo->servicios();
    $this->load->view('header', $datos);
    $this->load->view('servicios', $datos);
    $this->load->view('footer');
  }
  function contacto()
  {
    $datos['inicio']=$this->Modelo->inicio();
    $datos['servicios']=$this->Modelo->servicios();

    $this->load->view('header', $datos);
    $this->load->view('contacto');
    $this->load->view('footer');
  }
}
