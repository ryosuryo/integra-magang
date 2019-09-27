<?php
class Mgrafik extends CI_Model{
 
    function get_data_pemagang(){
        $query = $this->db->query("SELECT YEAR(tgl_awal), COUNT(id_magang) AS jumlah_pemagang FROM periode_pemagang GROUP BY (YEAR(tgl_awal))");

        if($query->num_rows() > 0){
            foreach($query->result() as $data){
                $hasil[] = $data;
            }
            return $hasil;
        }
    }

    function get_data_pendaftar(){
        $ambil = $this->db->query("SELECT COUNT(id_magang) AS jumlah_pendaftar FROM magang");
        
    }
 
}