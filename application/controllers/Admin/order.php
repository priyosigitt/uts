<?php 
 
class order extends CI_Controller{
 
	function __construct(){
		parent::__construct();		
		$this->load->model('m_data');
		$this->load->helper(array('form', 'url'));

		if($this->session->userdata('status') != "login"){
			redirect(base_url("Admin/login"));
		}
 
	}
 
	function index(){
		$data['order'] = $this->m_data->tampil_order();
		$this->load->view('Admin/templates/header');
		$this->load->view('Admin/page/v_order',$data);
		$this->load->view('Admin/templates/footer');
	}

	function detail($id){
	$where = array('order_id' => $id);
	$data['jumlah_total'] = $this->m_data->sum($where);
	$data['user'] = $this->m_data->detail_order($where);
	$this->load->view('Admin/templates/header');
	$this->load->view('Admin/page/v_detail_order',$data);
	$this->load->view('Admin/templates/footer');
	}
}