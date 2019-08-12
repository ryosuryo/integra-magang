<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profil extends CI_Controller 
{
	public function __construct()
	{


		parent::__construct();

		if(!$this->session->userdata('mahasiswa') OR empty($this->session->userdata('mahasiswa')))
		{
			redirect('login','refresh');
		}

		$this->load->model('Mmagang');
	}

	public function index()
	{

		$login = $this->session->userdata('mahasiswa');
		$data['magang'] = $this->Mmagang->detail($login['id_magang']);
		$data['periode_pemagang'] = $this->Mmagang->periode_magang($login['id_magang']);

		$this->load->view('mahasiswa/header');
		$this->load->view('mahasiswa/sidebar');
		$this->load->view('mahasiswa/profil/profil', $data );
		$this->load->view('mahasiswa/footer');

		if ($this->input->post())
		{
			$this->Mmagang->ubah_magang($this->input->post(), $login['id_magang']);
			redirect('mahasiswa/profil','refresh');
		}

	}

	

	function download()
	{
		//mendapatkan data login mahasiswa
		$login = $this->session->userdata('mahasiswa');
		$data["magang"] = $this->Mmagang->detail($login['id_magang']);

		$this->load->view('mahasiswa/profil/download', $data);
	}





}

/* End of file Profil.php */
/* Location: ./application/controllers/mahasiswa/Profil.php */