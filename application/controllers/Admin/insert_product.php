<?php 

class insert_product extends CI_Controller{
 
	function __construct(){
		parent::__construct();
	
		if($this->session->userdata('status') != "login"){
			redirect(base_url("Admin/login"));
		}
	}
 
	function index(){
		$this->load->view('Admin/templates/header');
		$this->load->view('Admin/product/v_insert_product');
		$this->load->view('Admin/templates/footer');
	}
}