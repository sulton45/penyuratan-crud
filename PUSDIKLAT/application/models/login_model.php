<?php

class Login_model extends CI_model{

	public function validate($username, $password)
	{
		$this->db->where('username',$username);
		$this->db->where('password',$password);
		$result = $this->db->get('login',1);
		return $result;
	}
}