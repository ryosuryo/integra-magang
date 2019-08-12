<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Aktifitas extends CI_Controller 
{
	public function __construct()
	{
		parent::__construct();
		if(!$this->session->userdata('admin'))
		{
			redirect('admin/login','refresh');
		}
		$this->load->model('Maktifitas');

	}

	public function index()
	{
		$data['data_aktifitas'] = $this->Maktifitas->aktifitas_magang();

		$data['aktifitas'] = $this->Maktifitas->tampil_aktifitas();
		$this->load->view('admin/header');
		$this->load->view('admin/sidebar');
		$this->load->view('admin/tampil_aktifitas', $data);
		$this->load->view('admin/footer');

		
	}
	function hapus($id)
	{
		$this->Maktifitas->hapus_aktifitas($id);
		redirect('admin/aktifitas','refresh');
	}

}

/* End of file Aktifitas.php */
/* Location: ./application/controllers/admin/Aktifitas.php */