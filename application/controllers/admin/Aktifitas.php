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
		$this->load->model('Maktifitas','ma');
		$this->load->library('pagination');

	}

	public function index()
	{
		$config=array(
			'base_url' => base_url('admin/Aktifitas/index'),
			'total_rows' => $this->ma->number_rows(),
			'per_page' => 10,
			'next_link' => 'next',
			'prev_link' => 'prev',
			'full_tag_open' => '<div class="pagging text-center"><nav><u1 class="pagination justify-content-center">',
			'full_tag_close'   => '</ul></nav></div>',
			'num_tag_open'     => '<li class="page-item"><span class="page-link">',
			'num_tag_close'    => '</span></li>',
        	'cur_tag_open'     => '<li class="page-item active"><span class="page-link">',
        	'cur_tag_close'    => '<span class="sr-only">(current)</span></span></li>',
        	'next_tag_open'    => '<li class="page-item"><span class="page-link">',
        	'next_tagl_close'  => '<span aria-hidden="true">&raquo;</span></span></li>',
        	'prev_tag_open'    => '<li class="page-item"><span class="page-link">',
        	'prev_tagl_close'  => '</span>Next</li>',
        	'first_tag_open'   => '<li class="page-item"><span class="page-link">',
        	'first_tagl_close' => '</span></li>',
        	'last_tag_open'    => '<li class="page-item"><span class="page-link">',
        	'last_tagl_close'  => '</span></li>'
		);
		$this->pagination->initialize($config);

		//$data['data_aktifitas'] = $this->Maktifitas->aktifitas_magang();
		$data['start']=$this->uri->segment(4);
		$data['aktifitas'] = $this->ma->limit_magang($config['per_page'], $data['start']);
		$data['mahasiswa'] = $this->ma->get_magang();
		$this->load->view('admin/header');
		$this->load->view('admin/sidebar');
		$this->load->view('admin/tampil_aktifitas', $data);
		$this->load->view('admin/footer');		
	}

	public function detail($id_aktifitas)
	{
		$dt = $this->ma->tm_detail($id_aktifitas);
		echo json_encode($dt);
	}
	public function cari()
	{
		$nama = $this->input->post('nama_magang');
		if ($nama==null)
		{
			redirect('admin/Aktifitas','refresh');	
		}
		else
		{
			$perpage=10;
			$data['start']=$this->uri->segment(4);
			$config=array(
				'base_url'=>base_url('admin/Aktifitas/cari'),
				'total_rows'=>$this->ma->cari_aktifitas($nama,$perpage,$data['start'])->num_rows(),
				'per_page'=>$perpage,
			);
			$this->pagination->initialize($config);

			$data['aktifitas'] = $this->ma->cari_aktifitas($nama,$perpage,$data['start'])->result();
			$data['mahasiswa'] = $this->ma->get_magang();
			$this->load->view('admin/header');
			$this->load->view('admin/sidebar');
			$this->load->view('admin/tampil_aktifitas', $data);
			$this->load->view('admin/footer');	
		}
	}
	public function ubah_status_aktifitas()
	{
		$input = $this->input->post('status_aktifitas');
		foreach ($input as $id_aktifitas => $status) 
		{
			$hasil['status_aktifitas'] = $status;
			$this->db->where('id_aktifitas', $id_aktifitas);
			$this->db->update('aktifitas', $hasil);
		}
		redirect('admin/aktifitas','refresh');
	}
	function hapus($id)
	{
		$this->ma->hapus_aktifitas($id);
		redirect('admin/aktifitas','refresh');
	}

}

/* End of file Aktifitas.php */
/* Location: ./application/controllers/admin/Aktifitas.php */