<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Comments_model extends CI_Model {

	public function push($comment) {
		$this->db->insert("comentarios", $comment);
	}

	public function pullAll() {
		$query = "SELECT U.`nome`, C.`comentario`, C.`time_create` from usuarios as U inner join comentarios as C on U.`id` = C.`id_autor` ORDER BY C.`id` desc";
		return $this->db->query($query)->result_array();
	}
}