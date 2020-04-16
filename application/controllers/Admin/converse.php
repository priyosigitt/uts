<?php 
 
class pestisida extends CI_Controller{
 
	function __construct(){
		parent::__construct();		
		$this->load->model('m_data');
		$this->load->helper(array('form', 'url'));

		if($this->session->userdata('status') != "login"){
			redirect(base_url("Admin/login"));
		}
 
	}
 
	function index(){
		$data['products'] = $this->m_data->tampil_converse()->result();
		$this->load->view('Admin/templates/header');
		$this->load->view('Admin/category/v_pestisida',$data);
		$this->load->view('Admin/templates/footer');
	}
}