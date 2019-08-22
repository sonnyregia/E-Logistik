<?php 
$rs = $data->row();
 ?>
<div class="row">
	<div class="col-md-12">
		<table class="table table-bordered" style="margin-bottom: 10px" >
			<thead>
				<tr>
					<th>Nomor Kartu</th>
					<th>Kode Aset</th>
					<th>Seri</th>
					<th>Nama Aset</th>
					<th>Satuan Aset</th>
					<th>Tahun Peroleh</th>
					<th>Pegawai</th>
				</tr>
			</thead>
			<tbody>
				<?php 
				$sql = $this->db->query("SELECT * FROM barang_aset_pinjam as a, barang_aset as b,barang_aset_sub as s, satuan_aset as t where a.kode_aset=b.kode_aset and b.nama_aset=s.nama_aset and a.seri=s.seri and s.satuan_aset=.t.satuan_aset and a.id_aset_pinjam='$rs->id_aset_pinjam' ");
				
				foreach ($sql->result() as $row) {
				 ?>
				<tr>
					<td><?php echo $row->kartu_p; ?></td>
					<td><?php echo $row->kode_aset; ?></td>
					<td><?php echo $row->seri; ?></td>					
					<td><?php echo $row->nama_aset; ?></td>
					<td><?php echo $row->satuan_aset; ?></td>
					<td><?php echo $row->tahun; ?></td>
					<td><?php echo $row->nama_pegawai; ?></td>
				</tr>
				<?php } ?>
			</tbody>
		</table>
	</div>
</div>