<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model("User_model");
	}

	public function newUser() {		
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

	public function update() {
				
		$senha = (!empty($_POST['senha'])) ? true : false;
		$user = array(
			"nome" => $this->input->post("nome"),
			"email" => $this->input->post("email")
		);
		if($senha) { 
			$user['senha'] = md5($this->input->post("senha"));
		};
		

		$name = explode(" ",$this->input->post("nome"));
		$firstname = $name[0];
		$dados = array(
				"logged" => true,
				"id" => $this->input->post("id_user"),
				"name" => ucwords($this->input->post("nome")),
				"firstname" => ucwords($firstname),
				"email" => $this->input->post("email")
			);
		

		$this->session->set_userdata("user", $dados);

		$this->User_model->pushUser($user, $this->input->post("id_user"));

		redirect('/', 'refresh');
		return;
	}

	public function auth() {

		$email = $this->input->post("email");
		$senha = md5($this->input->post("senha"));	

		$user = $this->User_model->pullUser($email, $senha);
		if($user){	
			$name = explode(" ",$user['nome']);
			$firstname = $name[0];
			$dados = array(
				"logged" => true,
				"id" => $user['id'],
				"name" => ucwords($user['nome']),
				"firstname" => ucwords($firstname),
				"email" => $user['email']
			);
			$this->session->set_userdata("user", $dados);										
		} else {
			$this->session->set_tempdata('logform', '<p>Email ou Senha inválidos</p>', 5); 
		}
		redirect('/', 'refresh');
		
	}		

	public function logout() {
		$this->session->unset_userdata("user");
		redirect('', 'refresh');
	}

}