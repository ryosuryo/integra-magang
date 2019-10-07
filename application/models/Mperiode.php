<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mperiode extends CI_Model 

{
	
	function tampil_periode_aktif()
	{
		$this->db->where('status', "Aktif");
		$ambil = $this->db->get('periode_magang');
		$data = $ambil->result_array();
		return $data;
	}
	function tampil()
	{
		return $this->db->join('magang', 'magang.id_magang = periode_pemagang.id_magang')
						->where('magang.status_magang', 'Diterima')
				 		->get('periode_pemagang')
				 		->result();
	}
	function hapus($id_periode)
	{
		$this->db->where('id_periode', $id_periode);
		$this->db->delete('periode_magang');
	}

	function detail($id_periode)
	{
		$this->db->where('id_periode', $id_periode);
		$ambil = $this->db->get('periode_magang');
		$data = $ambil->row_array();
		return $data;
	}

	public function cari_periode($tahun,$limit,$start)
	{
		//->where("DATE_FORMAT(column_name,'%Y-%m')", $bulan)
		/**function get_data($nomor,$bulan,$tahun) {
			$this->db->select('*');
			$this->db->from('tb_pelanggan as pel');
			$this->db->join('tb_produk as pro', 'pel.id_barcode  = pro.id_barcode');    
			$this->db->select_sum('jumlah');
			$this->db->where('MONTH(pel.tgl_pembelian)',$bulan);
			$this->db->where('YEAR(pel.tgl_pembelian)',$tahun);
			$this->db->group_by('pel.id_barcode');
			$query = $this->db->get();
			if ($query->num_rows() > 0) {
				return $query->result();
				} else {
				return false;
			}
		}  **/
		
		
		return $this->db->where('tahun', $tahun)
						->join('periode','magang.id_magang=periode.id_magang')
						->limit($limit, $start)
						->get('periode');
	}

	public function limit_magang($limit, $start)
	{
		return $this->db->join('magang','magang.id_magang=periode_pemagang.id_magang')
						->where('magang.status_magang','Diterima')
						->limit($limit, $start)
						->get('periode_pemagang')
						->result();
	}

	public function number_rows(){
	return $this->db->join('magang','magang.id_magang=periode_pemagang.id_magang')
					->where('magang.status_magang','Diterima')
					->get('periode_pemagang')
					->num_rows();
	}

}

/* End of file Mperiode.php */
/* Location: ./application/models/Mperiode.php */