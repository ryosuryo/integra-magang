<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller 

{

	// buat construct

	function __construct()
	{
		parent::__construct();


		//jika tidak ada session mahasiswa maka
		$this->load->model('Mmagang');
		$this->load->model('Maktifitas');
	}



	public function index()
	{
		$id = $this->session->userdata('id_magang');
		$data['magang'] = $this->Mmagang->detail($id);

		$data['aktifitas'] = $this->Maktifitas->tampil_aktifitas_magang($id);

		//$data['detail'] = $this->Mmagang->detail_magang($login['id_magang']);

		$this->load->view('mahasiswa/header');
		$this->load->view('mahasiswa/sidebar');
		$this->load->view('mahasiswa/index' ,$data);
		$this->load->view('mahasiswa/footer');

		if ($this->input->post())
		{
			$this->Mmagang->ubah_magang($this->input->post(), $id);
			redirect('mahasiswa','refresh');
		}
		
	}

	

}

/* End of file Welcome.php */
/* Location: ./application/controllers/mahasiswa/Welcome.php */