<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Barang extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Barang_model');
        $this->load->model('Merk_barang_model');
        $this->load->model('Satuan_barang_model');
        $this->load->model('No_urut');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->input->get('start'));
        
        if ($q <> '') {
            $config['base_url'] = base_url() . 'barang/index.html?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'barang/index.html?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'barang/index.html';
            $config['first_url'] = base_url() . 'barang/index.html';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->Barang_model->total_rows($q);
        $barang = $this->Barang_model->get_limit_data($config['per_page'], $start, $q);

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'barang_data' => $barang,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
            'konten' => 'barang/barang_list',
            'judul' => 'Data Barang',
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

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('barang/create_action'),
	    'id_barang' => set_value('id_barang'),
	    'kode_barang' => $this->No_urut->buat_kode_barang(),
	    'nama_barang' => set_value('nama_barang'),
        'stok' => set_value('stok'),
        'id_satuan' => set_value('id_satuan'),
        'id_merk' => set_value('id_merk'),
        'konten' => 'barang/barang_form',
            'judul' => 'Data Barang',
	);
        $data['all_satuan'] = $this->Satuan_barang_model->get_all_satuan();
        $data['all_merk'] = $this->Merk_barang_model->get_all_merk();
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
		'kode_barang' => $this->input->post('kode_barang',TRUE),
		'nama_barang' => $this->input->post('nama_barang',TRUE),
        'stok' => $this->input->post('stok',TRUE),
        'id_satuan' => $this->input->post('id_satuan',TRUE),
        'id_merk' => $this->input->post('id_merk',TRUE),
		// 'foto_barang' => $dfile,
	    );

            $this->Barang_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('barang'));
        }
    }
    
    public function edit($id_barang){
        $data['barang'] = $this->Barang_model->get_barang($id_barang);
        if(isset($data['barang']['id_barang']))
        {
            $this->load->library('form_validation');
            $this->form_validation->set_rules('nama_barang','barang','required');
            if($this->form_validation->run())
            {
            $params = array(
                'id_barang' => $this->input->post('id_barang'),
                'kode_barang' => $this->input->post('kode_barang'),
                'nama_barang' => $this->input->post('nama_barang'),
                'stok' => $this->input->post('stok'),
                'id_merk' => $this->input->post('id_merk'),
                'id_satuan' => $this->input->post('id_satuan'),
                );
                $this->Barang_model->update_barang($id_barang,$params);
                redirect('barang');
            }
            else
            {
                $data['all_merk'] = $this->Merk_barang_model->get_all_merk();
                $data['all_barang'] = $this->Barang_model->get_all_barang();
                $data['all_satuan'] = $this->Satuan_barang_model->get_all_satuan();

                $data['judul'] = 'Aset NUP';
                $data['konten'] = 'barang/barang_edit';
                $this->load->view('v_index', $data);
            }
        }
        else
            show_error('The barang you are trying to edit does not exist.');
    }


    public function update($id) 
    {
        $row = $this->Barang_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('barang/update_action'),
		'id_barang' => set_value('id_barang', $row->id_barang),
		'kode_barang' => set_value('kode_barang', $row->kode_barang),
		'nama_barang' => set_value('nama_barang', $row->nama_barang),
        'stok' => set_value('stok', $row->stok),
        'id_satuan' => set_value('id_satuan', $row->satuan_barang),
        'merk_barang' => set_value('merk_barang', $row->merk_barang),
        'konten' => 'barang/barang_form_update',
            'judul' => 'Data Barang',
	    );
            $data['all_satuan'] = $this->Satuan_barang_model->get_all_satuan();
            $data['all_merk'] = $this->Merk_barang_model->get_all_merk();
            $this->load->view('v_index', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('barang'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id_barang', TRUE));
        } else {
        if ($_FILES == '') {
            
            $data = array(
        'kode_barang' => $this->input->post('kode_barang',TRUE),
        'nama_barang' => $this->input->post('nama_barang',TRUE),
        'stok' => $this->input->post('stok',TRUE),
        'id_satuan' => $this->input->post('id_satuan',TRUE),
        'merk_barang' => $this->input->post('merk_barang',TRUE),
        );

            $this->Barang_model->update($this->input->post('id_barang', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('barang'));

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
        'kode_barang' => $this->input->post('kode_barang',TRUE),
        'nama_barang' => $this->input->post('nama_barang',TRUE),
        'stok' => $this->input->post('stok',TRUE),
        'id_satuan' => $this->input->post('id_satuan',TRUE),
        'merk_barang' => $this->input->post('merk_barang',TRUE),
        // 'foto_barang' => $dfile,
        );

            $this->Barang_model->update($this->input->post('id_barang', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('barang'));
        }

           
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Barang_model->get_by_id($id);

        if ($row) {
            $this->Barang_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('barang'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('barang'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('kode_barang', 'kode barang', 'trim|required');
	$this->form_validation->set_rules('nama_barang', 'nama barang', 'trim|required');
	$this->form_validation->set_rules('stok', 'stok', 'trim|required');

	$this->form_validation->set_rules('id_barang', 'id_barang', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}

