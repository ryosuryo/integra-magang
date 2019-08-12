<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mjadwal extends CI_Model 
{

	function tampil_jadwal_periode($id_periode)
	{
		$this->db->group_by('jadwal_magang.id_periode_pemagang');
		$this->db->join('periode_pemagang', 'jadwal_magang.id_periode_pemagang = periode_pemagang.id_periode_pemagang', 'left');
		$this->db->join('magang', 'periode_pemagang.id_magang = magang.id_magang', 'left');
		$this->db->where('periode_pemagang.id_periode', $id_periode);
		$ambil = $this->db->get('jadwal_magang');
		$data = $ambil->result_array();
		$semua=array();
		foreach ($data as $key => $value) 
		{
			$this->db->where('id_periode_pemagang', $value['id_periode_pemagang']);
			$ambil1 = $this->db->get('jadwal_magang');
			$jadwal = $ambil1->result_array();
			$value['jadwal']=$jadwal;
			$semua[] = $value;
		}
		return $semua;
	}

	function simpan_jadwal($inputan)
	{
		$this->db->insert('jadwal_magang', $inputan);
	}

	function tampil_jadwal_magang($id_magang,$hari)
	{
		$semua=array();
		foreach ($hari as $key => $nama_hari) 
		{
			$this->db->where('hari_magang', $nama_hari);
			$this->db->where('id_periode_pemagang', $id_magang);
			$ambil = $this->db->get('jadwal_magang');
			$data = $ambil->row_array();
			if(!empty($data))
			{
				$semua[$nama_hari] = $data;	
			}
			
		}

		return $semua;
	}

	function detail($id)
	{
		$this->db->join('periode_pemagang', 'jadwal_magang.id_periode_pemagang = periode_pemagang.id_periode_pemagang', 'left');
		$this->db->where('id_jadwal', $id);
		$ambil = $this->db->get('jadwal_magang');
		$data = $ambil->row_array();
		return $data;
	}

	function hapus_jadwal($id)
	{
		$this->db->where('id_jadwal', $id);
		$this->db->delete('jadwal_magang');
	}


	function ubah_jadwal($inputan,$id)
	{
		$this->db->where('id_jadwal', $id);
		$this->db->update('jadwal_magang', $inputan);
	}


	

}

/* End of file Mjadwal.php */
/* Location: ./application/models/Mjadwal.php */