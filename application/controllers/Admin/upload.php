<?php 
 
 
class upload extends CI_Controller{
 
	function __construct(){
		parent::__construct();		
		$this->load->helper(array('form', 'url'));
		
		if($this->session->userdata('status') != "login"){
			redirect(base_url("Admin/login"));
		}
	}
	function index(){
		$this->load->view('Admin/templates/header');
		$this->load->view('Admin/uploadfiles/v_uploadfile', array('error' => ''));
		$this->load->view('Admin/templates/footer');
	}
	function aksi_upload(){
		$config['upload_path']          = './././files';
		$config['allowed_types']        = '*'; // file yang di perbolehkan
 
		$this->load->library('upload', $config);
 
		if ( ! $this->upload->do_upload('berkas')){
			$error = array('error' => $this->upload->display_errors());
			$this->load->view('Admin/uploadfiles/v_uploadfile', $error);
		}else{
			$this->upload->data("file_name");
			redirect('Admin/admin');
		}
	}
}