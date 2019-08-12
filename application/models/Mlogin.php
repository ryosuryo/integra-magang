<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mlogin extends CI_Model 
{

	function login_magang($input)
	{
		//memecah input username password
		$username = $input['username'];
		$password = sha1($input['password']);

		$this->db->where("(nim_magang='$username' OR email_magang='$username')");
		$this->db->where('password_magang', $password);
		$this->db->where('status_magang', 'Diterima');
		$ambil = $this->db->get('magang');


		$nilai = $ambil->num_rows();

		//jika nilai samdengan  1 maka
		if ($nilai==1) 
		{
			$akun = $ambil->row_array();
			$this->session->set_userdata('mahasiswa', $akun);

			return 'berhasil';
		}
		else
		{
			return 'gagal';
		}


	}

	function login_admin($username,$password)
	{
		$pass=sha1($password);

		$this->db->where('username', $username);
		$this->db->where('password', $pass);
		$ambil = $this->db->get('admin');

		$cek = $ambil->num_rows();


		if($cek==1)
		{
			$akun = $ambil->row_array();
			$this->session->set_userdata('admin', $akun);

			return 'berhasil';
		}
		else
		{
			return 'gagal';
		}
	}

	

}

/* End of file Mlogin.php */
/* Location: ./application/models/Mlogin.php */