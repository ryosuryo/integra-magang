<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Aktifitas extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();

		if(!$this->session->userdata('mahasiswa') OR empty($this->session->userdata('mahasiswa')))
		{
			redirect('login','refresh');
		}

		$this->load->model('Mmagang');
		$this->load->model('Maktifitas');	
	}
	public function index()
	{

		$login = $this->session->userdata('mahasiswa');
		$data['aktifitas'] = $this->Maktifitas->tampil_aktifitas_magang($login['id_magang']);
		$data['periode_pemagang'] = $this->Mmagang->periode_magang($login['id_magang']);


		$this->load->view('mahasiswa/header');
		$this->load->view('mahasiswa/sidebar');
		$this->load->view('mahasiswa/aktifitas', $data );
		$this->load->view('mahasiswa/footer');

		if ($this->input->post())
		{
			$this->Maktifitas->simpan_aktifitas_magang($this->input->post());
			redirect('mahasiswa/aktifitas','refresh');
		}

	}

	function hapus($id)
	{
		$this->Maktifitas->hapus_aktifitas_mahasiswa($id);
		redirect('mahasiswa/aktifitas','refresh');
	}

}

/* End of file Aktifitas.php */
/* Location: ./application/controllers/mahasiswa/Aktifitas.php */