<?php
 
class Aset_sub_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get in by kode
     */
    function get_sub($id)
    {
        return $this->db->get_where('barang_aset_sub',array('id_aset_sub'=>$id))->row_array();
    }
        
    /*
     * Get all in
     */
    function get_all_sub()
    {
        $this->db->order_by('id_aset_sub', 'desc');
        return $this->db->get('barang_aset_sub')->result_array();
    }
        
    /*
     * function to add new in
     */
    function add_sub($params)
    {
        $this->db->insert('barang_aset_sub',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update in
     */
    function update_in($kode,$params)
    {
        $this->db->where('kode',$kode);
        return $this->db->update('in',$params);
    }
    
    /*
     * function to delete in
     */
    function delete_sub($id)
    {
        return $this->db->delete('barang_aset_sub',array('id_aset_sub'=>$id));
    }
}
