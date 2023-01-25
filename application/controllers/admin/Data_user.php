<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Data_user extends CI_Controller
{

    public function index(){

    $data['user'] = $this->Model_user->ambil_user();
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/data_user', $data);
        $this->load->view('templates_admin/footer');
    }

    public function tambah_aksi(){

    $data['user'] = $this->Model_user->ambil_user();
        $this->form_validation->set_rules('id_user', 'ID User', 'required');
        $this->form_validation->set_rules('nama_user', 'Nama User', 'required');
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'password', 'required');
        $this->form_validation->set_rules('role_id', 'level user', 'required');

    if ($this->form_validation->run() == false) {
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/tambah_user');
        $this->load->view('templates_admin/footer');
    } else {
        $this->Model_user->tambah_user();
        redirect('admin/data_user');   
        }

    }

    public function edit_aksi($id){

    $data['user'] = $this->Model_user->ambil_user_id($id);
        $this->form_validation->set_rules('id_user', 'ID User', 'required');
        $this->form_validation->set_rules('nama_user', 'Nama User', 'required');
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'password', 'required');
        $this->form_validation->set_rules('role_id', 'role_id', 'required');

    if ($this->form_validation->run() == false) {
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/edit_user', $data);
        $this->load->view('templates_admin/footer');
    } else {
        $this->Model_user->edit_user();
        redirect('admin/data_user');
        }

    }

    public function hapus_aksi($id){
        $this->Model_user->hapus_user($id);
        redirect('admin/data_user');
    }

}

/* End of file Kategori_barang.php */