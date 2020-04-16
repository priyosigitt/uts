<?php	 
if (! defined('BASEPATH')) exit('No direct script access allowed');	 	
  
  		
class kategori extends CI_Controller {	 	
  	 		
    public function __construct()	 		
    {	 			
        parent::__construct();	 			
        $this->load->library('cart');	 		
        $this->load->model('m_keranjang');
        
        if($this->session->userdata('status') != "login"){
            redirect(base_url("Admin/login"));
        }	 	
    }	 		
  			
    public function index()	 		
    {	 			
        $kategori=($this->uri->segment(4))?$this->uri->segment(4):0;	
        $data['total_product'] = $this->m_keranjang->jumlah_product();
        $data['nama_kategori'] = $this->m_keranjang->get_nama_kategori($kategori);   	
        $data['produk'] = $this->m_keranjang->get_produk_kategori($kategori);	 			
        $data['kategori'] = $this->m_keranjang->get_kategori_all();	 			
        $this->load->view('Customer/templates/header',$data);	 			
        $this->load->view('Customer/v_kategori',$data);
        $this->load->view('Customer/templates/footer'); 
    }
}    
?>




