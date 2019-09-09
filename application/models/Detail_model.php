<?php
class Detail_model extends CI_Model{

	Public function __construct(){
		parent::__construct();
	}

	// Public function get_detail($id){
	// 	$this->db->select('*');
	// 	$this->db->from('ruang_detail');
	// 	$this->db->where(array('id_ruang_detail' => $id));
	// 	$query = $this->db->get();
	// 	return $query;
		
	// }

	public function get_detail(){
		$this->db->select('*');
		 $this->db->from('ruang_detail');
		 $this->db->join('ruang','ruang.id_ruang=ruang_detail.id_ruang');
		 $this->db->join('barang_aset','barang_aset.id_aset=ruang_detail.id_aset');
		 $this->db->join('barang_aset_sub','barang_aset_sub.id_aset_sub=ruang_detail.id_aset_sub');
		 $this->db->join('merk_aset','merk_aset.id_merk_aset=ruang_detail.id_merk_aset');
		 $this->db->join('satuan_aset','satuan_aset.id_satuan_aset=ruang_detail.id_satuan_aset');
		 // $this->db->where('ruang_detail.id_ruang_detail');
		 $result = $this->db->get();
		 return $result;
	}
}

?>
