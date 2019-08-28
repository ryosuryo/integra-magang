<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Absensi extends CI_Controller {
  

	public function index()
	{
		$this->load->view('mahasiswa/header');
		$this->load->view('mahasiswa/sidebar');
		$this->load->view('mahasiswa/v_absensi');
		$this->load->view('mahasiswa/footer');	
    }
    public function absen_izin()
    {
       $alasan = $this->input->post('alasan');
       $tanggal = date('Y-m-d');
       $data = [
           'id_magang' => $this->session->userdata('id_magang'),
           'tanggal' => $tanggal,
           'absen' => 2,
           'alasan' => $alasan
       ];
       $this->db->insert('absensi', $data);
       
       $this->session->set_flashdata('pesan_izin', '<div class="alert alert-success">Berhasil mengirim izin</div>');
       
       redirect('mahasiswa/Absensi','refresh');

    }

    
    public function absen_masuk()
    {
        $tanggal = date('Y-m-d');
        $data = [
            'id_magang' => $this->session->userdata('id_magang'),
            'tanggal' => $tanggal,
            'absen' => 1
        ];
        $masuk = $this->db->insert('absensi', $data);
        if ($masuk) {
            $dt['status']=1;
            echo json_encode($dt);
        } else {
            $dt['status']=0;
            echo json_encode($dt);
        }
    }

}

/* End of file Absensi.php */
/* Location: ./application/controllers/mahasiswa/Absensi.php */