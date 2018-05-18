<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model("Comments_model");
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
		// if($what == "comment") $this->loadView("pages/newComment");
		switch($what) {
			case "comment":
				$this->loadView("pages/newComment");
				break;
			default:
				$this->loadView("pages/index");
		}
	}

}