<?php 
$rs = $data->row();
 ?>
<div class="row">
	<div class="col-md-12">
		<table class="table table-bordered" style="margin-bottom: 10px" >
			<thead>
				<tr>
					<th>Kode Kembali</th>
					<th>Kode Pinjam</th>
					<th>Kode Aset Barang</th>
					<th>Seri Aset</th>
					<th>Nama Aset</th>
					<th>Nama Pegawai</th>
					<th>Jabatan</th>
					<th>Keterangan</th>
				</tr>
			</thead>
			<tbody>
				<?php 
				$sql = $this->db->query("SELECT * FROM barang_aset_kembali as a,barang_aset_pinjam as b, barang_aset as s ,barang_aset_sub as t where a.kode_pinjam=b.kode_pinjam and b.kode_aset=s.kode_aset and s.nama_aset=t.nama_aset and a.seri=t.seri and a.id_aset_kembali='$rs->id_aset_kembali' ");
				foreach ($sql->result() as $row) {
				 ?>
				<tr>
					<td><?php echo $row->kode_kembali; ?></td>
					<td><?php echo $row->kode_pinjam; ?></td>
					<td><?php echo $row->kode_aset; ?></td>
					<td><?php echo $row->seri; ?></td>
					<td><?php echo $row->nama_aset; ?></td>
					<td><?php echo $row->nama_pegawai; ?></td>
					<td><?php echo $row->jabatan; ?></td>
					<td><?php echo $row->keterangan; ?></td>
				</tr>
				<?php } ?>
			</tbody>
		</table>
	</div>
</div>