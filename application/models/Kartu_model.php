<?php

class Kartu_model extends CI_Model
{

	     function get_all_kartu()
    {
        $this->db->order_by('id_kartu', 'asc');
        return $this->db->get('kartu')->result_array();
    }

}