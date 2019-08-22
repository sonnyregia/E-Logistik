<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

 class Mdl_onchange extends CI_Model {
 
  /* fungsi untuk memanggil data pada table provinsi*/
  function get_barang_aset() {
  
  $query = $this->db->get('barang_aset');
  return $query->result();
  
  }
  
  /* fungsi untuk memanggil data pada table kota*/
  function get_barang_aset_sub() {
  
  $query = $this->db->get('barang_aset_sub');
  return $query->result();
  
  }
 }

?>