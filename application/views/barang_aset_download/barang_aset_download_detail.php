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
		<table id="example" class="table table-bordered" style="margin-bottom: 10px" >
			<thead>
				<tr>
					<th>No.</th>
					<th>Kode Aset</th>
					<th>NUP</th>
					<th>Nama Aset</th>
					<th>Uraian</th>
					<th>Tahun Peroleh</th>
					<th>Status</th>
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
					<td><?php $grup=$row->grup;
             if($grup==1){
                echo '<span class="label label-success">Tersedia</span>';
             }elseif($grup==2){
                echo '<span class="label label-info">Dilokasi</span>';  
             }
             else{
                echo '<span class="label label-danger">Dipinjamkan</span>';
            }
              ?></td>
					<td>
                        <a href="barang_aset_sub/edit/<?php echo $row->id_aset_sub ?>" class="btn btn-primary btn-sm">update</a>
                    </td>
				</tr>
				<?php } ?>
			</tbody>
		</table>
		<a href="barang_aset_download/index/" class="btn btn-danger btn-sm">Back</a>
	</div>
        <script type="text/javascript">
       $(document).ready(function() {
          $('#example').dataTable( {
              "searching": true
          } );
        } );
</script>