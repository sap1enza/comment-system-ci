<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Comments_model extends CI_Model {

	public function push($comment, $update = false) {
		if($update) {
			$this->db->query("UPDATE comentarios set comentario = '" . $comment['comentario'] . "' where id = " . $comment['comentario_id'] );
			return;
		}

		$this->db->insert("comentarios", $comment);
	}

	public function pullAll() {
		$query = "SELECT U.`nome`, C.`comentario`, C.`time_create`, C.`id_autor`, C.`id` from usuarios as U inner join comentarios as C on U.`id` = C.`id_autor` ORDER BY C.`id` desc";
		return $this->db->query($query)->result_array();
	}

	public function pull($id) {
		return $this->db->query("SELECT * FROM comentarios WHERE id = " . $id)->row_array();
	}

	public function del($id) {
		$this->db->where('id', $id);
		$this->db->delete('comentarios');
		return;
	}
}