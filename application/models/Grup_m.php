<?php
class Grup_m extends CI_Model{

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

	function add_ruang($params)
    {
        $this->db->insert('ruang_detail',$params);
        return $this->db->insert_id();
    }

    function get_ruang($id_ruang_detail)
    {
        return $this->db->get_where('ruang_detail',array('id_ruang_detail'=>$id_ruang_detail))->row_array();
    }

    function delete_ruang($id_ruang_detail)
    {
        return $this->db->delete('ruang_detail',array('id_ruang_detail'=>$id_ruang_detail));
    }

    function Delete($table,$field,$ruang)
	{
		$this->db->where($field,$ruang);
		$this->db->delete($table);
	}

	function hapus_barang($id_ruang_detail){
        $hasil=$this->db->query("DELETE FROM ruang_detail WHERE id_ruang_detail='$id_ruang_detail'");
        return $hasil;
    }

    function get_all_grup()
    {
        $this->db->order_by('grup', 'desc');
        return $this->db->get('grup_aset')->result_array();
    }	
}

?>
