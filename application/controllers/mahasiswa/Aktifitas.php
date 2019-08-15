<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Aktifitas extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();

		$this->load->model('Mmagang');
		$this->load->model('Maktifitas');	
	}
	public function index()
	{

		$id = $this->session->userdata('id_magang');
		$data['aktifitas'] = $this->Maktifitas->tampil_aktifitas_magang($id);
		//$data['periode_pemagang'] = $this->Mmagang->periode_magang($login['id_magang']);


		$this->load->view('mahasiswa/header');
		$this->load->view('mahasiswa/sidebar');
		$this->load->view('mahasiswa/aktifitas', $data );
		$this->load->view('mahasiswa/footer');
	}
	public function tambah_aktifitas()
	{
		$input = $this->input->post();
		$id = $this->session->userdata('id_magang');
		$data = [
			'id_magang' => $id,
			'tgl_aktifitas' => $input['tgl_aktifitas'],
			'isi_aktifitas' => $input['isi_aktifitas'],
			'status_aktifitas' => "pending"
		];
		
		$this->db->insert('aktifitas', $data);
		redirect('mahasiswa/aktifitas','refresh');
	}

	function hapus($id)
	{
		$this->Maktifitas->hapus_aktifitas_mahasiswa($id);
		redirect('mahasiswa/aktifitas','refresh');
	}

}

/* End of file Aktifitas.php */
/* Location: ./application/controllers/mahasiswa/Aktifitas.php */