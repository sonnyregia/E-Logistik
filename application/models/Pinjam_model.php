<?php

class Pinjam_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    function add_pinjam($params)
    {
        $this->db->insert('barang_aset_pinjam',$params);
        return $this->db->insert_id();
    }

         function get_all_barang_pinjam()
    {
        $this->db->order_by('id_aset_pinjam', 'asc');
        return $this->db->get('barang_aset_pinjam')->result_array();
    }

    function get_status($id_aset_sub)
    {
        return $this->db->get_where('barang_aset_sub',array('id_aset_sub'=>$id_aset_sub))->result();
    }

	function get_all_pinjam($id)
    {
        $this->db->select('*');
        $this->db->from('barang_aset_pinjam');
        $this->db->join('barang_aset','barang_aset.kode_aset = barang_aset_pinjam.kode_aset');
        $this->db->join('barang_aset_sub','barang_aset_sub.nama_aset = barang_aset.nama_aset');
        $this->db->where('barang_aset_pinjam.id_aset_pinjam',$id);
        $result = $this->db->get();
        return $result;
    }

	    public function nilaijoin($id) {
	  $this->db->select('*');
	  $this->db->from('nilai');
	  $this->db->join('siswa', 'siswa.id_siswa = nilai.id_siswa', 'left');
	  $this->db->where('siswa.id_siswa', $id);
	  return $this->db->get()->result();
	}
}

