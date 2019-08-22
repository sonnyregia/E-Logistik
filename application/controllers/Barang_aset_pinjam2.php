<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Barang_aset_pinjam2 extends CI_Controller
{
   function __construct()
    {
        parent::__construct();
        $this->load->model('Barang_aset_pinjam_model');
        $this->load->model('Barang_aset_model');
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
        $config['total_rows'] = $this->Barang_aset_pinjam_model->total_rows($q);
        $barang_aset_pinjam = $this->Barang_aset_pinjam_model->get_limit_data($config['per_page'], $start, $q);
        $data['all_barang_aset'] = $this->Barang_aset_model->get_all_barang_aset();

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'barang_aset_pinjam_data' => $barang_aset_pinjam,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
            'konten' => 'barang_aset_pinjam/barang_aset_pinjam_list',
            'judul' => ' Aset Pinjam Barang',
        );
        $this->load->view('v_index', $data);
    }

    public function detail($kode_detail){
        $data = array(
            'konten' => 'barang_aset_pinjam/barang_aset_pinjam_detail',
            'judul' => ' Barang Aset Pinjam',
            'data' => $this->db->query("SELECT * FROM barang_aset_pinjam where kode_aset='$kode_detail'"),
        );
        $this->load->view('v_index', $data);
    }
    
    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('barang_aset_pinjam/create_action'),
        'id_aset_pinjam' => set_value('id_aset_pinjam'),
        'kode_aset' => set_value('kode_aset'),
        'nama_pegawai' => set_value('nama_pegawai'),
        'jabatan' => set_value('jabatan'),
        'keterangan' => set_value('keterangan'),
        'konten' => 'barang_aset_pinjam/barang_aset_pinjam_form',
            'judul' => 'Aset Pinjam',
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
        'nama_pegawai' => $this->input->post('nama_pegawai',TRUE),
        'jabatan' => $this->input->post('jabatan',TRUE),
        'keterangan' => $this->input->post('keterangan',TRUE),
        // 'id_merk' => $this->input->post('id_merk',TRUE),
        // 'foto_barang' => $dfile,
        );

            $this->Barang_aset_pinjam_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('barang_aset_pinjam'));
        }
    }

    // public function cetak($kode_cetak)
    // {
    //     $data = array(
    //         'data' => $this->db->query("SELECT * FROM barang_aset where kode_aset='$kode_cetak'"),
    //     );
    //     $this->load->view('cetak_aset',$data);
    // }

    public function delete($id) 
    {
        $row = $this->Barang_aset_pinjam_model->get_by_id($id);

        if ($row) {
            $this->Barang_aset_pinjam_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('barang_aset_pinjam'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('barang_aset_pinjam'));
        }
    }

    public function _rules() 
    {
    $this->form_validation->set_rules('kode_aset', 'kode aset', 'trim|required');
    $this->form_validation->set_rules('nama_pegawai', 'nama pegawai', 'trim|required');
    $this->form_validation->set_rules('jabatan', 'jabatan', 'trim|required');
    $this->form_validation->set_rules('keterangan', 'keterangan', 'trim|required');

    $this->form_validation->set_rules('id_aset_pinjam', 'id_aset_pinjam', 'trim');
    $this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }
}

