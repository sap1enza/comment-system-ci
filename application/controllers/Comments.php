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

	public function pullAll() {
		echo json_encode($this->Comments_model->pullAll());
	}

}