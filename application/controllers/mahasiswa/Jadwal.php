<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jadwal extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		
		if(!$this->session->userdata('mahasiswa') OR empty($this->session->userdata('mahasiswa')))
		{
			redirect('login','refresh');
		}

		$this->load->model('Mmagang');
		$this->load->model('Mjadwal');	
	}

	public function index()
	{
		
		$data['hari'] = array("Senin","Selasa","Rabu","Kamis","Jumat");

		$login = $this->session->userdata('mahasiswa');

		$data['periode_pemagang'] = $this->Mmagang->periode_magang($login['id_magang']);


		if ($this->input->post('id_periode_pemagang'))
		{
			$data['id_periode_pemagang'] = $this->input->post('id_periode_pemagang');
		}
		else
		{
			$data['id_periode_pemagang']="";
		}
		
		$data['jadwal'] = $this->Mjadwal->tampil_jadwal_magang($data['id_periode_pemagang'],$data['hari']);	


		$this->load->view('mahasiswa/header');
		$this->load->view('mahasiswa/sidebar');
		$this->load->view('mahasiswa/jadwal', $data );
		$this->load->view('mahasiswa/footer');
	}

}

/* End of file Jadwal.php */
/* Location: ./application/controllers/mahasiswa/Jadwal.php */