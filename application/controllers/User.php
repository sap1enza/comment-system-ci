<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model("User_model");
	}

	public function newUser(){
		
		$user = array(
			"nome" => $this->input->post("name"),
			"email" => $this->input->post("email"),
			"senha" => md5($this->input->post("password")),
			"sexo" => $this->input->post("gender")
		);

		$this->form_validation->set_rules("email", "Email", "required|is_unique[usuarios.email]|regex_match[/^[a-z0-9_\.\-]+@[a-z0-9_\.\-]*[a-z0-9_\-]+\.[a-z]{2,4}$/]");
		$this->form_validation->set_rules("name","Nome","required");
		$this->form_validation->set_rules("password","Senha","required");
		$this->form_validation->set_rules("gender","Sexo","required");
		$this->form_validation->set_message('is_unique', 'Já existe uma conta cadastrada com este %s!');
		

		if($this->form_validation->run() == FALSE) {
			echo json_encode(array("validation" => validation_errors(),"status"=>false));
		} else { 
			$this->User_model->pushUser($user);
			echo json_encode(array("status"=>true)); 			
		}
	}

	public function auth(){
		$email = $this->input->post("email");
		$senha = md5($this->input->post("senha"));	

		$user = $this->User_model->pullUser($email, $senha);
		if($user){	
			$this->session->set_userdata("logged", true);
			$this->session->set_userdata("id", $user['id']);
			$this->session->set_userdata("nome", ucwords($user['nome']));

			$nome = explode(" ",$user['nome']);
			$primeiro_nome = $nome[0];
			$this->session->set_userdata("firstname", ucwords($primeiro_nome));

			$this->session->set_userdata("email", $user['email']);
			$this->session->set_userdata("sexo", $user['sexo']);
							
		} else {
			$this->session->set_tempdata('logform', '<p>Email ou Senha inválidos</p>', 2); 
		}
		redirect('', 'refresh');
	}		

	public function logout(){
		 $this->session->unset_userdata("logged");
		 $this->session->unset_userdata("id");
		 $this->session->unset_userdata("nome");
		 $this->session->unset_userdata("firstname");
		 $this->session->unset_userdata("email");
		 $this->session->unset_userdata("sexo");
		 redirect('', 'refresh');
	}

}