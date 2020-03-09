<?php

class registrar extends CI_model{
	public function insertar($datos){
	$this->db->insert("registrarse",$datos);	
		
		
		
		
		
	}
	
	
	
public function session1($usuario,$pass1){

	$sql="select usuario,pass1 from registrarse where usuario='".$usuario."' and pass1='".$pass1."'";
 $consulta=$this->db->query($sql);
	if($consulta->num_rows()>0){
		$sql="select usuario,pass1 from registrarse where usuario='".$usuario."' and pass1='".$pass1."'" ;
	$consulta=$this->db->query($sql);
		$fila=$consulta->row();
	
			 $data=array('id'=>$fila->id,
						 'usuario'=>$fila->usuario);
	$this->session->set_userdata($data);
		redirect(base_url('controlador/session'));
	}else{
			$this->session->set_flashdata('','<div class="alert alert-danger">el usuario o contraseña son incorrecto</div>');
			redirect(base_url('controlador/iniciarsession'));
		}
	

	
	
}
	
public function variable($consulta){
			
$sql="select*from registrarse where id='".$this->session->userdata['id']."'";
		
	$consulta=$this->db->query($sql);

	
	
	
}
	
	
	
	
	
	
	
}