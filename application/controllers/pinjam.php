<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Barang_aset_pinjam extends CI_Controller
{
   function __construct()
    {
        parent::__construct();
        $this->load->model('Barang_aset_pinjam_model');
        $this->load->model('Barang_aset_model');
        $this->load->model('Barang_aset_sub_model');
        $this->load->model('Pinjam_model');
        $this->load->model('No_urut');
        $this->load->library('form_validation');
    }


    public function index()
    {   
        $data['judul'] = 'Pinjam Barang';
        $data['konten'] = 'barang_aset_pinjam/barang_aset_pinjam_list';
        $data['all_barang_aset'] = $this->Barang_aset_model->get_all_barang_aset();
        $data['all_pinjam'] = $this->Pinjam_model->get_all_barang_pinjam();

        $this->load->view('v_index', $data);
    }

     public function detail($kode_detail){
        $data = array(
            'konten' => 'barang_aset_pinjam/barang_aset_pinjam_detail',
            'judul' => ' Barang Aset Pinjam',
            'data' => $this->db->query("SELECT * FROM barang_aset_pinjam where id_aset_pinjam='$kode_detail'"),
        );
        
        
        $this->load->view('v_index', $data);
    }

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
    
    public function create() 
    {
        $this->form_validation->set_rules('kartu_p','Kartu','required');

        if($this->form_validation->run())     
        {   
            // $from = $this->input->post('tanggal_pinjam');
            // $date_array=explode("/",$from);
            // $new_date_array=array($date_array[2], $date_array[1], $date_array[0]);
            // $new_date=implode("-",$new_date_array);
            
            // $dari = $this->input->('tanggal_balik');
            // $date_array=explode("/",$dari);
            // $new_date_array=array($date_array[2], $date_array[1], $date_array[0]);
            // $date_new=implode("-", $new_date_array);

            $params = array(
                'id_aset' => $this->input->post('id_aset'),
                'tanggal_pinjam' => $this->input->post('tanggal_pinjam'),
                'tanggal_balik' => $this->input->post('tanggal_balik'),
                'id_aset_sub' => $this->input->post('id_aset_sub'),
                'kartu_p' => $this->input->post('kartu_p'),
                'nama_pegawai' => $this->input->post('nama_pegawai'),
                'jabatan' => $this->input->post('jabatan'),
                'keterangan' => $this->input->post('keterangan'),
                // 'seri' => $this->input->post('seri'),
            );
            $pinjam_id = $this->Pinjam_model->add_pinjam($params);
            $this->db->set('grup',0);
            $this->db->where('id_aset_sub',$this->input->post('id_aset_sub'));
            $this->db->update('barang_aset_sub');
            redirect('barang_aset_pinjam');
        }
        else
        {
            $this->load->model('Barang_aset_model');
            $this->load->model('Merk_aset_model');
            $this->load->model('Satuan_aset_model');
            
            $data['all_barang_aset'] = $this->Barang_aset_model->get_all_barang_aset();
            $data['all_barang_aset_sub'] = $this->Barang_aset_sub_model->get_all_barang_aset_sub();
            $data['all_merk_aset'] = $this->Merk_aset_model->get_all_merk();
            $data['all_satuan_aset'] = $this->Satuan_aset_model->get_all_satuan();          
            
            $data['judul'] = 'Aset Pinjam';
            $data['konten'] = 'barang_aset_pinjam/barang_aset_pinjam_form';
            $this->load->view('v_index',$data);
        }

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
        // 'kode_pinjam' => $this->input->post('kode_pinjam',TRUE),
        'id_aset' => $this->input->post('id_aset',TRUE),
        'nama_pegawai' => $this->input->post('nama_pegawai',TRUE),
        'jabatan' => $this->input->post('jabatan',TRUE),
        'keterangan' => $this->input->post('keterangan',TRUE),
        'id_aset_sub' => $this->input->post('id_aset_sub',TRUE),
        'kartu_p' => $this->input->post('kartu_p',TRUE),
        'tanggal_pinjam' => $this->input->post('tanggal_pinjam',TRUE),
        // 'foto_barang' => $dfile,
        );

            $this->Barang_aset_pinjam_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            $data['all_barang_aset'] = $this->Barang_aset_model->get_all_barang_aset();
        $data['all_barang_aset_sub'] = $this->Barang_aset_sub_model->get_all_barang_aset_sub();
            redirect(site_url('barang_aset_pinjam'));
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

