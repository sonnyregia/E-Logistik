<?php
header("Content-type: application/octet-stream");

header("Content-Disposition: attachment; filename=Laporan-Excel.xls");

?>
<?php 
$rs = $data->row();
 ?>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.15/css/jquery.dataTables.min.css" />
<script src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js" type="text/javascript"></script>

 <div class="row">
   <!--  <div class="col-md-4">
        <a href="app/tambah_penjualan" class="btn btn-primary">Tambah Transaksi</a>
        <!-- <a href="app/export_penjualan" target="_blank" class="btn btn-primary">Export</a> -->
    </div>

 	 <div class="col-md-4"></div>
    <div class="col-md-4"></div>
    <div class="col-md-12">
		<table class="table table-bordered" style="margin-bottom: 10px" >
			<thead>
				<tr>
					<th>No Kartu</th>
					<th>Tanggal Pinjam</th>
					<th>Tanggal Kembali</th>
					<th>Nama Pegawai</th>
					<th>Kode Aset</th>
					<th>NUP</th>
					<th>Nama Aset</th>					
				</tr>
			</thead>
			<tbody>
				<?php 
				$sql = $this->db->query("SELECT * FROM barang_aset_kembali as d, barang_aset_pinjam as c, kartu as e,barang_aset as a,barang_aset_sub as b where d.id_aset=a.id_aset and d.id_aset_sub=a.id_aset_sub and d.id_aset_pinjam=c.id_aset_pinjam and d.id_kartu=e.id_kartu and a.id_aset_kembali='$rs->id_aset_kembali' ");
				$no = 1;
				foreach ($sql->result() as $row) {
				 ?>
				<tr>
					<td><?php echo $row->nomor_kartu; ?></td>
					<td><?php echo $row->tanggal_balik; ?></td>
					<td><?php echo $row->tanggal_pinjam; ?></td>
					<td><?php echo $row->nama_pegawai; ?></td>
					<td><?php echo $row->kode_aset; ?></td>
					<td><?php echo $row->seri; ?></td>
					
					<td><?php echo $row->nama_aset; ?></td>
				</tr>
				<?php } ?>
			</tbody>
		</table>
	</div>