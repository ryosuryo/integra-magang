<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Aktifitas extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();

		$this->load->model('Mmagang');
		$this->load->model('Maktifitas');	
	}
	public function index()
	{

		$id = $this->session->userdata('id_magang');
		$data['aktifitas'] = $this->Maktifitas->tampil_aktifitas_magang($id);
		//$data['periode_pemagang'] = $this->Mmagang->periode_magang($login['id_magang']);


		$this->load->view('mahasiswa/header');
		$this->load->view('mahasiswa/sidebar');
		$this->load->view('mahasiswa/aktifitas', $data );
		$this->load->view('mahasiswa/footer');
	}
	public function tambah_aktifitas()
	{
		$config['upload_path'] = './assets/capture_aktivitas';
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		$config['max_size']  = '100000000000';
		$config['max_width']  = '10240000000000';
		$config['max_height']  = '76800000000000000';
		
		$this->load->library('upload', $config);
		
		if ( ! $this->upload->do_upload('capture_aktifitas')){
			echo "<script>alert('Yaaah... Gagal Tambah, tanyakan ke pembimbing');</script>";
			redirect('mahasiswa/aktifitas','refresh');
		}
		else
		{
			$input = $this->input->post();
			$id = $this->session->userdata('id_magang');
			$data = [
				'id_magang' => $id,
				'tgl_aktifitas' => $input['tgl_aktifitas'],
				'isi_aktifitas' => $input['isi_aktifitas'],
				'status_aktifitas' => "pending",
				'capture_aktifitas' => $this->upload->data('file_name')
			];
			
			$this->db->insert('aktifitas', $data);
			echo "<script>alert('Berhasil Tambah');</script>";
			redirect('mahasiswa/aktifitas','refresh');	
		}
	}

	function hapus($id)
	{
		$this->Maktifitas->hapus_aktifitas_mahasiswa($id);
		redirect('mahasiswa/aktifitas','refresh');
	}

}

/* End of file Aktifitas.php */
/* Location: ./application/controllers/mahasiswa/Aktifitas.php */