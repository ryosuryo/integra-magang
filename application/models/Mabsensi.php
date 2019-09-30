<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mabsensi extends CI_Model {

	public function tampil_absen()
	{
		return $this->db->join('magang','magang.id_magang=absensi.id_magang')->where('magang.status_magang','Diterima')->get('absensi')->result();
	}
	public function get_magang()
	{
		return $this->db->where('status_magang','Diterima')->get('magang')->result();
	}
	public function cari_absen($nama,$limit,$start)
	{
		return $this->db->where('nama_magang', $nama)
						->join('magang','magang.id_magang=absensi.id_magang')
						->limit($limit, $start)
						->get('absensi');
	}

	public function limit_magang($limit, $start)
	{
		return $this->db->join('magang','magang.id_magang=absensi.id_magang')
						->where('magang.status_magang','Diterima')
						->limit($limit, $start)
						->get('absensi')
						->result();
	}

	public function number_rows(){
	return $this->db->join('magang','magang.id_magang=absensi.id_magang')
						->where('magang.status_magang','Diterima')
						->get('absensi')
						->num_rows();
	}


}

/* End of file Mabsensi.php */
/* Location: ./application/models/Mabsensi.php */