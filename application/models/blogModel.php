<?php

Class BlogModel Extends CI_Model {

	public function saveform() 
	{
		$data = ['post' => $_POST['username'], 'age' => $_POST['age']];

		$this->load->database();
		$sql = $this->db->insert('user', $data);

        return true;
	}
}
?>
