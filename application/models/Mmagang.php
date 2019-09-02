<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mmagang extends CI_Model 
{
	
	function tampil()
	{
		$ambil = $this->db->get('magang');
		$data = $ambil->result_array();
		return $data;
	}

	public function get_magang()
	{
		return $this->db->join('periode_pemagang','periode_pemagang.id_magang = magang.id_magang')
					->get('magang')->result();
		
	}	
	public function cari($tahun)
	{
		return $this->db->query("SELECT 1 bulan,m.* FROM `periode_pemagang` pp LEFT JOIN magang m ON (pp.id_magang=m.id_magang) WHERE 1 BETWEEN month(tgl_awal) AND month(tgl_akhir) AND year(tgl_awal)=$tahun AND year(tgl_akhir)=$tahun
UNION ALL
SELECT 2 bulan,m.* FROM `periode_pemagang` pp LEFT JOIN magang m ON (pp.id_magang=m.id_magang) WHERE 2 BETWEEN month(tgl_awal) AND month(tgl_akhir) AND year(tgl_awal)=$tahun AND year(tgl_akhir)=$tahun
UNION ALL
SELECT 3 bulan,m.* FROM `periode_pemagang` pp LEFT JOIN magang m ON (pp.id_magang=m.id_magang) WHERE 3 BETWEEN month(tgl_awal) AND month(tgl_akhir) AND year(tgl_awal)=$tahun AND year(tgl_akhir)=$tahun
UNION ALL
SELECT 4 bulan,m.* FROM `periode_pemagang` pp LEFT JOIN magang m ON (pp.id_magang=m.id_magang) WHERE 4 BETWEEN month(tgl_awal) AND month(tgl_akhir) AND year(tgl_awal)=$tahun AND year(tgl_akhir)=$tahun
UNION ALL
SELECT 5 bulan,m.* FROM `periode_pemagang` pp LEFT JOIN magang m ON (pp.id_magang=m.id_magang) WHERE 5 BETWEEN month(tgl_awal) AND month(tgl_akhir) AND year(tgl_awal)=$tahun AND year(tgl_akhir)=$tahun
UNION ALL
SELECT 6 bulan,m.* FROM `periode_pemagang` pp LEFT JOIN magang m ON (pp.id_magang=m.id_magang) WHERE 6 BETWEEN month(tgl_awal) AND month(tgl_akhir) AND year(tgl_awal)=$tahun AND year(tgl_akhir)=$tahun
UNION ALL
SELECT 7 bulan,m.* FROM `periode_pemagang` pp LEFT JOIN magang m ON (pp.id_magang=m.id_magang) WHERE 7 BETWEEN month(tgl_awal) AND month(tgl_akhir) AND year(tgl_awal)=$tahun AND year(tgl_akhir)=$tahun
UNION ALL
SELECT 8 bulan,m.* FROM `periode_pemagang` pp LEFT JOIN magang m ON (pp.id_magang=m.id_magang) WHERE 8 BETWEEN month(tgl_awal) AND month(tgl_akhir) AND year(tgl_awal)=$tahun AND year(tgl_akhir)=$tahun
UNION ALL
SELECT 9 bulan,m.* FROM `periode_pemagang` pp LEFT JOIN magang m ON (pp.id_magang=m.id_magang) WHERE 9 BETWEEN month(tgl_awal) AND month(tgl_akhir) AND year(tgl_awal)=$tahun AND year(tgl_akhir)=$tahun
UNION ALL
SELECT 10 bulan,m.* FROM `periode_pemagang` pp LEFT JOIN magang m ON (pp.id_magang=m.id_magang) WHERE 10 BETWEEN month(tgl_awal) AND month(tgl_akhir) AND year(tgl_awal)=$tahun AND year(tgl_akhir)=$tahun
UNION ALL
SELECT 11 bulan,m.* FROM `periode_pemagang` pp LEFT JOIN magang m ON (pp.id_magang=m.id_magang) WHERE 11 BETWEEN month(tgl_awal) AND month(tgl_akhir) AND year(tgl_awal)=$tahun AND year(tgl_akhir)=$tahun
UNION ALL
SELECT 12 bulan,m.* FROM `periode_pemagang` pp LEFT JOIN magang m ON (pp.id_magang=m.id_magang) WHERE 12 BETWEEN month(tgl_awal) AND month(tgl_akhir) AND year(tgl_awal)=$tahun AND year(tgl_akhir)=$tahun")->result();
	}

	function daftar_magang($input)
	{
		$data['nama_magang'] = $input['nama_magang'];
		$data['password_magang'] = password_hash($input['password'], PASSWORD_DEFAULT);
		$data['email_magang'] = $input['email'];
		$data['alamat_magang']= $input['alamat'];
		$data['nohp_magang']=$input['no_hp'];
		$data['jk_magang']=$input['jk_magang'];

		$cek_email = $this->db->get_where('magang', ['email_magang' => $data['email_magang']])->row_array();
		$cek_nomor = $this->db->get_where('magang', ['nohp_magang' => $data['nohp_magang']])->row_array();
		
		if (empty($cek_email))
		{
			if (empty($cek_nomor)) {
				$this->db->insert('magang', $data);
				$id = $this->db->insert_id('magang');
				return $id;
			} 
			else 
			{
				return 'gagal_no';
			}
		}
		else
		{
			return 'gagal';
		}
	}

	function daftarmagang($inputan,$id_magang)
	{
		$config['upload_path'] = './assets/dokumen/';
		$config['allowed_types'] = 'gif|jpg|png|doc|pdf';

		$this->load->library('upload', $config);


		if ($this->upload->do_upload('file_magang'))
		{
			$inputan['file_magang'] = $this->upload->data('file_name');
		}

		// echo "<pre>";
		// print_r ($input);
		// echo "</pre>";

		$input['status_magang'] = "Pending";
		$this->db->where('id_magang', $id_magang);
		$this->db->update('magang', $inputan);
	}

	function periode_pemagang($id)
	{
			$input = $this->input->post();
			$data['tgl_awal'] = $input['tgl_awal'];
			$data['tgl_akhir'] = $input['tgl_akhir'];
			$data['id_magang'] = $id;
			$this->db->insert('periode_pemagang', $data);
	}

	function tampil_magang_baru($status)
	{
		$this->db->where('status_magang', $status);
		$ambil = $this->db->get('magang');
		$data = $ambil->result_array();
		return $data;
	}

	function tampil_magang_baru_periode($status,$id_periode)
	{
		$this->db->join('magang', 'periode_pemagang.id_magang = magang.id_magang', 'left');
		$this->db->where('status_magang', $status);
		$this->db->where('id_periode',$id_periode);
		$ambil = $this->db->get('periode_pemagang');
		$data = $ambil->result_array();
		return $data;
	}

	function detail($id)
	{
		return $this->db->join('periode_pemagang', 'periode_pemagang.id_magang = magang.id_magang')->where('magang.id_magang',$id)->get('magang')->row_array();
	}

	public function detail_cv($id)
	{
		return $this->db->join('datacv', 'datacv.id_magang = magang.id_magang')
						->where('magang.id_magang' , $id)
						->get('magang')
						->row_array();
	}
	
	function detail_magang($id)
	{
		$this->db->where('id_magang', $id);
		$ambil = $this->db->get('detail_magang');
		$data = $ambil->result_array();
		return $data;
	}

	function ubah_magang($input,$id)
	{
		$config['upload_path'] = './assets/img/';
		$config['allowed_types'] = 'gif|jpg|png';

		$this->load->library('upload', $config);

		//jika password kosong maka
		if (empty($input['password_magang']))
		{
			if ($this->upload->do_upload('foto_magang'))
			{
				$data['foto_magang'] = $this->upload->data('file_name');
			}
			$data['nama_magang'] = $input['nama_magang'];
			$data['email_magang'] = $input['email_magang'];

			$this->db->where('id_magang', $id);
			$this->db->update('magang', $data);
		}

		else
		{
			if ($this->upload->do_upload('foto_magang'))
			{
				$data['foto_magang'] = $this->upload->data('file_name');
			}
			$input['password_magang'] = sha1($input['password_magang']);
			$this->db->where('id_magang', $id);
			$this->db->update('magang', $input);
		}


		
	}

	

	function grafik_magang()
	{
		$tahunsekarang = date('Y');
		$this->db->select('COUNT(m.id_magang) as total,pm.bulan,pm.tahun');
		$this->db->where('pm.tahun', $tahunsekarang);
		$this->db->join('periode_magang pm', 'pp.id_periode = pm.id_periode', 'left');
		$this->db->join('magang m', 'pp.id_magang = m.id_magang', 'left');
		$this->db->group_by('pm.bulan');
		$this->db->from('periode_pemagang pp');

		$ambil = $this->db->get();
		$semua = $ambil->result_array();

		return $semua;
	}

	function tambah_team($input)
	{
		$this->db->insert('detail_magang', $input);
	}

}

/* End of file Mmagang.php */
/* Location: ./application/models/Mmagang.php */