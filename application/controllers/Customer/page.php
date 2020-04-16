<?php	 
defined('BASEPATH') OR exit('No direct script access allowed');  
  
class page extends CI_Controller {	 
    public function __construct()	 	
    {	 		
        parent::__construct();	 		
        $this->load->library('cart');	 
        $this->load->model('m_keranjang');	 
    }	 	
    public function index()	 	
        {	 		
            $data['produk'] = $this->m_keranjang->get_produk_all();	
            $data['total_product'] = $this->m_keranjang->jumlah_product(); 
            $data['kategori'] = $this->m_keranjang->get_kategori_all();	 
            $this->load->view('Customer/templates/header',$data);
            $this->load->view('Customer/v_home',$data);
            $this->load->view('Customer/templates/footer');
        }	 
    public function tentang()
        {
            $data['total_product'] = $this->m_keranjang->jumlah_product(); 
            $data['kategori'] = $this->m_keranjang->get_kategori_all();
            $this-> load->view('Customer/templates/header',$data);
            $this-> load->view('Customer/pages/tentang',$data);
            $this-> load->view('Customer/templates/footer');
        }
    public function cara_bayar()
        {
            $data['total_product'] = $this->m_keranjang->jumlah_product(); 
            $data['kategori'] = $this->m_keranjang->get_kategori_all();
            $this->load->view('Customer/templates/header',$data);
            $this->load->view('Customer/pages/cara_bayar',$data);
            $this->load->view('Customer/templates/footer');
        }
}

