<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Absensi extends CI_Controller {

	public function index()
	{
		$this->load->view('mahasiswa/header');
		$this->load->view('mahasiswa/sidebar');
		$this->load->view('mahasiswa/v_absensi');
		$this->load->view('mahasiswa/footer');	
    }
    public function absen_izin()
    {
        
    }

}

/* End of file Absensi.php */
/* Location: ./application/controllers/mahasiswa/Absensi.php */