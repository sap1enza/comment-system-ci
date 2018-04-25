<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {

	public function pushUser($user){
		$this->db->insert("usuarios", $user);
	}

	public function pullUser($user, $pass){
		$this->db->where("email", $user);
		$this->db->where("senha", $pass);
		$user = $this->db->get("usuarios")->row_array();
		return $user;
	}

}