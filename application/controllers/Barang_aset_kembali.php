<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Barang_aset_kembali extends CI_Controller
{
   function __construct()
    {
        parent::__construct();
        $this->load->model('Kembali_model');
        $this->load->model('Barang_aset_model');
        $this->load->model('Barang_aset_sub_model');
        $this->load->model('Pinjam_model');
        $this->load->model('No_urut');
        $this->load->library('form_validation');
    }


    public function index()
    {   $data['judul'] = 'Aset Kembali Barang';
        $data['konten'] = 'Barang_aset_kembali/barang_aset_kembali_list';
        $data['all_barang_aset'] = $this->Barang_aset_model->get_all_barang_aset();
        $data['all_pinjam'] = $this->Pinjam_model->get_all_barang_pinjam();
        $data['all_barang_sub'] = $this->Barang_aset_sub_model->get_all_barang_aset_sub();
        $data['all_kembali'] = $this->Kembali_model->get_all_barang_kembali();

        $this->load->view('v_index', $data);
    }

    //  public function detail(){
    //     $data['judul'] = 'Hasil';
    //     $data['konten'] = 'Barang_aset_kembali/barang_aset_kembali_detail';
    //     $data['all_barang_aset'] = $this->Barang_aset_model->get_all_barang_aset();
    //     $data['all_pinjam'] = $this->Pinjam_model->get_all_barang_pinjam();
    //     $data['all_barang_sub'] = $this->Barang_aset_sub_model->get_all_barang_aset_sub();
    //     $data['all_kembali'] = $this->Kembali_model->get_all_barang_kembali();
    //     );
             
    //     $this->load->view('v_index', $data);
    // }

    // public function detail($id){
    //     $data = array(
    //         'konten' => 'barang_aset_pinjam/barang_aset_pinjam_detail',
    //         'judul' => ' Barang Aset Pinjam',
            
    //     );
    //     $data['all_pinjam'] = $this->Pinjam_model->get_all_pinjam($id);
        
    //     $this->load->view('v_index', $data);
    // }

    // public function detail($kode_detail){
    //     $data = array(
    //         'konten' => 'barang_aset_pinjam/barang_aset_pinjam_detail',
    //         'judul' => ' Barang Aset Pinjam',
    //         'data' => $this->db->query("SELECT * FROM barang_aset_pinjam_detail where id_aset_pinjam_detail='$kode_detail'"),
    //     );
    //     $this->load->view('v_index', $data);
    // }

     public function kembalikan() 
    {
        $this->form_validation->set_rules('tanggal_balik','tanggal_balik','required');

        if($this->form_validation->run())     
        {   

            $this->db->where('id_aset_pinjam',$id);
            $query=$this->db->get('barang_aset_pinjam')->result();
            foreach ($query as $row)
            {
               $tgl=$row->tanggal_pinjam;   
            }
            $SLS=((strtotime($this->input->post('tanggal_pinjam'))-strtotime($tgl))/(60*60*24));

            // $from = $this->input->post('tanggal_balik');
            // $date_array=explode("/",$from);
            // $new_date_array=array($date_array[2], $date_array[1], $date_array[0]);
            // $new_date=implode("-",$new_date_array);
            
            $params = array(
                'id_aset' => $this->input->post('id_aset'),
                'id_aset_pinjam' => $this->input->post('id_aset_pinjam'),
                'tanggal_balik' => $this->input->post('tanggal_balik'),
                'id_aset_sub' => $this->input->post('id_aset_sub'),
                'terlambat' => $SLS,
                // 'seri' => $this->input->post('seri'),
            );
            $kembali_id = $this->Kembali_model->add_kembali($params);
            $this->db->set('grup',1);
            $this->db->where('id_aset_sub',$this->input->post('id_aset_sub'));
            $this->db->update('barang_aset_sub');

            $this->db->set('status',0);
            $this->db->where('id_aset_pinjam',$this->input->post('id_aset_pinjam'));
            $this->db->update('barang_aset_pinjam');
            redirect('barang_aset_kembali');
        }
        else
        {
            $this->load->model('Barang_aset_model');
            $this->load->model('Merk_aset_model');
            $this->load->model('Satuan_aset_model');
            
            $data['all_pinjam'] = $this->Pinjam_model->get_all_barang_pinjam();
            $data['all_barang_aset'] = $this->Barang_aset_model->get_all_barang_aset();
            $data['all_barang_aset_sub'] = $this->Barang_aset_sub_model->get_all_barang_aset_sub();
            $data['all_merk_aset'] = $this->Merk_aset_model->get_all_merk();
            $data['all_satuan_aset'] = $this->Satuan_aset_model->get_all_satuan();          
            
            $data['judul'] = 'Aset Kembali';
            $data['konten'] = 'barang_aset_kembali/barang_aset_kembali_kembali';
            $this->load->view('v_index',$data);
        }

    }
    
    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('Barang_aset_kembali/create_action'),
         'id_aset_kembali' => set_value('id_aset_kembali'),
         'kode_kembali' => $this->No_urut->buat_kode_kembali(),
         'kode_pinjam' => set_value('kode_pinjam'),
        'kode_aset' => set_value('kode_aset'),
        'nama_pegawai' => set_value('nama_pegawai'),
        'jabatan' => set_value('jabatan'),
        'keterangan' => set_value('keterangan'),
        'seri' => set_value('seri'),
        'tanggal_balik' => set_value('tanggal_balik'),
        'konten' => 'Barang_aset_kembali/barang_aset_kembali_form',
        'judul' => 'Aset Kembali',
        // 'kodeurut' => $this->No_urut->buat_kode_pinjam(),
    );
        $data['all_barang_aset'] = $this->Barang_aset_model->get_all_barang_aset();
        $data['all_barang_aset_sub'] = $this->Barang_aset_sub_model->get_all_barang_aset_sub();
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
        'kode_kembali' => $this->input->post('kode_kembali',TRUE),
        'kode_pinjam' => $this->input->post('kode_pinjam',TRUE),
        'kode_aset' => $this->input->post('kode_aset',TRUE),
        'nama_pegawai' => $this->input->post('nama_pegawai',TRUE),
        'jabatan' => $this->input->post('jabatan',TRUE),
        'keterangan' => $this->input->post('keterangan',TRUE),
        'seri' => $this->input->post('seri',TRUE),
        'tanggal_balik' => $this->input->post('tanggal_balik',TRUE),
        // 'id_merk' => $this->input->post('id_merk',TRUE),
        // 'foto_barang' => $dfile,
        );

            $this->Barang_aset_kembali_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');

            redirect(site_url('Barang_aset_kembali'));
        }
    }

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

    $this->form_validation->set_rules('kode_kembali', 'kode Kembali', 'trim|required');
    $this->form_validation->set_rules('kode_pinjam', 'kode Pinjam', 'trim|required');
    $this->form_validation->set_rules('kode_aset', 'kode aset', 'trim|required');
    $this->form_validation->set_rules('seri', 'seri aset', 'trim|required');
    $this->form_validation->set_rules('nama_pegawai', 'nama pegawai', 'trim|required');
    $this->form_validation->set_rules('jabatan', 'jabatan', 'trim|required');
    $this->form_validation->set_rules('keterangan', 'keterangan', 'trim|required');
    $this->form_validation->set_rules('tanggal_balik', 'tanggal_balik aset', 'trim');

    $this->form_validation->set_rules('id_aset_kembali', 'id_aset_kembali', 'trim');
    $this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

  
    public function cek_data()
    {
        $id_aset_pinjam = $this->input->post('id_aset_pinjam');
        $cek = $this->db->query("SELECT * FROM barang_aset_pinjam as a, barang_aset as b, barang_aset_sub as s, merk_aset as d, satuan_aset as e WHERE a.id_aset=b.id_aset and b.id_aset=s.id_aset and a.id_aset_sub=s.id_aset_sub and s.id_merk_aset=d.id_merk_aset and s.id_satuan_aset=e.id_satuan_aset and a.id_aset_pinjam='$id_aset_pinjam'")->row();
        $data = array(
            'id_aset' => $cek->id_aset,
            'id_aset_sub' => $cek->id_aset_sub,
            'tanggal_pinjam' => $cek->tanggal_pinjam,
            'id_aset_pinjam' => $cek->id_aset_pinjam,
            'nama_pegawai' => $cek->nama_pegawai,
            'jabatan' => $cek->jabatan,
            'keterangan' => $cek->keterangan,
            'id_satuan_aset' => $cek->id_satuan_aset,
            'id_merk_aset' => $cek->id_merk_aset,
        );
        echo json_encode($data);
    }



}

