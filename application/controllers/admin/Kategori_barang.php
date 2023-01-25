<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Kategori_barang extends CI_Controller
{

 public function index()
 {
    $data['kategori'] = $this->Model_kategori->ambil_kategori();
    $this->load->view('templates_admin/header');
    $this->load->view('templates_admin/sidebar');
    $this->load->view('admin/kategori_barang', $data);
    $this->load->view('templates_admin/footer');
 }

 public function tambah_aksi()
 {
  $data['kategori'] = $this->Model_kategori->ambil_kategori();
  $this->form_validation->set_rules('id_kategori', 'ID Kategori', 'required');
  $this->form_validation->set_rules('nama_kategori', 'kategori', 'required');

  if ($this->form_validation->run() == false) {
    $this->load->view('templates_admin/header');
    $this->load->view('templates_admin/sidebar');
    $this->load->view('admin/kategori_barang', $data);
    $this->load->view('templates_admin/footer');
  } else {
   $this->Model_kategori->tambah_kategori();
   redirect('admin/kategori_barang');
  }

 }

 public function edit_aksi($id)
 {
    $data['kategori'] = $this->Model_kategori->ambil_kategori_id($id);
    $this->form_validation->set_rules('id_kategori', 'ID Kategori', 'required');
    $this->form_validation->set_rules('nama_kategori', 'Nama Kategori', 'required');

  if ($this->form_validation->run() == false) {
   $this->load->view('templates_admin/header');
   $this->load->view('templates_admin/sidebar');
   $this->load->view('admin/edit_kategori', $data);
   $this->load->view('templates_admin/footer');
  } else {
   $this->Model_kategori->edit_kategori();
   redirect('admin/kategori_barang');
  }

 }

 public function hapus_aksi($id)
 {
  $this->Model_kategori->hapus_kategori($id);
  redirect('admin/kategori_barang');
 }

}

/* End of file Kategori_barang.php */