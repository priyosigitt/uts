<?php 
 
class admin extends CI_Controller{
 
	function __construct(){
		parent::__construct();
		$this->load->model('m_data');
	
		if($this->session->userdata('status') != "login"){
			redirect(base_url("Admin/login"));
		}
	}
 
	function index(){	 	 		 
 		$data['total_user'] = $this->m_data->jumlah_user();
 		$data['total_customer'] = $this->m_data->jumlah_customer();
 		$data['total_product'] = $this->m_data->jumlah_product();
 		$data['total_order'] = $this->m_data->jumlah_order();
 		$data['total_converse'] = $this->m_data->jumlah_converse();
 		$data['total_running'] = $this->m_data->jumlah_running();
 		$data['total_boots'] = $this->m_data->jumlah_boots();
		$this->load->view('Admin/templates/header');
		$this->load->view('Admin/v_dashboard', $data);
		$this->load->view('Admin/templates/footer');
	}
}