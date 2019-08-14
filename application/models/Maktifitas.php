<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Maktifitas extends CI_Model 
{

	function tampil_aktifitas_magang($id)
	{
		$this->db->where('periode_pemagang.id_magang', $id);
		$this->db->join('periode_pemagang', 'aktifitas.id_periode_pemagang = periode_pemagang.id_periode_pemagang', 'left');
		$ambil = $this->db->get('aktifitas');
		$data = $ambil->result_array();
		return $data;

	}

	function aktifitas_magang()
	{
		$this->db->join('periode_pemagang', 'aktifitas.id_periode_pemagang = periode_pemagang.id_periode_pemagang', 'left');
		$this->db->join('magang', 'periode_pemagang.id_magang = magang.id_magang', 'left');
		$ambil = $this->db->get('aktifitas');
		$data = $ambil->result_array();
		return $data;
	}

	function simpan_aktifitas_magang($input)
	{
		$config['upload_path'] = 'assets/aktifitas';
		$config['allowed_types'] = 'gif|jpg|png|pdf';
		
		$this->load->library('upload', $config);

		if ($this->upload->do_upload('file_aktifitas'))
		{

			$input['file_aktifitas'] = $this->upload->data("file_name");
		}


		$input['tgl_aktifitas'] = date("Y-m-d");


		$this->db->insert('aktifitas', $input);
	}


	function tampil_aktifitas()
	{

		$this->db->group_by('aktifitas.id_periode_pemagang');
		//$this->db->join('periode_pemagang', 'aktifitas.id_periode_pemagang = periode_pemagang.id_periode_pemagang', 'left');
		$this->db->join('magang', 'aktifitas.id_magang = magang.id_magang', 'left');
		$ambil = $this->db->get('aktifitas');
		$data = $ambil->result_array();


		$semua=array();
		foreach ($data as $key => $value) 
		{
			$this->db->where('periode_pemagang.id_periode_pemagang', $value['id_periode_pemagang']);
			$this->db->join('periode_pemagang', 'aktifitas.id_periode_pemagang = periode_pemagang.id_periode_pemagang', 'left');
			$this->db->join('magang', 'periode_pemagang.id_magang = magang.id_magang', 'left');

			$ambil1 = $this->db->get('aktifitas');
			$data1 = $ambil1->result_array();
			$value['detail']=$data1;
			$semua[] = $value;
		}

		return $semua;

	}

	function hapus_aktifitas($id)
	{
		$this->db->where('id_aktifitas', $id);
		$this->db->delete('aktifitas');
	}

	function hapus_aktifitas_mahasiswa($id)
	{
		$this->db->where('id_aktifitas', $id);
		$this->db->delete('aktifitas');
	}

	

	

}

/* End of file Maktifitas.php */
/* Location: ./application/models/Maktifitas.php */