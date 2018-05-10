<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller {

	public function loadView($view, $data = false) {
		$this->load->view("template/header");
		$this->load->view($view, $data);
		$this->load->view("template/footer");
	}

	public function index() {
		$this->loadView("pages/index");
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