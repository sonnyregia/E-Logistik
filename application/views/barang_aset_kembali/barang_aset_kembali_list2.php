<div class="row">
	<div class="col-md-4">
		<a href="barang_aset_kembali/tambah_data" class="btn btn-primary">Tambah Data</a>
		<!-- <a href="app/export_penjualan" target="_blank" class="btn btn-primary">Export</a> -->
	</div>
	<div class="col-md-4"></div>
	<div class="col-md-4"></div><br><br><br>
	<div class="col-md-12">
		<table class="table table-bordered" style="margin-bottom: 10px" id="example">
			<thead>
				<tr>
					<th>No.</th>
					<th>Kode Kembali</th>
					<th>Tanggal Kembali</th>
					<th>Kode Pinjam</th>
					<th>Pilihan</th>
				</tr>
			</thead>
			<tbody>
				<?php 
				$sql = $this->db->query("SELECT * FROM barang_aset_kembali order by id_aset_kembali asc");
				$no = 1;
				foreach ($sql->result() as $row) {
				 ?>
				<tr>
					<td><?php echo $no++; ?></td>
					<td><?php echo $row->kode_kembali; ?></td>
					
					<td><?php echo $row->tanggal_balik; ?></td>
					<td><?php echo $row->kode_pinjam; ?></td>
					<td>
						<a href="barang_aset_kembali/detail/<?php echo $row->kode_pinjam ?>" class="btn btn-info btn-sm">detail</a>
						<a href="barang_aset_kembali/hapus_data/<?php echo $row->kode_pinjam ?>" class="btn btn-danger btn-sm" onclick="javasciprt: return confirm('Are You Sure ?')">hapus</a>
						<a href="app/cetak_penjualan/<?php echo $row->kode_transaksi ?>" target="_blank" class="btn btn-success btn-sm">cetak</a>
					</td>
				</tr>
				<?php } ?>
			</tbody>
		</table>
	</div>
</div>