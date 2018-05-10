<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Comments_model extends CI_Model {

	public function push($comment) {
		$this->db->insert("comentarios", $comment);
	}

	public function pullAll() {
		// return $this->db->get("comentarios")->result_array();


		// $query = $this->db->query("SELECT * FROM users;");

		// foreach ($query->result('User') as $user)
		// {
  //       	echo $user->name; // access attributes
  //       	echo $user->reverse_name(); // or methods defined on the 'User' class
  //   	}

  //   	$query = $this->db->query("SELECT *, nome  FROM comentarios ")

  //   	select *, nome


  //   	SELECT name, price, photo
  //   	FROM drinks, drinks_photos
  //   	WHERE drinks.id = drinks_id 
  //   	GROUP BY drinks_id
	}



	// public function pullUser($user, $pass){
	// 	$this->db->where("email", $user);
	// 	$this->db->where("senha", $pass);
	// 	$user = $this->db->get("usuarios")->row_array();
	// 	return $user;
	// }

}