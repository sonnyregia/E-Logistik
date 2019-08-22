<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

	class Kode_urut_model extends CI_Model
	{
		public $table = 'kodeurut';
	    public $id = 'kodeurut';
	    public $order = 'DESC';

	    function __construct()
	    {
	        parent::__construct();
	    }

	function insert($data)
    {
        $this->db->insert($this->table, $data);
    }
}