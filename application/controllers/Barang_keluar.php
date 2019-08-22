<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Barang_keluar extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Barang_keluar_model');
        $this->load->model('Barang_model');
        $this->load->model('Merk_barang_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->input->get('start'));
        
        if ($q <> '') {
            $config['base_url'] = base_url() . 'barang_keluar/index.html?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'barang_keluar/index.html?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'barang_keluar/index.html';
            $config['first_url'] = base_url() . 'barang_keluar/index.html';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->Barang_keluar_model->total_rows($q);
        $barang_keluar = $this->Barang_keluar_model->get_limit_data($config['per_page'], $start, $q);
        $data['all_barang'] = $this->Barang_model->get_all_barang();

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'barang_keluar_data' => $barang_keluar,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
            'konten' => 'barang_keluar/barang_keluar_list',
            'judul' => 'Data Barang Keluar',
        );
        $this->load->view('v_index', $data);
    }

    public function read($id) 
    {
            $data['keluar'] = $this->Barang_keluar_model->get_all_keluar();
            $data['all_barang'] = $this->Barang_model->get_all_barang();
            $this->load->view('barang_keluar/barang_keluar_read', $data);
    }

    public function cetak($kode_cetak)
    {
        
        $data = array(
            'data' => $this->db->query("SELECT * FROM barang_keluar where id_barang_keluar='$kode_cetak'"),
        );
        $this->load->view('cetak2',$data);
    }

    public function export_excel(){
             $data = array(
            'data' => $this->db->query("SELECT * FROM barang_keluar where id_barang_keluar='$kode_cetak'"),
        );
             $this->load->view('laporan_pengeluaran',$data);
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('barang_keluar/create_action'),
	    'id_barang_keluar' => set_value('id_barang_keluar'),
	    'kode_barang' => set_value('kode_barang'),
	    'tanggal' => set_value('tanggal'),
	    'jumlah' => set_value('jumlah'),
        'pegawai' => set_value('pegawai'),
        'bidang' => set_value('bidang'),
        'konten' => 'barang_keluar/barang_keluar_form',
            'judul' => 'Data Barang Keluar',
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
		'tanggal' => date_format(date_create( $this->input->post('tanggal',TRUE)),'d F Y'),
		'jumlah' => $this->input->post('jumlah',TRUE),
        'pegawai' => $this->input->post('pegawai',TRUE),
        'bidang' => $this->input->post('bidang',TRUE),
	    );

            $this->Barang_keluar_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('barang_keluar'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Barang_keluar_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('barang_keluar/update_action'),
		'id_barang_keluar' => set_value('id_barang_keluar', $row->id_barang_keluar),
		'kode_barang' => set_value('kode_barang', $row->kode_barang),
		// 'tanggal' => set_value('tanggal', $row->tanggal),
		'jumlah' => set_value('jumlah', $row->jumlah),
        'pegawai' => set_value('pegawai', $row->pegawai),
        'bidang' => set_value('bidang', $row->bidang),
        'konten' => 'barang_keluar/barang_keluar_form_update',
            'judul' => 'Data Barang Keluar',
	    );
            $this->load->view('v_index', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('barang_keluar'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id_barang_keluar', TRUE));
        } else {
            $data = array(
		'kode_barang' => $this->input->post('kode_barang',TRUE),
		// 'tanggal' => $this->input->post('tanggal',TRUE),
		// 'jumlah' => $this->input->post('jumlah',TRUE),
        'pegawai' => $this->input->post('pegawai',TRUE),
        'bidang' => $this->input->post('bidang',TRUE),
	    );

            $this->Barang_keluar_model->update($this->input->post('id_barang_keluar', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('barang_keluar'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Barang_keluar_model->get_by_id($id);

        if ($row) {
            $this->Barang_keluar_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('barang_keluar'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('barang_keluar'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('kode_barang', 'kode barang', 'trim|required');
	$this->form_validation->set_rules('tanggal', 'tanggal', 'trim|required');
	$this->form_validation->set_rules('jumlah', 'jumlah', 'trim|required');
    $this->form_validation->set_rules('pegawai', 'Pegawai', 'trim|required');
    $this->form_validation->set_rules('bidang', 'Bidang', 'trim|required');

	$this->form_validation->set_rules('id_barang_keluar', 'id_barang_keluar', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}

/* End of file Barang_keluar.php */
/* Location: ./application/controllers/Barang_keluar.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2018-05-10 15:13:50 */
/* http://harviacode.com */