
<div class="row">
	<div class="col-md-12">
		<table class="table table-bordered" style="margin-bottom: 10px" >
			<thead>
				<tr>
					<th>No.</th>
					<th>Kode Pinjam</th>
					<th>Nama Pegawai</th>
					<th>Jabatan</th>
					<th>Kode Aset</th>
					<th>Seri Aset</th>
					<th>Aset Barang</th>
					
					<th>Keterangan Aset</th>
					<!-- <th>Tahun Peroleh</th> -->
				</tr>
			</thead>
			<tbody>
				<?php $i =1; foreach($all_pinjam as $pinjam){	
				 ?>
				<tr>
					<td><?php echo $i; ?></td>
					<td><?php echo $pinjam->kode_pinjam; ?></td>
					<td><?php echo $pinjam->nama_pegawai; ?></td>
					<td><?php echo $pinjam->jabatan; ?></td>
					<td><?php echo $pinjam->kode_aset; ?></td>
					<td><?php echo $pinjam->seri; ?></td>
					<td><?php echo $pinjam->nama_aset; ?></td>
					
					<td><?php echo $pinjam->keterangan; ?></td>
				</tr>
				<?php $i = $i+1; } ?>
			</tbody>
		</table>
	</div>
</div>