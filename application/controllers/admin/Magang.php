<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Magang extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		if(!$this->session->userdata('admin'))
		{
			redirect('admin/login','refresh');
			
		}
		$this->load->model('Mmagang','mg');
		$this->load->library('pagination');
	}

	public function index()
	{
		$config=array(
			'base_url' => base_url('admin/Magang/index'),
			'total_rows' => $this->mg->number_rows(),
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

		$data['start']=$this->uri->segment(4);
		$data['magang']=$this->mg->limit_magang($config['per_page'], $data['start']);
		$data['mahasiswa']=$this->mg->get_magang();
		$this->load->view('admin/header');
		$this->load->view('admin/sidebar');
		$this->load->view('admin/magang/tampil',$data);
		$this->load->view('admin/footer');
	}
	
}

/* End of file Magang.php */
/* Location: ./application/controllers/admin/Magang.php */