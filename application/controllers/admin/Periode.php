<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Periode extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		if(!$this->session->userdata('admin'))
		{
			redirect('admin/login','refresh');
		}
		$this->load->model('Mperiode','mp');
		$this->load->library('pagination');
	}

	public function index()
	{
		$config=array(
			'base_url' => base_url('admin/Periode/index'),
			'total_rows' => $this->mp->number_rows(),
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
		$data['periode']=$this->mp->limit_magang($config['per_page'], $data['start']);
		
		$this->load->view('admin/header');
		$this->load->view('admin/sidebar');
		$this->load->view('admin/periode/tampil', $data);
		$this->load->view('admin/footer');
	}

	public function cari()
	{
		$tahun = $this->input->post('tahun');
		if ($tahun==null)
		{
			redirect('admin/Periode','refresh');	
		}
		else
		{
			$perpage=10;
			$data['start']=$this->uri->segment(4);
			$config=array(
				'base_url'=>base_url('admin/Periode/cari'),
				'total_rows'=> $this->mp->cari_periode($tahun,$perpage,$data['start'])->num_rows(),
				'per_page'=>$perpage,
				
			);
			$this->pagination->initialize($config);

			$data['periode']=$this->mp->cari_periode($tahun,$perpage,$data['start'])->result();
			$data['mahasiswa'] = $this->mp->get_magang();
			$this->load->view('admin/header');
			$this->load->view('admin/sidebar');
			$this->load->view('admin/periode/tampil', $data);
			$this->load->view('admin/footer');
		}
	}

	function tambah()
	{
		$data['bulan']= array('Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'December');


		$this->load->view('admin/header');
		$this->load->view('admin/sidebar');
		$this->load->view('admin/periode/tambah', $data);
		$this->load->view('admin/footer');

		if ($this->input->post())
		{
			$this->load->model('Mperiode');
			$this->Mperiode->tambah($this->input->post());
			redirect('admin/periode','refresh');
		}
	}

	function hapus($id_periode)
	{
		//memanggil model
		$this->load->model("Mperiode");
		$this->Mperiode->hapus($id_periode);
		redirect('admin/periode','refresh');
	}


	function edit ($id_periode)
	{
		$data['bulan']= array('Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'December');
		
		//panggil model Mperiode

		$this->load->model('Mperiode');

		//model Mperiode menjalankan function detail
		$data['detail'] = $this->Mperiode->detail($id_periode);

		$this->load->view('admin/header');
		$this->load->view('admin/sidebar');
		$this->load->view('admin/periode/edit', $data);
		$this->load->view('admin/footer');

		//jika ada input post maka
		if ($this->input->post())
		 {
			$this->Mperiode->edit($this->input->post(),$id_periode);
			redirect('admin/periode','refresh');
		}
		
		
	}

}

/* End of file Periode.php */
/* Location: ./application/controllers/admin/Periode.php */