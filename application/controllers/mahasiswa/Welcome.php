<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller 

{

	// buat construct

	function __construct()
	{
		parent::__construct();


		//jika tidak ada session mahasiswa maka
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
		$data['magang'] = $this->Mmagang->detail($login['id_magang']);

		$data['aktifitas'] = $this->Maktifitas->tampil_aktifitas_magang($login['id_magang']);

		$data['detail'] = $this->Mmagang->detail_magang($login['id_magang']);

		$this->load->view('mahasiswa/header');
		$this->load->view('mahasiswa/sidebar');
		$this->load->view('mahasiswa/index' ,$data);
		$this->load->view('mahasiswa/footer');

		if ($this->input->post())
		{
			$this->Mmagang->ubah_magang($this->input->post(), $login['id_magang']);
			redirect('mahasiswa','refresh');
		}
		
	}

	function logout()
	{
		$this->session->userdata('mahasiswa');
		redirect('login','refresh');
	}

}

/* End of file Welcome.php */
/* Location: ./application/controllers/mahasiswa/Welcome.php */