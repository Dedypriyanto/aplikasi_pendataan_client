<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model {
	function proseslogin($user, $pass){
		$this->db->where('username',$user);
		$this->db->where('password',$pass);
		return $this->db->get('users')->row();
	}
}