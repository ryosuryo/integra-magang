<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mperiode extends CI_Model 

{
	
	function tampil_periode_aktif()
	{
		$this->db->where('status', "Aktif");
		$ambil = $this->db->get('periode_magang');
		$data = $ambil->result_array();
		return $data;
	}
	function tampil()
	{
		return $this->db->join('magang', 'magang.id_magang = periode_pemagang.id_magang')
						->where('magang.status_magang', 'Diterima')
				 		->get('periode_pemagang')
				 		->result();
	}
	function hapus($id_periode)
	{
		$this->db->where('id_periode', $id_periode);
		$this->db->delete('periode_magang');
	}

	function detail($id_periode)
	{
		$this->db->where('id_periode', $id_periode);
		$ambil = $this->db->get('periode_magang');
		$data = $ambil->row_array();
		return $data;
	}

	public function limit_magang($limit, $start)
	{
		return $this->db->join('magang','magang.id_magang=periode_pemagang.id_magang')
						->where('magang.status_magang','Diterima')
						->limit($limit, $start)
						->get('periode_pemagang')
						->result();
	}

	public function number_rows(){
	return $this->db->join('magang','magang.id_magang=periode_pemagang.id_magang')
					->where('magang.status_magang','Diterima')
					->get('periode_pemagang')
					->num_rows();
	}

}

/* End of file Mperiode.php */
/* Location: ./application/models/Mperiode.php */