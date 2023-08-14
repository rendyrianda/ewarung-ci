<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Detail_model extends CI_Model
{
	public $table = 'detail_penjualan';
	public $id = 'detail_penjualan.id';
	public function __construct()
	{
		parent::__construct();
	}
	public function get()
	{
		$this->db->select('k.*,p.nama_product as nama, p.harga_product as harga');
		$this->db->from('keranjang k');
		$this->db->join('produk p', 'k.id_produk = p.id');
		$query = $this->db->get();
		return $query->result_array();
	}
	public function getById($id)
	{
		$this->db->select('d.*,r.nama as nama, b.nama_product as produk');
		$this->db->from('detail_penjualan d');
		$this->db->join('pelanggan r', 'd.id_pelanggan = r.id');
		$this->db->join('produk b', 'd.id_produk = b.id');
		$this->db->where('d.no_penjualan', $id);
		$query = $this->db->get();
		return $query->result_array();
	}

	public function getByUser($id)
	{
		$idu = $this->session->userdata('id');
		$this->db->select('d.*,b.nama_product as nama_produk');
		$this->db->from('detail_penjualan d');
		$this->db->join('produk b', 'd.id_produk = b.id');
		$this->db->where('d.no_penjualan', $id, 'AND d.id_pelanggan=' . $idu);
		$this->db->where('d.id_pelanggan=' . $idu);
		$query = $this->db->get();
		return $query->result_array();
	}

	public function insert($data)
	{
		return $this->db->insert_batch($this->table, $data);
	}
	public function update($where, $data)
	{
		$this->db->update($this->table, $data, $where);
		return $this->db->affected_rows();
	}
	public function delete($id)
	{
		$this->db->where($this->id, $id);
		$this->db->delete($this->table);
		return $this->db->affected_rows();
	}
	function charts()
	{
		$this->db->select('d.*, b.nama_product as produk, sum(d.jumlah) as jum');
		$this->db->from('detail_penjualan d');
		$this->db->join('produk b', 'd.id_produk = b.id');
		$this->db->group_by('d.id_produk');
		$query = $this->db->get();
		return $query->result_array();
	}
}
