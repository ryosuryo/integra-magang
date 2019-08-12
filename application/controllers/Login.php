<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{

		//membuat view
		$this->load->view('login');
		//membuat model Mlogin
		$this->load->model('Mlogin');

		if($this->input->post())
		{
			$cek = $this->Mlogin->login_magang($this->input->post());

			if($cek=="berhasil")
			{
				redirect('mahasiswa','refresh');
			}
			else
			{
				echo "<script>alert('Login gagal');location='".base_url("login")."'</script>";
			}
		}
		
	}

}

/* End of file login.php */
/* Location: ./application/controllers/login.php */