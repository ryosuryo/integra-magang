<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jadwal extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		if(!$this->session->userdata('admin'))
		{
			redirect('admin/login','refresh');
		}

		$this->load->model('Mjadwal');
		$this->load->model('Mmagang');
		$this->load->model('Mperiode');
	}

	public function index()
	{
		$data['periode'] = $this->Mperiode->tampil_periode_aktif();
		$data['hari'] = array("Senin","Selasa","Rabu","Kamis","Jumat");

		if ($this->input->post())
		{
			$data['id_periode']=$this->input->post('id_periode');
		}
		else
		{
			$data['id_periode']="";

		}

		$data['jadwal'] = $this->Mjadwal->tampil_jadwal_periode($data['id_periode']);
		$this->load->view('admin/header');
		$this->load->view('admin/sidebar');
		$this->load->view('admin/jadwal/tampil', $data);
		$this->load->view('admin/footer');
		
	}

	function tambah()
	{

		if ($this->input->post('id_periode')) 
		{
			$data['id_periode'] = $this->input->post('id_periode');
			$data['magang'] = $this->Mmagang->tampil_magang_baru_periode("Diterima",$data['id_periode']);
		}
		else
		{
			$data['id_periode']="";
			$data['magang']=array();
		}
		
		$data['periode'] = $this->Mperiode->tampil_periode_aktif();


		$data['hari'] = array("Senin","Selasa","Rabu","Kamis","Jumat");

		$this->load->view('admin/header');
		$this->load->view('admin/sidebar');
		$this->load->view('admin/jadwal/tambah', $data);
		$this->load->view('admin/footer');

		if ($this->input->post('simpan'))
		{
			$input = $this->input->post();
			$inputan['id_periode_pemagang'] = $input['id_periode_pemagang'];
			$inputan['hari_magang'] = $input['hari_magang'];
			$inputan['jam_magang'] = $input['waktu_mulai']."s/d".$input['waktu_selesai'];

			$this->Mjadwal->simpan_jadwal($inputan);
			redirect('admin/jadwal','refresh');
		}
	}

	function edit($id)
	{
		$data['detail'] = $this->Mjadwal->detail($id);

		if ($this->input->post('id_periode'))
		{
			$data['id_periode'] = $this->input->post('id_periode');
			$data['magang'] = $this->Mmagang->tampil_magang_baru_periode("Diterima",$data['id_periode']);
		}
		else
		{
			$data['id_periode']=$data['detail']['id_periode'];
			$data['magang']=$data['magang'] = $this->Mmagang->tampil_magang_baru_periode("Diterima",$data['detail']['id_periode']);
		}

		$data['periode'] = $this->Mperiode->tampil_periode_aktif();

		$data['hari'] = array("Senin", "Selasa", "Rabu", "Kamis", "Jumat");

		$this->load->view('admin/header');
		$this->load->view('admin/sidebar');
		$this->load->view('admin/jadwal/edit',$data);
		$this->load->view('admin/footer');

		if ($this->input->post('simpan'))
		{
			$input = $this->input->post();
			$inputan['id_periode_pemagang'] = $input['id_periode_magang'];
			$inputan['hari_magang'] = $input['hari_magang'];
			$inputan['jam_magang'] = $input['waktu_mulai']."s/d".$input['waktu_selesai'];

			$this->Mjadwal->ubah_jadwal($inputan,$id);
			redirect('admin/jadwal','refresh');
		}
	}

	function hapus($id)
	{
		$this->Mjadwal->hapus_jadwal($id);
		redirect('admin/jadwal','refresh');
	}

}

/* End of file Jadwal.php */
/* Location: ./application/controllers/admin/Jadwal.php */