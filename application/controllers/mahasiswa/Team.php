<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Team	 extends CI_Controller 
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('Mmagang');
	}

	

	public function index()
	{
		$login = $this->session->userdata('mahasiswa');

		$this->load->view('mahasiswa/header');
		$this->load->view('mahasiswa/sidebar');
		$this->load->view('mahasiswa/Team');
		$this->load->view('mahasiswa/footer');

		if ($this->input->post())
		{
			$input = $this->input->post();
		 	$input['id_magang'] = $login['id_magang'];
			$this->Mmagang->tambah_team($input);
			redirect('mahasiswa','refresh');
		}
	}

}

/* End of file Team.php */
/* Location: ./application/controllers/mahasiswa/Team.php */