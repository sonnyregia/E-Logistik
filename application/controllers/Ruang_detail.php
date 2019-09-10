<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Ruang_detail extends CI_Controller
{
   function __construct()
    {
        parent::__construct();
        $this->load->model('Ruang_model');
        $this->load->model('Detail_model');
        $this->load->model('Barang_aset_model');
        $this->load->model('Barang_aset_sub_model');
        $this->load->model('Merk_aset_model');
        $this->load->model('Satuan_aset_model');
        $this->load->library('form_validation');
    }


    // public function index()
    // {   
    //     // $id_ruang = $this->input->get('id_ruang');

    //     $data['judul'] = 'Detail UPB';
    //     $data['konten'] = 'ruang/ruang_detail_list';
    //     $data['all_ruang_detail'] = $this->Ruang_detail_model->get_all_ruang_detail();
    //     // $data['id'] = '$id_ruang';
    //     // $data['all_barang_aset'] = $this->Barang_aset_model->get_all_barang_aset();
    //     // $data['all_barang_sub'] = $this->Barang_aset_sub_model->get_all_barang_aset_sub();

    //     $this->load->view('v_index', $data);
    // }

    //  public function detail(){
    //     $data['judul'] = 'Detail UPB';
    //     $data['konten'] = 'ruang/ruang_detail_list';
    //     // $id_ruang = $this->input->get('id_ruang');
    //     $data['query'] = $this->Detail_model->get_detail();
    //     // $data['id'] = '$id_ruang';
    //     // $data['all_barang_aset'] = $this->Barang_aset_model->get_all_barang_aset();
    //     // $data['all_barang_sub'] = $this->Barang_aset_sub_model->get_all_barang_aset_sub();
    //     // $data['all_ruang'] = $this->Ruang_model->get_all_ruang();
    //     // $data['all_merk_aset'] = $this->Merk_aset_model->get_all_merk();
    //     // $data['all_satuan_aset'] = $this->Satuan_aset_model->get_all_satuan();
    //     // $data['id']= $id_ruang;
        
    //     $this->load->view('v_index', $data);
    // }

    public function detail($kode_detail)
    {
        
        $data = array(
            'konten' => 'ruang/ruang_detail_list',
            'judul' => 'Detail UPB',
            'data' => $this->db->query("SELECT * FROM ruang where id_ruang='$kode_detail'"),
        );
        $this->load->view('v_index',$data);
    }

    public function cetak($kode_detail)
    {
        
        $data = array(
            'data' => $this->db->query("SELECT * FROM ruang where id_ruang='$kode_detail'"),
        );
        $this->load->view('cetak_upb',$data);
    }

    public function cetak_download($kode_detail)
    {
        
        $data = array(
            'data' => $this->db->query("SELECT * FROM ruang where id_ruang='$kode_detail'"),
        );
        $this->load->view('cetak_upb_d',$data);
    }
    
    public function tambah_detail_upb(){
        $this->form_validation->set_rules('pemegang','Pemegang','required');

        // $id_ruang = $this->input->get('id_ruang');

        if($this->form_validation->run()){
            $params = array(
                'id_ruang' => $this->input->post('id_ruang'),
                'id_aset' => $this->input->post('id_aset'),
                'id_aset_sub' => $this->input->post('id_aset_sub'),
                'id_merk_aset' => $this->input->post('id_merk_aset'),
                'id_satuan_aset' => $this->input->post('id_satuan_aset'),
                'pemegang' => $this->input->post('pemegang'),
            );
            $ruang_id = $this->Detail_model->add_ruang($params);
            $this->db->set('grup',2);
            $this->db->where('id_aset_sub',$this->input->post('id_aset_sub'));
            $this->db->update('barang_aset_sub');
            redirect('ruang');
        } else {
            $data['all_barang_aset'] = $this->Barang_aset_model->get_all_barang_aset();
            $data['all_barang_aset_sub'] = $this->Barang_aset_sub_model->get_all_barang_aset_sub();
            $data['all_merk_aset'] = $this->Merk_aset_model->get_all_merk();
            $data['all_satuan_aset'] = $this->Satuan_aset_model->get_all_satuan();
            $data['all_ruang'] = $this->Ruang_model->get_all_ruang();

            $data['judul'] = 'Tambah Data Detail';
            $data['konten'] = 'ruang/ruang_detail_form';
            $this->load->view('v_index',$data);
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

    public function remove($id_ruang_detail) 
    {
        $row = $this->Detail_model->get_ruang($id_ruang_detail);

        if ($row) {
            $this->Detail_model->delete_ruang($id_ruang_detail);
            $this->db->set('grup',1);
            $this->db->where('id_aset_sub');
            $this->db->update('barang_aset_sub');
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('ruang'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('ruang'));
        }
    }

    // function remove($id_ruang_detail)
    // {
    //     $ruang = $this->Detail_model->get_ruang($id_ruang_detail);
    //     if(isset($ruang['id_ruang_detail']))
    //     {
    //         $this->Detail_model->delete_ruang($id_ruang_detail);
    //         $this->db->set('grup',1);
    //         $this->db->where('id_aset_sub',$this->input->post('id_aset_sub'));
    //         $this->db->update('barang_aset_sub');
    //         redirect('ruang/index');
    //     }
    //     else
    //         show_error('The Data you are trying to delete does not exist.');
    // }

    function hapus_barang(){
        $id_ruang_detail=$this->input->post('id_ruang_detail');
        $this->Detail_model->hapus_barang($id_ruang_detail);
        $this->db->set('grup',1);
            $this->db->where('id_aset_sub');
            $this->db->update('barang_aset_sub');
        redirect('ruang');
    }

    // public function remove()
    // {
    //     $ruang = $this->input->get('id_ruang_detail',TRUE);
    //     $field='id_ruang_detail';
    //     $this->db->where('id_ruang_detail',$ruang);
    //     $dd=$this->db->get('ruang_detail')->result();
    //     foreach ($dd as $key => $value) {
    //         $id_aset_sub=$value->id_aset_sub;
    //         $id_ruang_detail=$value->id_ruang_detail;
    //     }
    //         $this->db->set('grup',1);
    //         $this->db->where('id_aset_sub',$id_aset_sub);
    //         $this->db->update('barang_aset_sub');

    //         $this->db->where('id_ruang_detail',$id_ruang_detail);

    //         $query = $this->Detail_model->delete('ruang_detail',$field,$ruang);
    //         redirect('ruang'.$id_ruang_detail);
    // }

    // public function _rules() 
    // {
    // // $this->form_validation->set_rules('kode_pinjam', 'kode Pinjam', 'trim|required');
    // $this->form_validation->set_rules('id_aset', 'kode aset', 'trim|required');
    // $this->form_validation->set_rules('id_aset_sub', 'seri aset', 'trim|required');
    // $this->form_validation->set_rules('nama_pegawai', 'nama pegawai', 'trim|required');
    // $this->form_validation->set_rules('jabatan', 'jabatan', 'trim|required');
    // $this->form_validation->set_rules('keterangan', 'keterangan', 'trim|required');
    // $this->form_validation->set_rules('kartu_p', 'nomor kartu', 'trim|required');
    // $this->form_validation->set_rules('tanggal_pinjam', 'tanggal_pinjam aset', 'trim');

    // $this->form_validation->set_rules('id_aset_pinjam', 'id_aset_pinjam', 'trim');
    // $this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    // }

    // public function simpan_cart()
    // {
        
    //     $data = array(
    //         'id'    => $this->input->post('kode_aset'),
    //         'nama_pegawai'   => $this->input->post('nama_pegawai'),
    //         'keterangan' => $this->input->post('keterangan'),
    //         'jabatan'  => $this->input->post('jabatan'),
    //         'nama_aset'  => $this->input->post('nama_aset'),
    //         'seri'  => $this->input->post('seri'),
    //     );
    //     $this->cart->insert($data);
    //     redirect('barang_aset_pinjam/create');
    // }

    public function cek_data()
    {
        $id_aset_sub = $this->input->post('id_aset_sub');
        $cek = $this->db->query("SELECT * FROM barang_aset_sub as b, barang_aset as c, merk_aset as s, satuan_aset as t WHERE b.id_merk_aset=s.id_merk_aset and b.id_satuan_aset=t.id_satuan_aset and b.id_aset=c.id_aset and b.id_aset_sub='$id_aset_sub'")->row();
        $data = array(
            'id_aset' => $cek->id_aset,
            'id_aset_sub' => $cek->id_aset_sub,
            'kodeurut' => $cek->kodeurut,
            'kode_aset' => $cek->kode_aset,
            'id_merk_aset' => $cek->id_merk_aset,
            'id_satuan_aset' => $cek->id_satuan_aset,
        );
        echo json_encode($data);
    }

    public function hapus_data($kode_data)
    {
        
        $this->db->where('kode_pinjam', $kode_data);
        $this->db->delete('barang_aset_pinjam');
        $this->db->where('kode_pinjam', $kode_data);
        $this->db->delete('barang_aset_pinjam_detail');
        ?>
        <script type="text/javascript">
            alert('Berhapus Hapus Data');
            window.location='<?php echo base_url('barang_aset_pinjam') ?>';
        </script>
        <?php
    } 


}

