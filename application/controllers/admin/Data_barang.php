<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Data_barang extends CI_Controller
{

 public function index()
 {
  $data['barang'] = $this->Model_barang->joinkategori_barang();
  
  $this->load->view('templates_admin/header');
  $this->load->view('templates_admin/sidebar');
  $this->load->view('admin/data_barang', $data);
  $this->load->view('templates_admin/footer');
 }

 public function tambah_aksi()
 {
  $data['barang'] = $this->Model_barang->ambil_barang();
  $data['kategori'] = $this->Model_barang->ambil_kategori();
    $this->form_validation->set_rules('id_brg', 'id product', 'required');
    $this->form_validation->set_rules('kode_brg', 'kode product', 'required');
    $this->form_validation->set_rules('nama_brg', 'name product', 'required');
    $this->form_validation->set_rules('keterangan', 'description', 'required');
    $this->form_validation->set_rules('id_kategori', 'category', 'required');
    $this->form_validation->set_rules('stok', 'stock', 'required');
    $this->form_validation->set_rules('harga', 'price', 'required');

  if ($this->form_validation->run() == false) {
    $this->load->view('templates_admin/header');
    $this->load->view('templates_admin/sidebar');
    $this->load->view('admin/tambah_barang', $data);
    $this->load->view('templates_admin/footer');
  } else {
    $this->Model_barang->tambah_barang();
    redirect('admin/data_barang');
  }
 }

 public function edit_aksi($id)
 {
  //$data['barang'] = $this->Model_barang->ambil_barang_id($id);
  $data['kategori'] = $this->Model_barang->ambil_kategori();
  $data['barang'] = $this->Model_barang->joinkategori_barangid($id);
  $this->form_validation->set_rules('id_brg', 'id product', 'required');
  $this->form_validation->set_rules('kode_brg', 'kode product', 'required');
  $this->form_validation->set_rules('nama_brg', 'name product', 'required');
  $this->form_validation->set_rules('keterangan', 'description', 'required');
  $this->form_validation->set_rules('id_kategori', 'category', 'required');
  $this->form_validation->set_rules('stok', 'stock', 'required');
  $this->form_validation->set_rules('harga', 'price', 'required');

  if ($this->form_validation->run() == false) {
   $this->load->view('templates_admin/header');
   $this->load->view('templates_admin/sidebar');
   $this->load->view('admin/edit_barang', $data);
   $this->load->view('templates_admin/footer');
  } else {
   $this->Model_barang->edit_barang();
   redirect('admin/data_barang');
  }
 }

 public function print_barang()
 {
     $data['barang'] = $this->Model_barang->joinkategori_barang();

     $this->load->view('admin/laporan_barang',$data);
     
 }

 public function print_barang_pdf()
 {
    $this->load->library('dompdf_gen');

     $data['barang'] = $this->Model_barang->joinkategori_barang();

     $this->load->view('admin/laporan_barang_pdf',$data);

     $paper_size = 'A4';
     $orientation = 'Landscape';
     $html = $this->output->get_output();

     $this->dompdf->set_paper($paper_size, $orientation);

     $this->dompdf->load_html($html);
     $this->dompdf->render();
     $this->dompdf->stream("laporan_barang.pdf", array('Attachment' => 0));
     
 }
 
 public function hapus_aksi($id)
 {
  $this->Model_barang->hapus_barang($id);
  redirect('admin/data_barang');
 }

}

/* End of file Data_barang.php */