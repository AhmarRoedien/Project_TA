<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Model_user extends CI_Model
{

 public function ambil_user()
 {
  return $query = $this->db->get('tb_user')->result();
 }

 public function ambil_user_id($id)
 {
  return $this->db->get_where('tb_user', ['id_user' => $id])->row();
 }

 public function tambah_user()
 {
     $password = $this->input->post('password'); 
  $data = [
   "id_user" => $this->input->post('id_user'),
   "nama_user" => $this->input->post('nama_user'),
   "username" => $this->input->post('username'),
   "password" => md5($password),
   "role_id" => $this->input->post('role_id'),

  ];
    $this->db->insert('tb_user', $data);
 }

 public function edit_user()
 {
  $data = [
    "id_user" => $this->input->post('id_user'),
    "nama_user" => $this->input->post('nama_user'),
    "username" => $this->input->post('username'),
    "password" => md5($password),
    "role_id" => $this->input->post('role_id'),
  ];

  $this->db->where('id_user', $this->input->post('id_user'));
  $this->db->update('tb_user', $data);

 }

 public function hapus_user($id)
 {
  $this->db->where('id_user', $id);
  $this->db->delete('tb_user');
 }

}

/* End of file Model_kategori.php */