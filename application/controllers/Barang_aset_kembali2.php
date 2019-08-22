<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Barang_aset_kembali extends CI_Controller {

	public function index()
	{
		$data = array(
			'konten' => 'barang_aset_kembali/barang_aset_kembali_list',
			'judul' => 'Aset Kembali',
			'data' => $this->db->query("SELECT * FROM barang_aset_kembali where id_aset_kembali='$kode_detail'"),
		);
		$this->load->view('v_index',$data);
	}

	public function detail($kode_data)
	{	
		$data = array(
			'konten' => 'barang_aset_kembali/barang_aset_kembali_detail',
			'judul' => 'Detail',
			'data' => $this->db->query("SELECT * FROM barang_aset_kembali where kode_kembali='$kode_data'"),
		);
		$this->load->view('v_index',$data);
	}

	public function tambah_data()
	{
		$this->load->model('No_urut');

		$data = array(
			'konten' => 'barang_aset_kembali/barang_aset_kembali_form',
			'judul' => 'Tambah Data',
			'kodeurut' => $this->No_urut->buat_kode_kembali(),
		);
		$this->load->view('v_index',$data);
	}

	public function hapus_data($kode_pinjam)
	{
		
        $this->db->where('kode_pinjam', $kode_pinjam);
		$this->db->delete('barang_aset_kembali');
		$this->db->where('kode_pinjam', $kode_pinjam);
		$this->db->delete('detail_kembali');
		?>
		<script type="text/javascript">
			alert('Berhapus Hapus Data');
			window.location='<?php echo base_url('barang_aset_kembali') ?>';
		</script>
		<?php
	}

	public function cek_barang()
	{
        $kode_pinjam = $this->input->post('kode_pinjam');
        $cek = $this->db->query("SELECT * FROM barang_aset_pinjam as a, barang_aset as s WHERE a.kode_aset=s.kode_aset and kode_pinjam='$kode_pinjam'")->row();
		$data = array(
			
			'kode_pinjam' => $cek->kode_pinjam,
			'kode_aset' => $cek->kode_aset,
			'nama_pegawai' => $cek->nama_pegawai,
		);
		echo json_encode($data);
	}

	public function simpan_kembali()
	{
        $kode_kembali = $this->input->post('kode_kembali');
      
        $tanggal_balik = $this->input->post('tanggal_balik');
        // $pelanggan = $this->input->post('pelanggan');

        foreach ($this->cart->contents() as $items) {
        	$kode_pinjam = $items['id'];
        	$kode_aset = $items['kode_aset'];
        	$d = array(
        		'kode_kembali' => $kode_kembali,
        		'kode_pinjam' => $kode_pinjam,
        		'kode_aset' => $kode_aset,
        	);
        	$this->db->insert('detail_kembali', $d);
        	//$this->db->query("UPDATE menu SET satuan=satuan-'$qty' WHERE kode_menu='$kode_barang'");
        }

        $data = array(
        	//'nama_pelanggan' => $pelanggan,
            'kode_kembali'=> $kode_kembali,
            'tanggal_balik'=> $tanggal_balik,
        );
        $this->db->insert('barang_aset_kembali', $data);
        $this->cart->destroy();
        redirect('barang_aset_kembali');
	}

	public function simpan_cart()
	{
		
        $data = array(
            'id'    => $this->input->post('kode_pinjam'),
            'kode_aset'   => $this->input->post('kode_aset'),
            'nama_pegawai' => $this->input->post('nama_pegawai'),
            
        );
        $this->cart->insert($data);
        redirect('barang_aset_kembali/tambah_data');
	}

	public function hapus_cart($id)
	{
		
        $data = array(
            'rowid'    => $id,
            'kode_aset'   => 0,
        );
        $this->cart->update($data);
        redirect('barang_aset_kembali/tambah_data');
	}


}