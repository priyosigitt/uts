<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class m_register_cust extends CI_Model{
	function daftar($data)
	{
		$this->db->insert('user_cust', $data);
	}
}