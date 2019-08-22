<?php
defined('BASEPATH') OR
    exit('No direct script access allowed');

class Barang_aset_pinjam extends CI_Controller
{
   function __construct()
    {
        parent::__construct();
        $this->load->model('Barang_aset_pinjam_model');
        $this->load->model('Barang_aset_model');
        $this->load->model('Barang_aset_sub_model');
        $this->load->model('No_urut');
        $this->load->library('form_validation');
    }


    public function index()
    {   
        $data = array(
            'konten' => 'barang_aset_pinjam/barang_aset_pinjam_list',
            'judul' => ' Aset Pinjam Barang',
        );
        $this->load->view('v_index', $data);
    }

     public function detail($kode_detail){
        $data = array(
            'konten' => 'barang_aset_pinjam/barang_aset_pinjam_detail',
            'judul' => ' Barang Aset Pinjam',
            'data' => $this->db->query("SELECT * FROM barang_aset_pinjam where nama_aset='$kode_detail'"),
        );
        $this->load->view('v_index', $data);
    }
  
    public function tambah_pinjam()
    {
        $data = array(
            'konten' => 'barang_aset_pinjam/barang_aset_pinjam_form',
            'judul' => 'Aset Pinjam',
            'kodepinjam' => $this->No_urut->buat_kode_pinjam(),
        );
        $data['all_barang_aset'] = $this->Barang_aset_model->get_all_barang_aset();
        $data['all_barang_aset_sub'] = $this->Barang_aset_sub_model->get_all_barang_aset_sub();
        $this->load->view('v_index',$data);
    }

    public function cek_aset()
    {
        $kode_aset = $this->input->post('kode_aset');
        $cek = $this->db->query("SELECT * FROM barang_aset as a, barang_aset_sub as s WHERE a.nama_aset=s.nama_aset and kode_aset='$kode_aset'")->row();
        $data = array(
            'kode_aset' => $cek->kode_aset,
            'nama_aset' => $cek->nama_aset,
            'seri' => $cek->seri,
        );
        echo json_encode($data);
    }
  
    public function hapus_pinjam($kode_data)
    {
        
        $this->db->where('kode_pinjam', $kode_data);
        $this->db->delete('barang_aset_pinjam');
        $this->db->where('kode_pinjam', $kode_data);
        $this->db->delete('barang_aset_pinjam_detail');
        ?>
        <script type="text/javascript">
            alert('Berhapus Hapus Data');
            window.location='<?php echo base_url('barang_aset_pinjam/barang_aset_pinjam_list') ?>';
        </script>
        <?php
    }

    public function simpan_pinjam()
    {
        $kode_pinjam = $this->input->post('kode_pinjam');
        $tanggal_pinjam = $this->input->post('tanggal_pinjam');
        // $pelanggan = $this->input->post('pelanggan');

        foreach ($this->cart->contents() as $items) {
            $kode_aset = $items['id'];
            $nama_pegawai = $items['nama_pegawai'];
            $keterangan = $items['keterangan'];
            $jabatan = $items['jabatan'];
            $d = array(
                'kode_pinjam' => $kode_pinjam,
                'kode_aset' => $kode_aset,
                'nama_pegawai' => $nama_pegawai,
                'keterangan' => $keterangan,
                'jabatan' => $jabatan,
            );
            $this->db->insert('barang_aset_pinjam_detail', $d);
            //$this->db->query("UPDATE menu SET satuan=satuan-'$qty' WHERE kode_menu='$kode_barang'");
        }

        $data = array(
            //'nama_pelanggan' => $pelanggan,
            'kode_pinjam'=> $kode_pinjam,
            
            'tanggal_pinjam'=> $tanggal_pinjam,
        );
        $this->db->insert('barang_aset_pinjam', $data);
        $this->cart->destroy();
        redirect('barang_aset_pinjam/barang_aset_pinjam_list');
    }

    public function simpan_cart()
    {
        
        $data = array(
            'id'    => $this->input->post('kode_aset'),
            'nama_pegawai'   => $this->input->post('nama_pegawai'),
            'jabatan' => $this->input->post('jabatan'),
            'nama_aset'  => $this->input->post('nama_aset'),
        );
        $this->cart->insert($data);
        redirect('barang_aset_pinjam/tambah_pinjam');
    }

    public function hapus_cart($id)
    {
        
        $data = array(
            'rowid'    => $id,
            
        );
        $this->cart->update($data);
        redirect('barang_aset_pinjam/tambah_pinjam');
    }
}

