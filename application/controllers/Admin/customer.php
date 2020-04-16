<?php 
 
class customer extends CI_Controller{
 
	function __construct(){
		parent::__construct();		
		$this->load->model('m_data');
		$this->load->helper(array('form', 'url'));

		if($this->session->userdata('status') != "login"){
			redirect(base_url("Admin/login"));
		}
 
	}
 
	function index(){
		$data['customer'] = $this->m_data->tampil_customer()->result();
		$this->load->view('Admin/templates/header');
		$this->load->view('Admin/page/v_customer',$data);
		$this->load->view('Admin/templates/footer');
	}
	function hapus($id){
		$where = array('id_user' => $id);
		$this->m_data->hapus_user($where,'user_cust');
		redirect('Admin/customer');
	}
}