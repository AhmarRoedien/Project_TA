<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

 public function login()
 {
  $this->form_validation->set_rules('username', 'Username', 'required');
  $this->form_validation->set_rules('password', 'Password', 'required');
  if ($this->form_validation->run() == false) {
   $this->load->view('form_login');
  } else {
   $auth = $this->Model_auth->cek_login();

   if ($auth == false) {
    $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Username atau Password Anda Salah!</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>');
    redirect('auth/login');
   } else {

    $this->session->set_userdata('username', $auth->username);
    $this->session->set_userdata('role_id', $auth->role_id);

    switch ($auth->role_id) {
     case 1:redirect('admin/dashboard_admin');
      break;
     case 2:redirect('dashboard');
      break;
     default:break;
    }
   }
  }
 }
 public function logout()
 {
  $this->session->unset_userdata('role_id');
  $this->session->unset_userdata('username');
  redirect('auth/login');

 }

}

/* End of file Auth.php */