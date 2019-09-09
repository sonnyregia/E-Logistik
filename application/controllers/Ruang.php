<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Ruang extends CI_Controller
{
   
   function __construct()
    {
        parent::__construct();
        $this->load->model('Ruang_model');
        // $this->load->model('Ruang_detail_model');
        $this->load->model('Barang_aset_sub_model');
        $this->load->model('Barang_aset_model');
        $this->load->model('Merk_aset_model');
        $this->load->model('Satuan_aset_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['judul'] = 'UPB';
        $data['konten'] = 'ruang/ruang_list';
        $data['all_ruang'] = $this->Ruang_model->get_all_ruang();
        
        $this->load->view('v_index', $data);
    }

    // public function detail(){
    //     $data['judul'] = 'Detail UPB';
    //     $data['konten'] = 'ruang/ruang_detail_list';
    //     $data['all_ruang'] = $this->Ruang_model->get_all_ruang();
    //     $data['all_ruang_detail'] = $this->Ruang_detail_model->get_all_ruang_detail();
    //     $data['all_barang_aset'] = $this->Barang_aset_model->get_all_barang_aset();
    //     $data['all_barang_aset_sub'] = $this->Barang_aset_sub_model->get_all_barang_aset_sub();
    //     $data['all_merk_aset'] = $this->Merk_aset_model->get_all_merk();
    //     $data['all_satuan_aset'] = $this->Satuan_aset_model->get_all_satuan();

    //     $this->load->view('v_index', $data);
    // }

    public function tambah_upb(){
        $data = array(
            'button' => 'Create',
            'action' => site_url('ruang/aksi_tambah_upb'),
            'id_ruang' => set_value('id_ruang'),
            'nama_ruang' => set_value('nama_ruang'),
            'kode_ruang' => set_value('kode_ruang'),
            'konten' => 'ruang/ruang_upb_form',
            'judul' => 'Tambah data',
        );
            $this->load->view('v_index',$data);
    }

    public function aksi_tambah_upb(){
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
                'nama_ruang' => $this->input->post('nama_ruang',TRUE),
                'kode_ruang' => $this->input->post('kode_ruang',TRUE),
            );
            $this->Ruang_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('ruang'));
        }
    }

    public function update($id) 
    {
        $row = $this->Ruang_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('ruang/update_action'),
        'id_ruang' => set_value('id_ruang', $row->id_ruang),
        'nama_ruang' => set_value('nama_ruang', $row->nama_ruang),
        'kode_ruang' => set_value('kode_ruang', $row->kode_ruang),
        'konten' => 'ruang/ruang_upb_form_update',
            'judul' => 'Data Ruang',
        );
            $this->load->view('v_index', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('ruang'));
        }
    }
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id_ruang', TRUE));
        } else {
            

             $data = array(
        'nama_ruang' => $this->input->post('nama_ruang',TRUE),
        'kode_ruang' => $this->input->post('kode_ruang',TRUE),
        );

            $this->Ruang_model->update($this->input->post('id_ruang', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('ruang'));
        }

           
        
    }
    public function _rules() 
    {
    $this->form_validation->set_rules('nama_ruang', 'nama ruang', 'trim|required');
    $this->form_validation->set_rules('kode_ruang', 'kode ruang', 'trim|required');

    $this->form_validation->set_rules('id_ruang', 'id_ruang', 'trim');
    $this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }
}

