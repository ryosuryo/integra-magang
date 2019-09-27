<?php
class Grafik extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        if(!$this->session->userdata('admin'))
		{
			redirect('admin/login','refresh');
		}
        $this->load->model('Mgrafik');
    }

    public function index()
    {
        $data['pemagang']=$this->Mgrafik->get_data_pemagang();
        $this->load->view('admin/header');
		$this->load->view('admin/sidebar');
        $this->load->view('admin/v_grafik',$data);
        $this->load->view('admin/footer');
    }

    public function data_pendaftar()
    {
        $data['pendaftar']=$this->Mgrafik->get_data_pendaftar();
        $this->load->view('admin/v_grafik');
    }
}