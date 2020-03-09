<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Nuevo extends CI_Controller {

	
	 
	public function vista()
	{
		$data=array("hola"=>"bienvenido a mi pagina");
		$this->load->view('vista',$data);
	}
	
	public function registrarse(){
		
	$dato=array("registrar"=>"formulario de registrarse");	
	$this->load->view("registrarse",$dato);
		
	}
	
}