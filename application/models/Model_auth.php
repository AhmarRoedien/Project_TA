<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Model_auth extends CI_Model
{

 public function cek_login()
 {
    
    $username   = set_value('username');
     $password   = set_value('password');

     $result     = $this->db->where('username',$username)
                             ->where('password',$password)
                             ->limit(1)
                             ->get('tb_user');
                        
     if($result->num_rows() > 0){
        $this->session->set_userdata($data);
                            
         return $result->row();
         
     }else{
         return array();
     }
 }
}

/* End of file Model_auth.php */