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
		$ambil = $this->db->get('periode_magang');
		$data = $ambil->result_array();
		return $data;
	}

	function tambah($input)
	{
		$this->db->insert ('periode_magang', $input);
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


	function edit ($input,$id_periode)
	{
		$this->db->where('id_periode', $id_periode);
		$this->db->update('periode_magang', $input);
	}

	

}

/* End of file Mperiode.php */
/* Location: ./application/models/Mperiode.php */