<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Controlador extends CI_Controller {
public function __construct(){
	parent::__construct();
	$this->load->model('registrar');
	  $this->load->helper(array('form', 'url'));
	  $this->load->library("upload");
	  $this->load->library("image_lib");
	
	
}
	
	 
	public function vista()
	{
		$consulta=$this->db->query("select*from menu right join titulo on menu.id=titulo.id");
		$data=array("result"=>$consulta,
					"hola"=>"bienvenido a mi pagina");
		$this->load->view('vista',$data);
	}
	
	public function registrarse(){
		
		$dato=array("registrar"=>"formulario de registro");	
		
	 $this->load->view("registrarse",$dato);
		
}
public function validacion(){
	
	$this->form_validation->set_rules('nombre','nombre','trim|required');
	$this->form_validation->set_rules('apellido','apelllido','trim|required');
 $this->form_validation->set_rules('usuario','usuario'|'trim|required');
	$this->form_validation->set_rules('email','email','trim|required');
	$this->form_validation->set_rules('pass1','contraseña1','trim|required');
	$this->form_validation->set_rules('pass2','contraseña2','trim|required');
	$this->form_validation->set_rules('pais','pais','trim|required');
	$this->form_validation->set_rules('fecha_de_nacimiento','fecha de nacimiento','required');
	$this->form_validation->set_rules('genero[]','genero','required');
	$this->form_validation->set_rules('caracteristica','caracteristica','trim|required');
	$this->form_validation->set_error_delimiters('<div class="alert alert-danger">','</div>');
	$nombre=$this->input->post('nombre');
	$apellido=$this->input->post('apellido');
	$usuario=$this->input->post('usuario');
	$email=$this->input->post('email');
	$pass1=$this->input->post('pass1');
	$pass2=$this->input->post('pass2');
	$pais=$this->input->post('pais');
	$fecha_de_nacimiento=$this->input->post('fecha_de_nacimiento');
	$genero=$this->input->post('genero');
	$foto=$this->input->post('foto');
	$caracteristica=$this->input->post('caracteristica');
	  $config['upload_path'] = './uploads/';
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size']  = 100;
                $config['max_width'] = 1024;
                $config['max_height'] = 768;

                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload('foto'))
                {
                        $error = array('error' => $this->upload->display_errors());

                        $this->load->view('upload_form', $error);
                }
                else
                {
                        $data = array('upload_data' => $this->upload->data());
						
                       
                }
	$datos=array('nombre'=>$nombre,
				'apellido'=>$apellido,
				'usuario'=>$usuario,
				'email'=>$email,
				'pass1'=>$pass1,
				'pass2'=>$pass2,
				'pais'=>$pais,
				'fecha_de_nacimiento'=>$fecha_de_nacimiento,
				'genero'=>$genero,
				'foto'=>$foto,
				'caracteristica'=>$caracteristica);
 $this->registrar->insertar($datos);
	if(!$this->form_validation->run()){
$dato=array("registrar"=>"formulario incorrecto");	
	return $this->load->view("registrarse",$dato);
	
	}
	else{
	
	$dato=array("session"=>"gracias por registrarse");	
	return $this->load->view("session",$dato);
	
		
	}
	
	
	
	
}
		
	public function iniciarsession(){
		$dato=array("session"=>"iniciar session");
		$this->load->view("iniciarsession",$dato);
		
		
		
		
	}
	public function session2(){
		//$this->form_validation->set_error_delimiters("<div class='alert alert-danger'>","</div>");
	//$this->form_validation->set_rules('usuario','usuario','required');
	//$this->form_validation->set_rules('pass1','contraseña','required');
		
		//if(!$this->form_validation->run()){
			//$dato=array("session"=>"iniciar session");
		//return $this->load->view("iniciarsession",$dato);
		
			
			
		//}
		$usuario=$this->input->post('usuario');
		$pass1=$this->input->post('pass1');
		$this->registrar->session1($usuario,$pass1);
		
	}
	
	
	
	public function session(){
	$consulta=$this->db->query("select*from registrarse left join session on registrarse.id=session.id left join grafica on registrarse.id=grafica.id left join eventos on registrarse.id=eventos.id "); 
		$dato=array("session"=>"bienvenido"
					,"result"=>$consulta);
	
		$this->load->view("session",$dato);
		
		
		
		
	}
	public function musica(){
		$data=array("musica"=>"bienvenido");
		$this->load->view("musica",$data);
		
		
		
	}
	public function foro(){
	$consulta=$this->db->query("select comentario from comentario");	
	$data=array("result"=>$consulta,
				"foro"=>"formulario de comentario");
$this->load->view("foro",$data);
		
		
	}
	public function comentario(){
		$usuario=$this->input->post("usuario");
		$email=$this->input->post("email");
		$comentario=$this->input->post("comentario");
		$this->db->query("insert into comentario values(null,'".$usuario."','".$email."','".$comentario."',now())");
		
		
		
	}
	public function insertar(){
		
		//$eventos=$this->input->post("eventos");
		//$tipos=$this->input->post("tipos");
		//$caractiristica=$this->input->post("caracteristica"):
		//$objetivos=$this->input->post("objectivos");
		//$fecha=$this->input->post("fecha");
		$data=array("insertar"=>"formulario de eventos");
		$this->load->view("insertar",$data);
		
		
		
		
	}
	public function eliminar(){
		$consulta=$this->db->query("select*from eventos where id='".$_GET["id"]."'");
			
	$data=array("resultado"=>$consulta,
				"eliminar"=>"eliminar registro");
	$this->load->view("eliminar",$data);
		
		
	}
	public function eliminar2(){
		$consulta=$this->db->query("delete from eventos where id='".$_GET["id"]."'");
		redirect(base_url("controlador/session"));
		
		
		
	}
	public function edictar(){
		$nombre=$this->input->post("nombre");
		$apellido=$this->input->post("nombre");
		$usuario=$this->input->post("nombre");
		$email=$this->input->post("nombre");
		$pais=$this->input->post("nombre");
		$data=array("editar"=>"formulario de actualizar");
	$this->load->view("edictar",$data);	
		
		
	}
	public function foto(){
		$foto=$_FILES['foto']['name'];
      $config['file_name']=$foto;
$config['upload_path'] ='fotos/';
                $config['allowed_types'] = 'gif|jpg|png';
					
                //$config['max_size']  = 300;
                //$config['max_width'] = 1024;
               //$config['max_height'] = 768;
 $this->upload->initialize($config);



                if ( ! $this->upload->do_upload('foto')  )
                {
                        $error = array('error' => $this->upload->display_errors());
$this->load->view("prueba1",$error);
                        
                }
                else
                {

 $data = array("foto2"=>$foto,
			   'upload_data' => $this->upload->data());
$this->load->view("prueba2",$data);
                       
                }
		
		
	}
	
	
}
