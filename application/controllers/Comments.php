<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Comments extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model("Comments_model");
	}

	public function loadView($view, $data = false) {
		$this->load->view("template/header");
		$this->load->view($view, $data);
		$this->load->view("template/footer");
	}

	public function new() {
		$this->form_validation->set_rules('comentario', 'Comentário', 'required');
		if($this->form_validation->run() == FALSE) {
			$this->loadView("pages/newComment");
		} else {

			$comment = array(
				"id_autor" => $this->session->userdata("user")['id'],
				"comentario" => $this->input->post("comentario"),
				"time_update" => null,
				"time_create" => null
			);
			$this->Comments_model->push($comment);
			redirect('/', 'refresh');
		}
	}

	public function del($id) {
		$user 		= $this->session->userdata("user");
		$comentario = $this->Comments_model->pull($id);

		if($user['logged'] && $user['id'] == $comentario['id_autor']) {
			$this->Comments_model->del($id);
			redirect('/', 'refresh');
			return;
		}
	}

	public function edit() {
		
		$comentario 	= $this->input->post('comentario');
		$comentario_id	= $this->input->post('comentario_id');
		$comentario = array("comentario" => $comentario, "comentario_id" => $comentario_id);

		$this->Comments_model->push($comentario, true);
		redirect('/', 'refresh');

	}

	public function pullAll() {
		return $this->Comments_model->pullAll();
	}

}