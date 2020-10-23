<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home_model extends CI_Model
{

	public function get_data()
	{
		$this->db->select('*');
		$this->db->from("pengumuman");
		$this->db->order_by('tahun','desc');
		$this->db->order_by('bulan','asc');
		$query = $this->db->get();
		return $query->result();
	}
	public function get_banner(){
		$this->db->select('*');
		$this->db->from("banner");
		$this->db->where("is_active", 1);
		$this->db->order_by('id_banner','desc');
		$query = $this->db->get();
		return $query->result();
	}
	public function get_pengumuman($bahasa, $limit)
	{
		if($limit>0){
          $this->db->limit($limit, 0);
        }
      $this->db->select('*');
		$this->db->from('pengumuman');
		$this->db->where('bahasa', $bahasa);
      $this->db->order_by('tanggal_pengumuman','desc');
		$query = $this->db->get();
		return $query->result();
	}
	public function get_agenda($bahasa, $limit)
	{
		if($limit>0){
          $this->db->limit($limit,0);
        }
      $this->db->select('*');
		$this->db->from('agenda');
		$this->db->where('bahasa', $bahasa);
      $this->db->order_by('tanggal_agenda','desc');
		$query = $this->db->get();
		return $query->result();
	}
	public function get_berita($bahasa, $limit)
	{
		if($limit>0){
          $this->db->limit($limit,0);
        }
      $this->db->select('*');
		$this->db->from('berita');
		$this->db->where('bahasa', $bahasa);
		$this->db->order_by('tanggal_berita','desc');
		$query = $this->db->get();
		return $query->result();
	}
	public function get_lowongan($bahasa)
	{
		$this->db->select('*');
		$this->db->from('lowongan');
		$this->db->where('bahasa', $bahasa);
		$this->db->limit('5');
		$query = $this->db->get();
		return $query->result();
	}
	public function get_bengkel($kode)
	{
		$this->db->select('*');
		$this->db->from('bengkel_lab');
		$this->db->where('jenis', $kode);
		$query = $this->db->get();
		return $query->result();
	}
	public function get_dosen($page){
		if($page>0){
			$start = ($page-1)*20;
			$this->db->limit(20, $start);
		}
		$this->db->select('*');
		$this->db->from('m_dosen');
		$query = $this->db->get();
		return $query->result();
	}
	public function get_staff($page){
		if($page>0){
			$start = ($page-1)*20;
			$this->db->limit(20, $start);
		}
		$this->db->select('*');
		$this->db->from('m_dosen');
		$query = $this->db->get();
		return $query->result();
	}

	public function get_data_by_id($id)
	{
		$this->db->select('*');
		$this->db->from($this->table);
		$this->db->where('id_laporan',$id);
		$query = $this->db->get();
		return $query->row(0);
	}
	public function get_profil($prodi, $data)
	{
		$this->db->select($data);
		$this->db->from('profil_prodi');
		$this->db->where('kode_prodi',$prodi);
		$query = $this->db->get();
		return $query->result();
	}
	public function get_pengumuman_detail($id)
	{
		$this->db->select('*');
		$this->db->from('pengumuman');
		$this->db->where('id_pengumuman',$id);
		$query = $this->db->get();
		return $query->result();
	}
	public function get_agenda_detail($id)
	{
		$this->db->select('*');
		$this->db->from('agenda');
		$this->db->where('id_agenda',$id);
		$query = $this->db->get();
		return $query->result();
	}
	public function get_berita_detail($id)
	{
		$this->db->select('*');
		$this->db->from('berita');
		$this->db->where('id_berita',$id);
		$query = $this->db->get();
		return $query->result();
	}

	public function insert($data)
	{
		$insert = $this->db->insert($this->table,$data);
		return $insert;
	}

	public function update($id, $data)
	{
		$this->db->where('id_laporan', $id);
		$update = $this->db->update($this->table,$data);
		return $update;
	}
	
	public function delete($id)
	{
		$this->db->where('id_laporan',$id);
		$delete = $this->db->delete($this->table);
		return $delete;
	}
}
