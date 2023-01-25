<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Model_transaksi extends CI_Model {

    public function ambil_transaksi()
    {
        date_default_timezone_set('Asia/Jakarta');
        return $query = $this->db->get('tb_transaksi')->result();
    }

    public function nomor_nota()
    {
        $this->db->select('RIGHT(tb_transaksi.id_transaksi,2) as id_transaksi', FALSE);
        $this->db->order_by('id_transaksi', 'DESC');
        $this->db->limit(1);
        $query = $this->db->get('tb_transaksi');
        if($query->num_rows() <> 0){
            $data = $query->row();
            $no_nota = intval($data->id_transaksi) + 1;
        } else {
            $no_nota = 1;
        }
        $date=date('Ymd');
        $limit = str_pad($no_nota, 4, "0", STR_PAD_LEFT);
        $nota = "NOTA".$date."-".$limit;
        return $nota;  
        
    }
    

}

/* End of file Model_transaksi.php */