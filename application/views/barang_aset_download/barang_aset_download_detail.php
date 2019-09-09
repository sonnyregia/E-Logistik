<?php 
$rs = $data->row();
 ?>
<div class="row">
	<div class="col-md-12">
		<table class="table table-bordered" style="margin-bottom: 10px" >
			<thead>
				<tr>
					<th>No.</th>
					<th>Kode Aset</th>
					<th>NUP</th>
					<th>Nama Aset</th>
					<th>Uraian</th>
					<th>Tahun Peroleh</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				<?php 
				$sql = $this->db->query("SELECT * FROM barang_aset as a,barang_aset_sub as b where a.id_aset=b.id_aset and a.id_aset='$rs->id_aset' ");
				$no = 1;
				foreach ($sql->result() as $row) {
				 ?>
				<tr>
					<td><?php echo $no++; ?></td>
					<td><?php echo $row->kode_aset; ?></td>
					<td><?php echo $row->seri; ?></td>
					
					<td><?php echo $row->nama_aset; ?></td>
					<td><?php echo $row->detail_aset; ?></td>
					<td><?php echo $row->tahun; ?></td>
					<td>
                        <a href="barang_aset_download/update/<?php echo $row->id_aset_sub ?>" class="btn btn-info btn-sm">update</a>
                    </td>
				</tr>
				<?php } ?>
			</tbody>
		</table>
	</div>
</div>