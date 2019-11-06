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
        $this->load->model('Satuan_barang_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['judul'] = 'Barang Keluar';
        $data['konten'] = 'barang_keluar/barang_keluar_list';
        $data['all_keluar'] = $this->Barang_keluar_model->get_all_keluar();
        $data['all_barang'] = $this->Barang_model->get_all_barang();
        $data['all_merk'] = $this->Merk_barang_model->get_all_merk();
        $data['all_satuan'] = $this->Satuan_barang_model->get_all_satuan();

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
        $this->form_validation->set_rules('id_barang','Barang','required');
        if($this->form_validation->run())     
        { 

        $params = array(
	    // 'id_barang_keluar' => $this->input->post('id_barang_keluar'),
	    'id_barang' => $this->input->post('id_barang'),
        'id_merk' => $this->input->post('id_merk'),
	    'tanggal' => $this->input->post('tanggal'),
	    'jumlah' => $this->input->post('jumlah'),
        'id_satuan' => $this->input->post('id_satuan'),
        'pegawai' => $this->input->post('pegawai'),
        'nip' => $this->input->post('nip'),
        'bidang' => $this->input->post('bidang'),

	);
        $keluar_id = $this->Barang_keluar_model->add_keluar($params);
        redirect('barang_keluar');
    }else{

        $data['all_barang'] = $this->Barang_model->get_all_barang();
        $data['all_satuan'] = $this->Satuan_barang_model->get_all_satuan();
        $data['all_merk'] = $this->Merk_barang_model->get_all_merk();
        $data['judul'] = 'Form Input Data';
        $data['konten'] = 'barang_keluar/barang_keluar_input';
        $this->load->view('v_index', $data);   
    }
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

 //    public function _rules() 
 //    {
	// $this->form_validation->set_rules('kode_barang', 'kode barang', 'trim|required');
	// $this->form_validation->set_rules('tanggal', 'tanggal', 'trim|required');
	// $this->form_validation->set_rules('jumlah', 'jumlah', 'trim|required');
 //    $this->form_validation->set_rules('pegawai', 'Pegawai', 'trim|required');
 //    $this->form_validation->set_rules('bidang', 'Bidang', 'trim|required');

	// $this->form_validation->set_rules('id_barang_keluar', 'id_barang_keluar', 'trim');
	// $this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
 //    }

    public function cek_data()
    {
        $id_barang = $this->input->post('id_barang');
        $cek = $this->db->query("SELECT * FROM barang as b, merk_barang as c, satuan_barang as s WHERE b.id_merk=c.id_merk and b.id_satuan=s.id_satuan and b.id_barang='$id_barang'")->row();
        $data = array(
            'id_barang' => $cek->id_barang,
            'id_merk' => $cek->id_merk,
            'id_satuan' => $cek->id_satuan,
        );
        echo json_encode($data);
    }
}

    


/* End of file Barang_keluar.php */
/* Location: ./application/controllers/Barang_keluar.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2018-05-10 15:13:50 */
/* http://harviacode.com */