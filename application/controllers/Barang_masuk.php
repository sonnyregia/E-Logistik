<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Barang_masuk extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Barang_masuk_model');
        $this->load->model('Barang_model');
        $this->load->model('Merk_barang_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->input->get('start'));
        
        if ($q <> '') {
            $config['base_url'] = base_url() . 'barang_masuk/index.html?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'barang_masuk/index.html?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'barang_masuk/index.html';
            $config['first_url'] = base_url() . 'barang_masuk/index.html';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->Barang_masuk_model->total_rows($q);
        $barang_masuk = $this->Barang_masuk_model->get_limit_data($config['per_page'], $start, $q);
        $data['all_barang'] = $this->Barang_model->get_all_barang();

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'barang_masuk_data' => $barang_masuk,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
            'konten' => 'barang_masuk/barang_masuk_list',
            'judul' => 'Data Barang Masuk',
        );
        $this->load->view('v_index', $data);
    }

    public function read($id) 
    {
            $data['masuk'] = $this->Barang_masuk_model->get_all_masuk();
            $data['all_barang'] = $this->Barang_model->get_all_barang();
            $this->load->view('barang_masuk/barang_masuk_read', $data);
        
    }

     public function cetak($kode_cetak)
    {
        
        $data = array(
            'data' => $this->db->query("SELECT * FROM barang_masuk where id_barang_masuk='$kode_cetak'"),
        );
        $this->load->view('cetak',$data);
    }

    public function export_excel(){
             $data = array(
            'data' => $this->db->query("SELECT * FROM barang_masuk where id_barang_masuk='$kode_cetak'"),
        );
             $this->load->view('laporan_pemasukan',$data);
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('barang_masuk/create_action'),
	    'id_barang_masuk' => set_value('id_barang_masuk'),
	    'kode_barang' => set_value('kode_barang'),
	    'supplier' => set_value('supplier'),
	    'jumlah' => set_value('jumlah'),
	    'harga' => set_value('harga'),
        'tanggal' => set_value('tanggal'),
        'konten' => 'barang_masuk/barang_masuk_form',
            'judul' => 'Data Barang Masuk',
	);
        $data['all_barang'] = $this->Barang_model->get_all_barang();
        $data['all_merk'] = $this->Merk_barang_model->get_all_merk();
        $this->load->view('v_index', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'kode_barang' => $this->input->post('kode_barang',TRUE),
		'supplier' => $this->input->post('supplier',TRUE),
		'jumlah' => $this->input->post('jumlah',TRUE),
		'harga' => $this->input->post('harga',TRUE),
        'tanggal' => date_format(date_create( $this->input->post('tanggal',TRUE)),'d F Y'),
	    );

            $this->Barang_masuk_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('barang_masuk'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Barang_masuk_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('barang_masuk/update_action'),
		'id_barang_masuk' => set_value('id_barang_masuk', $row->id_barang_masuk),
		'kode_barang' => set_value('kode_barang', $row->kode_barang),
		'supplier' => set_value('supplier', $row->supplier),
		'jumlah' => set_value('jumlah', $row->jumlah),
		'harga' => set_value('harga', $row->harga),
        // 'tanggal' => set_value('tanggal', $row->tanggal),
        'konten' => 'barang_masuk/barang_masuk_form_update',
            'judul' => 'Data Barang Masuk',
	    );
            $data['all_barang'] = $this->Barang_model->get_all_barang();
            $data['all_merk'] = $this->Merk_barang_model->get_all_merk();
            $this->load->view('v_index', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('barang_masuk'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id_barang_masuk', TRUE));
        } else {
            $data = array(
		'kode_barang' => $this->input->post('kode_barang',TRUE),
		'supplier' => $this->input->post('supplier',TRUE),
		// 'jumlah' => $this->input->post('jumlah',TRUE),
		'harga' => $this->input->post('harga',TRUE),
        // 'tanggal' => $this->input->post('tanggal',TRUE),
	    );

            $this->Barang_masuk_model->update($this->input->post('id_barang_masuk', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('barang_masuk'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Barang_masuk_model->get_by_id($id);

        if ($row) {
            $this->Barang_masuk_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('barang_masuk'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('barang_masuk'));
        }
    }

   

    public function _rules() 
    {
	$this->form_validation->set_rules('kode_barang', 'Nama barang', 'trim|required');
	$this->form_validation->set_rules('supplier', ' supplier', 'trim|required');
	$this->form_validation->set_rules('jumlah', 'jumlah', 'trim|required');
	$this->form_validation->set_rules('harga', 'harga', 'trim|required');
    $this->form_validation->set_rules('tanggal', 'tanggal', 'trim|required');

	$this->form_validation->set_rules('id_barang_masuk', 'id_barang_masuk', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}

/* End of file Barang_masuk.php */