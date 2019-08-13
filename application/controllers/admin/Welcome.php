<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller 
{
	public function __construct()
	{
		parent::__construct();
		if(!$this->session->userdata('admin'))
		{
			redirect('admin/login','refresh');
		}

		$this->load->model('Mmagang');
	}

	public function index()
	{
		$data['magang'] = $this->Mmagang->tampil_magang_baru("Pending");

		//memanggil view
		$this->load->view('admin/header');
		$this->load->view('admin/sidebar');
		$this->load->view('admin/index', $data);
		//$this->load->view('admin/footer');

		if ($this->input->post('status_magang'))
		{
			$input = $this->input->post('status_magang');
			$this->Mmagang->ubah_status($input);
			redirect('admin','refresh');
		}
	}

	function logout()
	{
		$this->session->unset_userdata('admin');
		redirect('admin/login','refresh');
	}

}

/* End of file welcome.php */
/* Location: ./application/controllers/admin/welcome.php */