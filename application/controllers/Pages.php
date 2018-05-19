<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model("Comments_model");
		$this->load->model("User_model");
	}

	public function loadView($view, $data = false) {
		$this->load->view("template/header");
		$this->load->view($view, $data);
		$this->load->view("template/footer");
	}

	public function index() {
		$comentarios = $this->Comments_model->pullAll();		
		$this->loadView("pages/index", array("comentarios"=>$comentarios));
	}

	public function new($what) {
		switch($what) {
			case "comment":
				$this->loadView("pages/newComment");
				break;
			default:
				$this->loadView("pages/index");
		}
	}

	public function editUser($user_id) {
		if($user_id == $this->session->userdata("user")['id']) {
			$userdata = $this->User_model->pullUserData($user_id);
			$this->loadView("pages/editUser", array("userdata"=>$userdata));
		}
	}

	public function editComment($id) {
		$user 		= $this->session->userdata("user");
		$comentario = $this->Comments_model->pull($id);
		if($user['logged'] && $user['id'] == $comentario['id_autor']) {
			$this->loadView("pages/editComment", array("comentario" => $comentario));
			return;
		}
	}

}