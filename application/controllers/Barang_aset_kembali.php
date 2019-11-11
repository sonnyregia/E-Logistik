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
        $this->load->model('Kartu_model');
        $this->load->model('No_urut');
        $this->load->library('form_validation');
    }


    public function index()
    {   $data['judul'] = 'Aset Kembali Barang';
        $data['konten'] = 'Barang_aset_kembali/barang_aset_kembali_view';
        $data['all_barang_aset'] = $this->Barang_aset_model->get_all_barang_aset();
        $data['all_pinjam'] = $this->Pinjam_model->get_all_barang_pinjam();
        $data['all_barang_sub'] = $this->Barang_aset_sub_model->get_all_barang_aset_sub();
        $data['all_kembali'] = $this->Kembali_model->get_all_barang_kembali();
        $data['all_kartu'] = $this->Kartu_model->get_all_kartu();

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

    public function kembalikan() {
        $this->form_validation->set_rules('tanggal_balik','tanggal_balik','required');

        if($this->form_validation->run())     
        {   
            // $awal = $this->input->post('tanggal_pinjam');
            // $akhir = $this->input->post('tanggal_balik');

            $this->db->where('id_aset_pinjam',$id);
            $query=$this->db->get('barang_aset_pinjam')->result();
            foreach ($query as $row)
            {
                $tgl=$row->tgl_balik;
            }
            $SLS=((strtotime($this->input->post('tgl_balik'))-strtotime($tgl))/(60*60*24));
                              
            $params = array(
                'id_aset' => $this->input->post('id_aset'),
                'id_aset_pinjam' => $this->input->post('id_aset_pinjam'),
                'tanggal_balik' => $this->input->post('tanggal_balik'),
                'id_aset_sub' => $this->input->post('id_aset_sub'),
                'id_kartu' => $this->input->post('id_kartu'),
                // 'terlambat' => ((abs(strtotime($akhir) - strtotime($awal)))/(60*60*24))
                'terlambat' => $SLS,
                // 'seri' => $this->input->post('seri'),
            );
            $kembali_id = $this->Kembali_model->add_kembali($params);
            $this->db->set('grup',1);
            $this->db->where('id_aset_sub',$this->input->post('id_aset_sub'));
            $this->db->update('barang_aset_sub');

            $this->db->set('grup_k',1);
            $this->db->where('id_kartu',$this->input->post('id_kartu'));
            $this->db->update('kartu');

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
            $data['all_kartu'] = $this->Kartu_model->get_all_kartu();          
            
            $data['judul'] = 'Aset Kembali';
            $data['konten'] = 'barang_aset_kembali/barang_aset_kembali_kembali';
            $this->load->view('v_index',$data);
        }

    }
    
   public function cetak($kode_cetak)
    {
        
        $data = array(
            'data' => $this->db->query("SELECT * FROM barang_aset_kembali where id_aset_kembali='$kode_cetak'"),
        );
        $this->load->view('print_kembali',$data);
    }
    
   public function laporan(){
        $data = array(
            'data' => $this->db->query("SELECT * FROM barang_aset_kembali where id_aset_kembali='$kode_cetak'"),
        );
        $this->load->view('cetak_pinjam_kembali', $data);
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
        $cek = $this->db->query("SELECT * FROM barang_aset_pinjam as a, barang_aset as b, barang_aset_sub as s, merk_aset as d, satuan_aset as e, kartu as k WHERE a.id_aset=b.id_aset and b.id_aset=s.id_aset and a.id_aset_sub=s.id_aset_sub and s.id_merk_aset=d.id_merk_aset and s.id_satuan_aset=e.id_satuan_aset and a.id_kartu=k.id_kartu and a.id_aset_pinjam='$id_aset_pinjam'")->row();
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
            'id_kartu' => $cek->id_kartu,
        );
        echo json_encode($data);
    }



}

