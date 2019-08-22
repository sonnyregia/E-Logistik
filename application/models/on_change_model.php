<?php
class On_change_model extends CI_Model{
 
    function get_aset(){
        $hasil=$this->db->query("SELECT * FROM barang_aset");
        return $hasil;
    }
 
    function get_aset_sub($id){
        $hasil=$this->db->query("SELECT * FROM barang_aset_sub WHERE kode_aset='$id'");
        return $hasil->result();
    }
}