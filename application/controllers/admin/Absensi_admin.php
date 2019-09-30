<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Absensi_admin extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Mabsensi','ma');
		$this->load->library('pagination');

	}
	public function index()
	{
		$config=array(
			'base_url'=>base_url('admin/Absensi_admin/index'),
			'total_rows'=> $this->ma->number_rows(),
			'per_page'=>10,
			'next_link'=>'next',
			'prev_link'=>'prev',
			'full_tag_open' => '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">',
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

		$data['start']=$this->uri->segment(4);
		$data['absensi']=$this->ma->limit_magang($config['per_page'], $data['start']);
		$data['mahasiswa'] = $this->ma->get_magang();
		$this->load->view('admin/header');
		$this->load->view('admin/sidebar');
		$this->load->view('admin/v_absensi_admin', $data);
		$this->load->view('admin/footer');		
	}

	public function cari()
	{
		$nama = $this->input->post('nama_magang');
		if ($nama==null)
		{
			redirect('admin/Absensi_admin','refresh');	
		}
		else
		{
			$perpage=10;
			$data['start']=$this->uri->segment(4);
			$config=array(
				'base_url'=>base_url('admin/Absensi_admin/cari'),
				'total_rows'=> $this->ma->cari_absen($nama,$perpage,$data['start'])->num_rows(),
				'per_page'=>$perpage,
				
			);
			$this->pagination->initialize($config);

			$data['absensi']=$this->ma->cari_absen($nama,$perpage,$data['start'])->result();
			$data['mahasiswa'] = $this->ma->get_magang();
			$this->load->view('admin/header');
			$this->load->view('admin/sidebar');
			$this->load->view('admin/v_absensi_admin', $data);
			$this->load->view('admin/footer');
		}
	}

}

/* End of file Absensi_admin.php */
/* Location: ./application/controllers/admin/Absensi_admin.php */