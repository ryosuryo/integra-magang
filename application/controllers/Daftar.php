<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Daftar extends CI_Controller 
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Mmagang');
		$this->load->model('Mperiode');
	}

	public function index()
	{
		$this->load->view('daftar');
		if($this->input->post())
		{
			$input = $this->input->post();

			

			$id = $this->Mmagang->daftar_magang($input);
			if ($id=="gagal")
			{
				echo "<script>alert('Email sudah terdaftar'); location='".base_url('daftar')."'</script>";
			}
			else
			{
				redirect("daftar/kampus/$id",'refresh');
			}

		}
		
	}

	function kampus($id_magang)
	{
		//$data['periode'] = $this->Mperiode->tampil_periode_tahun();
		$this->load->view('daftar_2');


		if ($this->input->post())
		{
			$input = $this->input->post();

			$inputan['kampus_magang'] = $input['kampus_magang'];
			$inputan['jurusan_magang'] = $input['jurusan_magang'];
			$inputan['nim_magang'] = $input['nim_magang'];
			$inputan['status_magang'] = "pending";
			$inputan['is_actived'] = 1;
			$inputan['date_created'] = time('hh:mm:ss');
			$this->Mmagang->daftarmagang($inputan,$id_magang);
			$this->Mmagang->periode_pemagang($id_magang);
			redirect("daftar/selesai/$id_magang",'refresh');

		}
	}

	function selesai($id_magang)
	{
		$data['detail'] = $this->Mmagang->detail($id_magang);
		//$data['periode'] = $this->Mmagang->periode_magang($id_magang);
		$this->load->view('daftar_selesai', $data);


	}

}

/* End of file Daftar.php */
/* Location: ./application/controllers/Daftar.php */