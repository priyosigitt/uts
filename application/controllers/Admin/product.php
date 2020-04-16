<?php 

class product extends CI_Controller{
 
	function __construct(){
		parent::__construct();	
		$this->load->model('m_data');
		$this->load->helper('url');
	
		if($this->session->userdata('status') != "login"){
			redirect(base_url("Admin/login"));
		}
	}
 
	function index(){
		$data['products'] = $this->m_data->tampil_data();
		$this->load->view('Admin/templates/header');
		$this->load->view('Admin/product/v_product',$data);
		$this->load->view('Admin/templates/footer');
	}
}