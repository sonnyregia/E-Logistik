<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Barang_aset_sub extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Barang_aset_sub_model');
        $this->load->model('Barang_aset_model');
        $this->load->model('Merk_aset_model');
        $this->load->model('Satuan_aset_model');
        $this->load->model('No_urut');
        $this->load->model('Kode_urut_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['judul'] = 'Aset NUP';
        $data['konten'] = 'barang_aset_sub/barang_aset_sub_list';
        $data['all_barang_aset'] = $this->Barang_aset_model->get_all_barang_aset();
        $data['all_barang_aset_sub'] = $this->Barang_aset_sub_model->get_all_barang_aset_sub();
        $data['all_merk_aset'] = $this->Merk_aset_model->get_all_merk();
        $data['all_satuan_aset'] = $this->Satuan_aset_model->get_all_satuan();
        $this->load->view('v_index', $data);
    }

    
    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('barang_aset_sub/create_action'),
	    'id_aset_sub' => set_value('id_aset_sub'),
	    'seri' => set_value('seri'),
	    'id_aset' => set_value('id_aset'),
        'tanggal_input' => set_value('tanggal_input'),
        'tahun' => set_value('tahun'),
        // 'kodeurut' => $this->No_urut->buat_kode_bmn(),
        'id_merk_aset' => set_value('id_merk_aset'),
        'penguasaan' => set_value('penguasaan'),
        'detail_aset' => set_value('detail_aset'),
        'keterangan' => set_value('keterangan'),
        'id_satuan_aset' => set_value('id_satuan_aset'),
         'grup' => set_value('grup'),
        // 'gambar' => set_value('gambar'),
        'konten' => 'barang_aset_sub/barang_aset_sub_form',
            'judul' => 'Data Aset',
	);
        $this->load->view('v_index', $data);
        $data['all_barang_aset'] = $this->Barang_aset_model->get_all_barang_aset();
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {

        // $this->zend->load('Zend/Barcode');
        // $barcode = $this->input->post('seri'); //nomor id barcode
        // $imageResource = Zend_Barcode::factory('code128','gambar', array('text'=>$barcode), array())->draw();
        // $imageName = $barcode.'.jpg';
        // $imagePath = 'barcode/'; //menyimpan file barcode
        // imagejpeg($imageResource, $imagePath.$imageName);
        // $pathBarcode = $imagePath.$imageName; //menyimpan path image barcode

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
		'seri' => $this->input->post('seri',TRUE),
		'id_aset' => $this->input->post('id_aset',TRUE),
        'tanggal_input' => date_format(date_create( $this->input->post('tanggal_input',TRUE)),'d F Y'),
        'tahun' => $this->input->post('tahun',TRUE),
        'detail_aset' => $this->input->post('detail_aset',TRUE),
        'grup' => 1,
        'id_merk_aset' => $this->input->post('id_merk_aset',TRUE),
        // // 'gambar' => $pathBarcode,
        'penguasaan' => $this->input->post('penguasaan',TRUE),
        'keterangan' => $this->input->post('keterangan',TRUE),
        'id_satuan_aset' => $this->input->post('id_satuan_aset',TRUE),
		// 'foto_barang' => $dfile,
	    );

            $this->Barang_aset_sub_model->insert($data);
            // $this->Kode_urut_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('barang_aset_sub'));
        }
    }

    public function edit($id_aset_sub){
        $data['barang'] = $this->Barang_aset_sub_model->get_barang($id_aset_sub);
        if(isset($data['barang']['id_aset_sub']))
        {
            $this->load->library('form_validation');
            $this->form_validation->set_rules('grup','grup','required');
            if($this->form_validation->run())
            {
            $params = array(
                'grup' => $this->input->post('grup'),
                );
                $this->Barang_aset_sub_model->update_barang($id_aset_sub,$params);
                redirect('barang_aset_sub');
            }
            else
            {
                $data
            }
        }
    }
    
    public function update($id) 
    {
        $row = $this->Barang_aset_sub_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('barang_aset_sub/update_action'),
		'id_aset_sub' => set_value('id_aset_sub', $row->id_aset_sub),
		// 'kode_aset' => set_value('kode_aset', $row->kode_aset),
		'id_aset' => set_value('id_aset', $row->id_aset),
        'seri' => set_value('seri', $row->seri),
        'tahun' => set_value('tahun', $row->tahun),
        'merk_aset' => set_value('merk_aset', $row->merk_aset),
        // 'penguasaan' => set_value('penguasaan', $row->penguasaan),
        // 'keterangan' => set_value('keterangan', $row->keterangan),
        'satuan_aset' => set_value('satuan_aset', $row->satuan_aset),
        'konten' => 'barang_aset_sub/barang_aset_sub_form_update',
            'judul' => 'Data Aset',
	    );
            $data['all_satuan'] = $this->Satuan_aset_model->get_all_satuan();
            $data['all_merk'] = $this->Merk_aset_model->get_all_merk();
            $this->load->view('v_index', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('barang_aset_sub'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id_aset_sub', TRUE));
        } else {
        if ($_FILES == '') {
            
            $data = array(
        // 'kode_aset' => $this->input->post('kode_aset',TRUE),
        'id_aset' => $this->input->post('id_aset',TRUE),
        'tahun' => $this->input->post('tahun',TRUE),
        'seri' => $this->input->post('seri',TRUE),
        'merk_aset' => $this->input->post('merk_aset',TRUE),
        'satuan_aset' => $this->input->post('satuan_aset',TRUE),
        // 'penguasaan' => $this->input->post('penguasaan',TRUE),
        // 'keterangan' => $this->input->post('keterangan',TRUE),

        );

            $this->Barang_aset_sub_model->update($this->input->post('id_aset_sub', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('barang_aset_sub'));

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
        // 'kode_aset' => $this->input->post('kode_aset',TRUE),
        'id_aset' => $this->input->post('id_aset',TRUE),
        'tahun' => $this->input->post('tahun',TRUE),
        'seri' => $this->input->post('seri',TRUE),
        'merk_aset' => $this->input->post('merk_aset',TRUE),
        'satuan_aset' => $this->input->post('satuan_aset',TRUE),
        // 'penguasaan' => $this->input->post('penguasaan',TRUE),
        // 'keterangan' => $this->input->post('keterangan',TRUE),
        // 'foto_barang' => $dfile,
        );

            $this->Barang_aset_sub_model->update($this->input->post('id_aset_sub', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('barang_aset_sub'));
        }

           
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Barang_aset_sub_model->get_by_id($id);

        if ($row) {
            $this->Barang_aset_sub_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('barang_aset_sub'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('barang_aset_sub'));
        }
    }

 //    public function _rules() 
 //    {
	// $this->form_validation->set_rules('seri', 'kode', 'trim|required');
	// $this->form_validation->set_rules('id_aset', 'nama aset', 'trim|required');
 //    $this->form_validation->set_rules('tanggal_input', 'tanggal_input aset', 'trim');
 //    $this->form_validation->set_rules('tahun', 'tahun aset', 'trim|required');
 //    $this->form_validation->set_rules('grup', 'grup', 'trim');
 //    $this->form_validation->set_rules('id_merk_aset', 'merk aset', 'trim|required');
 //    $this->form_validation->set_rules('id_satuan_aset', 'satuan aset', 'trim|required');
 //    $this->form_validation->set_rules('penguasaan', 'penguasaan', 'trim|required');
 //    $this->form_validation->set_rules('keterangan', 'keterangan', 'trim|required');
 //    $this->form_validation->set_rules('detail_aset', 'detail_aset', 'trim|required');

	// $this->form_validation->set_rules('id_aset_sub', 'id_aset_sub', 'trim');
	// $this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
 //    }

}

