<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Transaksi extends CI_Controller {

    public function index()
    {
        $data['barang'] = $this->Model_barang->joinkategori_barang();
  
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('transaksi', $data);
        $this->load->view('templates/footer');
    }

    public function tambah_keranjang($id)
    {

        $barang = $this->Model_barang->find($id);

        $data = array(
            'id'      => $barang->id_brg,
            'qty'     => 1,
            'price'   => $barang->harga,
            'name'    => $barang->nama_brg,
        );
            
            $this->cart->insert($data);
            redirect('transaksi');
    }
   
    public function detail_keranjang()
    {
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('detail_keranjang');
        $this->load->view('templates/footer');
    }

    public function print()
    {
        $data['transaksi'] = $this->Model_transaksi->tampil_data("tb_transaksi")->result();
        $this->load->view('print_transaksi', $data);

    }

    public function hapus_keranjang()
    {
     $this->cart->destroy();
     redirect('transaksi/index');
    }

    public function simpan_beli()
    {
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('detail_beli');
        $this->load->view('templates/footer'); 
    }

}   

/* End of file Transaksi.php */