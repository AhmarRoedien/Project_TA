<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Transaksi_admin extends CI_Controller
{

    public function index()
    {
        $data['barang'] = $this->Model_barang->joinkategori_barang();
        
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/transaksi_admin', $data);
        $this->load->view('templates_admin/footer');
    }
    
    public function laporan(){

        $data['transaksi'] = $this->Model_transaksi->ambil_transaksi();
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/laporan', $data);
        $this->load->view('templates_admin/footer');
    }

    public function print()
    {
        $data['transaksi'] = $this->Model_transaksi->ambil_transaksi();
        $this->load->view('admin/laporan_print', $data);

    }

    // public function tambah_keranjang($id)
    // {

    //     $barang = $this->Model_barang->find($id);

    //     $data = array(
    //         'id'      => $barang->id_brg,
    //         'qty'     => 1,
    //         'price'   => $barang->harga,
    //         'name'    => $barang->nama_brg,
    //     );
            
    //         $this->cart->insert($data);
    //         redirect('admin/transaksi_admin');
    // }
   
    // public function keranjang()
    // {
    //     $this->load->view('templates_admin/header');
    //     $this->load->view('templates_admin/sidebar');
    //     $this->load->view('admin/keranjang');
    //     $this->load->view('templates_admin/footer');
    // }

    // public function hapus_keranjang()
    // {
    //  $this->cart->destroy();
    //  redirect('transaksi_admin/index');
    // }

}

/* End of file Data_transaksi.php */