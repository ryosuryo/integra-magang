<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{

		//membuat view
		$this->load->view('v_login');
		//membuat model Mlogin
		//$this->load->model('Mlogin');

		
		
	}

	public function proses_login()
	{
		$email_magang = $this->input->post('email_magang');
		$password = $this->input->post('password');
		$magang = $this->db->get_where('magang', ['email_magang' => $email_magang])->row_array();

		if ($magang) 
		{
			if ($magang['is_actived']==1) 
			{
				if ($magang['status_magang']=="Diterima") 
				{
					if (password_verify($password,$magang['password_magang'])) 
					{
						$data = [
							'id_magang' => $magang['id_magang'],	
							'email_magang' => $magang['email_magang'],
							'nama_magang' => $magang['nama_magang'],
							'password' => $magang['password_magang'],
							'logged' => true
						];
						$this->session->set_userdata($data);
						redirect('mahasiswa','refresh');
					}
					else
					{
						$this->session->set_flashdata('pesan', 'password salah');
						redirect('Login','refresh');
					}
				}
				else
				{
					$this->session->set_flashdata('pesan', 'Kamu Belum diterima, Tidak bisa login');
					redirect('Login','refresh');
				}
			}
			else
			{
				$this->session->set_flashdata('pesan', 'email belum aktif');
				redirect('Login','refresh');
			}
		}
		else
		{
			$this->session->set_flashdata('pesan', 'email belum terdaftar');
			redirect('Login','refresh');
		}
	}

	function logout()
	{
		$this->session->userdata('mahasiswa');
		redirect('login','refresh');
	}

}

/* End of file login.php */
/* Location: ./application/controllers/login.php */