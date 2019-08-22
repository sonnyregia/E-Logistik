<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Satuan_barang extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('satuan_barang_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->input->get('start'));
        
        if ($q <> '') {
            $config['base_url'] = base_url() . 'satuan_barang/index.html?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'satuan_barang/index.html?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'satuan_barang/index.html';
            $config['first_url'] = base_url() . 'satuan_barang/index.html';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->satuan_barang_model->total_rows($q);
        $satuan_barang = $this->satuan_barang_model->get_limit_data($config['per_page'], $start, $q);

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'satuan_barang_data' => $satuan_barang,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
            'konten' => 'satuan_barang/satuan_barang_list',
            'judul' => 'Satuan Barang',
        );
        $this->load->view('v_index', $data);
    }

    public function read($id) 
    {
        $row = $this->satuan_barang_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id_satuan' => $row->id_satuan,
		'satuan_barang' => $row->satuan_barang,

	    );
            $this->load->view('satuan_barang/satuan_barang_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('satuan_barang'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('satuan_barang/create_action'),
	    'id_satuan' => set_value('id_satuan'),
	    'satuan_barang' => set_value('satuan_barang'),
        'konten' => 'satuan_barang/satuan_barang_form',
            'judul' => 'Satuan Barang',
	);
        $this->load->view('v_index', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'satuan_barang' => $this->input->post('satuan_barang',TRUE),
	    );

            $this->satuan_barang_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('satuan_barang'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->satuan_barang_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('satuan_barang/update_action'),
		'id_satuan' => set_value('id_satuan', $row->id_satuan),
		'satuan_barang' => set_value('satuan_barang', $row->satuan_barang),
        'konten' => 'satuan_barang/satuan_barang_form',
            'judul' => 'Satuan Barang',
	    );
            $this->load->view('v_index', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('satuan_barang'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id_satuan', TRUE));
        } else {
            $data = array(
		'satuan_barang' => $this->input->post('satuan_barang',TRUE),
	    );

            $this->satuan_barang_model->update($this->input->post('id_satuan', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('satuan_barang'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->satuan_barang_model->get_by_id($id);

        if ($row) {
            $this->satuan_barang_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('satuan_barang'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('satuan_barang'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('satuan_barang', 'Satuan barang', 'trim|required');

	$this->form_validation->set_rules('id_satuan', 'id_satuan', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}

