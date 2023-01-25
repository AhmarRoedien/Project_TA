<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Model_kategori extends CI_Model
{

 public function ambil_kategori()
 {
  return $query = $this->db->get('tb_kategori')->result();
 }

 public function ambil_kategori_id($id)
 {
  return $this->db->get_where('tb_kategori', ['id_kategori' => $id])->row();
 }

 public function tambah_kategori()
 {
  $data = [
   "id_kategori" => $this->input->post('id_kategori'),
   "nama_kategori" => $this->input->post('nama_kategori'),
  ];

  $this->db->insert('tb_kategori', $data);
 }

 public function edit_kategori()
 {
  $data = [
    "id_kategori" => $this->input->post('id_kategori'),
    "nama_kategori" => $this->input->post('nama_kategori'),

  ];

  $this->db->where('id_kategori', $this->input->post('id_kategori'));
  $this->db->update('tb_kategori', $data);

 }

 public function hapus_kategori($id)
 {
  $this->db->where('id_kategori', $id);
  $this->db->delete('tb_kategori');
 }

}

/* End of file Model_kategori.php */