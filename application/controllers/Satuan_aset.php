<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Satuan_aset extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('satuan_aset_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->input->get('start'));
        
        if ($q <> '') {
            $config['base_url'] = base_url() . 'satuan_aset/index.html?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'satuan_aset/index.html?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'satuan_aset/index.html';
            $config['first_url'] = base_url() . 'satuan_aset/index.html';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->satuan_aset_model->total_rows($q);
        $satuan_aset = $this->satuan_aset_model->get_limit_data($config['per_page'], $start, $q);

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'satuan_aset_data' => $satuan_aset,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
            'konten' => 'satuan_aset/satuan_aset_list',
            'judul' => 'Satuan Aset',
        );
        $this->load->view('v_index', $data);
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('satuan_aset/create_action'),
	    'id_satuan' => set_value('id_satuan_aset'),
	    'satuan_barang' => set_value('satuan_aset'),
        'konten' => 'satuan_aset/satuan_aset_form',
            'judul' => 'Satuan Aset',
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
		'satuan_aset' => $this->input->post('satuan_aset',TRUE),
	    );

            $this->satuan_aset_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('satuan_aset'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->satuan_aset_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('satuan_aset/update_action'),
		'id_satuan_aset' => set_value('id_satuan_aset', $row->id_satuan_aset),
		'satuan_aset' => set_value('satuan_aset', $row->satuan_aset),
        'konten' => 'satuan_aset/satuan_aset_form',
            'judul' => 'Satuan Aset',
	    );
            $this->load->view('v_index', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('satuan_aset'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id_satuan_aset', TRUE));
        } else {
            $data = array(
		'satuan_aset' => $this->input->post('satuan_aset',TRUE),
	    );

            $this->satuan_aset_model->update($this->input->post('id_satuan_aset', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('satuan_aset'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->satuan_aset_model->get_by_id($id);

        if ($row) {
            $this->satuan_aset_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('satuan_aset'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('satuan_aset'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('satuan_aset', 'Satuan Aset', 'trim|required');

	$this->form_validation->set_rules('id_satuan_aset', 'id_satuan_aset', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}

