<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Model_barang extends CI_Model
{

 public function ambil_barang()
 {
  return $query = $this->db->get('tb_barang')->result();
 }

 public function ambil_barang_id($id)
 {
  return $this->db->get_where('tb_barang', ['id_brg' => $id])->row();
 }
  
 public function ambil_kategori(){
    return $query = $this->db->get('tb_kategori')->result();
 }

 public function joinkategori_barang(){

    $this->db->select('*');
    $this->db->join('tb_kategori', 'tb_kategori.id_kategori = tb_barang.id_kategori');
    $this->db->from('tb_barang');
    $query = $this->db->get();
    return $query->result();

 }

 public function joinkategori_barangid($id){

    $this->db->select('*');
    $this->db->join('tb_kategori', 'tb_kategori.id_kategori = tb_barang.id_kategori');
    $this->db->from('tb_barang');
    $this->db->where('tb_barang.id_brg', $id);
    $query = $this->db->get();
    return $query->row();

 }

 public function tambah_barang()
 {
  $data = [
   "id_brg" => $this->input->post('id_brg'),
   "nama_brg" => $this->input->post('nama_brg'),
   "keterangan" => $this->input->post('keterangan'),
   "id_kategori" => $this->input->post('id_kategori'),
   "stok" => $this->input->post('stok'),
   "harga" => $this->input->post('harga'),
   "kode_brg" => $this->input->post('kode_brg'),
  ];
  $this->db->insert('tb_barang', $data);
 }

 public function edit_barang()
 {
  $data = [
   "id_brg" => $this->input->post('id_brg'),
   "nama_brg" => $this->input->post('nama_brg'),
   "keterangan" => $this->input->post('keterangan'),
   "id_kategori" => $this->input->post('id_kategori'),
   "stok" => $this->input->post('stok'),
   "harga" => $this->input->post('harga'),
   "kode_brg" => $this->input->post('kode_brg'),
  ];

  $this->db->where('id_brg', $this->input->post('id_brg'));
  $this->db->update('tb_barang', $data);
 }

 public function hapus_barang($id)
 {
  $this->db->where('id_brg', $id);
  $this->db->delete('tb_barang');
 }

 public function find($id)
 {
     $result = $this->db->where('id_brg', $id)
                        ->limit(1)
                        ->get('tb_barang');
    if($result->num_rows() > 0){
        return $result->row();
    }else{
        return array();
    }
 }
 

}

/* End of file Model_barang.php */