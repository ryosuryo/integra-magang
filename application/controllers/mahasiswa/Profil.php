<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profil extends CI_Controller 
{
	public function __construct()
	{


		parent::__construct();
		$this->load->model('Mmagang');
	}

	public function index()
	{

		$id = $this->session->userdata('id_magang');
		$data['magang'] = $this->Mmagang->detail($id);
		//$data['periode_pemagang'] = $this->Mmagang->get_periode($id]);

		$this->load->view('mahasiswa/header');
		$this->load->view('mahasiswa/sidebar');
		$this->load->view('mahasiswa/profil/profil', $data );
		$this->load->view('mahasiswa/footer');

	}
	public function simpan_data_lanjutan()
	{
		$this->form_validation->set_rules('ckeditor', 'ckeditor', 'trim|required');
		if ($this->form_validation->run() == TRUE) {
			$input = $this->input->post('ckeditor');
			$id = $this->session->userdata('id_magang');
			$data = [
				'id_magang' =>  $id,
				'data' => $input
			];
			$this->db->insert('datacv', $data);
			redirect('mahasiswa/Profil','refresh');
		} 
		else 
		{
			echo "<script>alert('lengkapi Dulu Data !!!')</script>";
			redirect('mahasiswa/Profil','refresh');
		}
	}

	function download()
	{
		//mendapatkan data login mahasiswa
		$login = $this->session->userdata('mahasiswa');
		$data["magang"] = $this->Mmagang->detail($login['id_magang']);

		$this->load->view('mahasiswa/profil/download', $data);
	}
	public function detail()
	{
		$id = $this->session->userdata('id_magang');
		$dt = $this->db->get_where('magang', ['id_magang' => $id])->row_array();
		echo json_encode($dt);
	}
	public function editDataCV()
	{
		$input = $this->input->post();
		$data = [
			'nama_magang' => $input['nama_magang'],
			'ttl_magang' => $input['ttl_magang'],
			'alamat_magang' => $input['alamat_magang'],
			'jk_magang' => $input['jk_magang'],
			'nohp_magang' => $input['nohp_magang'],
			'email_magang' => $input['email_magang']
		];
		$update = $this->db->where('id_magang', $this->session->userdata('id_magang'))->update('magang',$data);
		if ($update) 
		{
			echo "<script>alert('Berhasil update');</script>";	
		} 
		else 
		{
			echo "<script>alert('Gagal update, tanyakan ke pembimbing');</script>";
		}
		
		redirect('mahasiswa/Profil','refresh');
	}





}

/* End of file Profil.php */
/* Location: ./application/controllers/mahasiswa/Profil.php */