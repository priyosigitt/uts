<?php	 
if (! defined('BASEPATH')) exit('No direct script access allowed');	 	
  
  		
class shopping extends CI_Controller {	 	
  	 		
    public function __construct()	 		
    {	 			
        parent::__construct();	 			
        $this->load->library('cart');	 		
        $this->load->model('m_keranjang');	 	
    }	 		
  			
    public function index()	 		
    {	 			
        $kategori=($this->uri->segment(4))?$this->uri->segment(4):0;
        $data['total_product'] = $this->m_keranjang->jumlah_product();	 		
        $data['produk'] = $this->m_keranjang->get_produk_kategori($kategori);	 			
        $data['kategori'] = $this->m_keranjang->get_kategori_all();	 			
        $this->load->view('Customer/templates/header',$data);	 			
        $this->load->view('Customer/v_home',$data);
        $this->load->view('Customer/templates/footer'); 
    }  
    public function tampil_cart()
    {    
        $data['kategori'] = $this->m_keranjang->get_kategori_all();
        $data['total_product'] = $this->m_keranjang->jumlah_product();
        $this->load->view('Customer/templates/header',$data);
        $this->load->view('Customer/shopping/tampil_cart',$data);
        $this->load->view('Customer/templates/footer');
    }    
    
    public function check_out()
    {    
        $data['kategori'] = $this->m_keranjang->get_kategori_all();
        $data['total_product'] = $this->m_keranjang->jumlah_product();
        $this->load->view('Customer/templates/header',$data);
        $this->load->view('Customer/shopping/check_out',$data);
        $this->load->view('Customer/templates/footer');
    }    
    
    public function detail_produk()
    {    
        $id=($this->uri->segment(4))?$this->uri->segment(4):0;
        $data['total_product'] = $this->m_keranjang->jumlah_product();
        $data['kategori']=$this->m_keranjang->get_kategori_all();
        $data['detail']=$this->m_keranjang->get_produk_id($id)->row_array();             
        $this->load->view('Customer/templates/header',$data);           
        $this->load->view('Customer/shopping/detail_produk',$data);      
        $this->load->view('Customer/templates/footer');         
    }               
                    
    function tambah()               
    {                   
        $data_produk= array(
            'id' => $this->input->post('id'),       
            'name' => $this->input->post('nama'),             
            'price' => $this->input->post('harga'),                
            'gambar' => $this->input->post('gambar'),               
            'qty' =>$this->input->post('qty')  
        );      
        $this->cart->insert($data_produk);      
        redirect('Customer/shopping');           
    }               
    function hapus($rowid)   
    {
                if ($rowid=="all")   
            {       
                $this->cart->destroy();  
            }    
 
    
        else            
            {       
                $data = array('rowid' => $rowid,
                              'qty' =>0);    
                $this->cart->update($data);  
            }       
        redirect('Customer/shopping/tampil_cart') ;      
    }           
            
    function ubah_cart()            
    {               
        $cart_info = $_POST['cart'] ;           
        foreach( $cart_info as $id => $cart )
        {    
            $rowid = $cart['rowid'];     
            $price = $cart['price'];    
            $gambar = $cart['gambar'];   
            $amount = $price * $cart['qty'] ;
            $qty = $cart['qty'];     
            $data = array(
                'rowid' => $rowid ,
                'price' => $price,
                'gambar' => $gambar,
                'amount' => $amount,
                'qty' => $qty);  
            $this->cart->update($data);     
        }           
        redirect('Customer/shopping/tampil_cart');       
    }
    public function proses_order()   
    {
        //-------------------------Input data pelanggan-------------------------     
        $data_pelanggan = array(
            'nama'          => $this->input->post('nama'),       
            'alamat'        => $this->input->post('alamat'),        
            'telp'          => $this->input->post('telp'),     
            'pengiriman'    => $this->input->post('pengiriman'),     
            'pesan'         => $this->input->post('pesan'),      
            'pembayaran'    => $this->input->post('pembayaran')
        );         
        $id_pelanggan = $this->m_keranjang->tambah_pelanggan($data_pelanggan);             
        //-------------------------Input data order----------------------------     
        $data_order = array('tanggal' => date('Y-m-d'),
                            'pelanggan' => $id_pelanggan);
        $id_order = $this->m_keranjang->tambah_order($data_order);     
        //-------------------------Input data detail order----------------------     
        if ($cart = $this->cart->contents())     
            {       
                foreach ($cart as $item)    
                    {
                        $data_detail = array(
                            'order_id'=> $id_order,
                            'produk' => $item['id'],
                            'qty' => $item['qty'],
                            'harga' => $item['price']);
                        $proses = $this->m_keranjang->tambah_detail_order( $data_detail);
                    }
            }
        //-------------------------Hapus shopping cart-------------------------
        $this->cart->destroy();
        $data['total_product'] = $this->m_keranjang->jumlah_product();   
        $data['kategori'] = $this->m_keranjang->get_kategori_all();
        $this->load->view('Customer/templates/header',$data);
        $this->load->view('Customer/shopping/sukses',$data);
        $this->load->view('Customer/templates/footer');
    }
}    
?>




