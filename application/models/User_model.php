<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {

	public function pushUser($user, $where = false){
		if($where) {
			$this->db->where("id", $where);
			$this->db->update('usuarios', $user);
			return;
		}

		$this->db->insert("usuarios", $user);
		return;
	}

	public function pullUser($user, $pass){
		$this->db->where("email", $user);
		$this->db->where("senha", $pass);
		$user = $this->db->get("usuarios")->row_array();
		return $user;
	}

	public function pullUserData($user_id) {
		$this->db->where("id", $user_id);
		$user = $this->db->get("usuarios")->row_array();
		return $user;
	}

}