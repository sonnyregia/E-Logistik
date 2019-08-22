<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Barang_aset extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Barang_aset_model');
        // $this->load->model('Barang_aset_sub_model');
        $this->load->model('No_urut');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->input->get('start'));
        
        if ($q <> '') {
            $config['base_url'] = base_url() . 'barang_aset/index.html?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'barang_aset/index.html?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'barang_aset/index.html';
            $config['first_url'] = base_url() . 'barang_aset/index.html';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->Barang_aset_model->total_rows($q);
        $barang_aset = $this->Barang_aset_model->get_limit_data($config['per_page'], $start, $q);

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'barang_aset_data' => $barang_aset,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
            'konten' => 'barang_aset/barang_aset_list',
            'judul' => 'Data Aset',
        );
        $this->load->view('v_index', $data);
    }

    public function read($id) 
    {
        $row = $this->Barang_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id_barang' => $row->id_barang,
		'kode_barang' => $row->kode_barang,
		'nama_barang' => $row->nama_barang,
		'stok' => $row->stok,
	    );
            $this->load->view('barang/barang_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('barang'));
        }
    }

    public function detail($id) 
    {
        $row = $this->Barang_aset_model->get_by_id($id);
        if ($row) {
            $data = array(
        'id_aset' => $row->id_aset,
        'kode_aset' => $row->kode_aset,
        'nama_aset' => $row->nama_aset,
        );
            $this->load->view('barang_aset/barang_aset_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('barang_aset'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('barang_aset/create_action'),
	    'id_aset' => set_value('id_aset'),
	    'kode_aset' => set_value('kode_aset'),
	    'nama_aset' => set_value('nama_aset'),
        // 'grup' => set_value('grup'),
        'konten' => 'barang_aset/barang_aset_form',
            'judul' => 'Data Aset',
	);
        $this->load->view('v_index', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {

        // $nmfile = "barang_".time();
        // $config['upload_path'] = './image/barang';
        // $config['allowed_types'] = 'jpg|png';
        // $config['max_size'] = '20000';
        // $config['file_name'] = $nmfile;
        // // load library upload
        // $this->load->library('upload', $config);
        // // upload gambar 1
        // $this->upload->do_upload('foto_barang');
        // $result1 = $this->upload->data();
        // $result = array('gambar'=>$result1);
        // $dfile = $result['gambar']['file_name'];

            $data = array(
		'kode_aset' => $this->input->post('kode_aset',TRUE),
		'nama_aset' => $this->input->post('nama_aset',TRUE),
        // 'grup' => $this->input->post('nama_aset',TRUE),
		// 'foto_barang' => $dfile,
	    );

            $this->Barang_aset_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('barang_aset'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Barang_aset_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('barang_aset/update_action'),
		'id_aset' => set_value('id_aset', $row->id_aset),
		'kode_aset' => set_value('kode_aset', $row->kode_aset),
		'nama_aset' => set_value('nama_aset', $row->nama_aset),
        'konten' => 'barang_aset/barang_aset_form',
            'judul' => 'Data Aset',
	    );
            $this->load->view('v_index', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('barang_aset'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id_aset', TRUE));
        } else {
        if ($_FILES == '') {
            
            $data = array(
        'kode_aset' => $this->input->post('kode_aset',TRUE),
        'nama_aset' => $this->input->post('nama_aset',TRUE),
        );

            $this->Barang_model->update($this->input->post('id_aset', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('barang_aset'));

        } else {

            // $nmfile = "barang_".time();
            // $config['upload_path'] = './image/barang';
            // $config['allowed_types'] = 'jpg|png';
            // $config['max_size'] = '20000';
            // $config['file_name'] = $nmfile;
            // // load library upload
            // $this->load->library('upload', $config);
            // // upload gambar 1
            // $this->upload->do_upload('foto_barang');
            // $result1 = $this->upload->data();
            // $result = array('gambar'=>$result1);
            // $dfile = $result['gambar']['file_name'];

             $data = array(
        'kode_aset' => $this->input->post('kode_aset',TRUE),
        'nama_aset' => $this->input->post('nama_aset',TRUE),
        // 'foto_barang' => $dfile,
        );

            $this->Barang_aset_model->update($this->input->post('id_aset', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('barang_aset'));
        }

           
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Barang_aset_model->get_by_id($id);

        if ($row) {
            $this->Barang_aset_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('barang_aset'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('barang_aset'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('kode_aset', 'kode aset', 'trim|required');
	$this->form_validation->set_rules('nama_aset', 'nama aset', 'trim|required');

	$this->form_validation->set_rules('id_aset', 'id_aset', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}

