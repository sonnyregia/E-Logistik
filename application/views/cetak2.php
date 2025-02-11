<!DOCTYPE html>
<html>
<head>
	<base href="<?php echo base_url() ?>">
	<title>Cetak transaksi</title>
	<link rel="stylesheet" type="text/css" href="assets/bootflat-admin/css/bootstrap.min.css">
</head>
<body >
	<div class="container">
	<center>
		<h4>FORM Pengeluaran</h4>
		<p>BLU Pusat P2H</p>
		<p>Kementerian Lingkungan Hidup dan Kehutanan</p>
	</center>
	<?php 
	$rs = $data->row();
	 ?>
	<div class="row">
		<p><a class="btn btn-info btn-lg" href="<?php echo base_url('barang_keluar/export_excel') ?>">Export ke Excel</a></p>
		<div class="col-md-12">
			<table class="table table-bordered" style="margin-bottom: 10px" >
				<thead>
					<tr>
						<th>No.</th>
						<th>Kode Barang</th>
						<th>Nama Barang</th>
						<th>Tanggal</th>

						<th>Jumlah</th>
						<th>Satuan</th>
						<th>Pegawai</th>
						<th>NIP</th>
						<th>Bidang</th>
						<th>Tanda Tangan</th>						
					</tr>
				</thead>
				<tbody>
					<?php 
					$sql = $this->db->query("SELECT * FROM barang_keluar as a,barang as b, satuan_barang as d where a.id_barang=b.id_barang and a.id_satuan=d.id_satuan order by id_barang_keluar");
					$no = 1;
					foreach ($sql->result() as $row) {
					 ?>
					<tr>
						<td><?php echo $no++; ?></td>
						<td><?php echo $row->kode_barang; ?></td>
						<td><?php echo $row->nama_barang; ?></td>
						<td><?php echo $row->tanggal; ?></td>
						
						<td><?php echo $row->jumlah; ?></td>
						<td><?php echo $row->satuan_barang; ?></td>
						<td><?php echo $row->pegawai; ?></td>
						<td><?php echo $row->nip; ?></td>
						<td><?php echo $row->bidang; ?></td>
					</tr>
					<?php } ?>
					<!-- <tr>
						<td colspan="6">Total</td>
						<td>Rp. <?php echo number_format($rs->total_harga) ?></td>
					</tr> -->
					<!-- <tr>
						<td colspan="6"><b>Diskon Keseluruhan (10%)</b></td>
						<td>
							Rp.
						<?php 
						$diskon = 0;
						if ($rs->total_harga >= 100000) {
							$diskon = 0.1 * $rs->total_harga;
						} else {
							$diskon = 0;
						 
						}
						echo number_format($diskon)

						?>
						</td>
					</tr>
					<tr>
						<td colspan="6"><b>Total Bayar</b></td>
						<td>Rp. <?php echo number_format($rs->total_harga-$diskon) ?></td>
					</tr> -->
				</tbody>
			</table>

			<div style="text-align: right;">
				<p>Jakarta, <?php echo date('d-M-Y') ?></p>
				<br><br><br><br><br>
				<p></p>
			</div>
		</div>
	</div>
</div>


<!-- <script src='assets/jspdf.debug.js'></script>
	<script src='assets/html2pdf.js'></script>
	<script>
		var pdf = new jsPDF('l', 'pt', 'A4');
		var canvas = pdf.canvas;
		var width = 1200;
		//canvas.width=8.5*72;
		document.body.style.width=width + "px";

		html2canvas(document.body, {
		    canvas:canvas,
		    onrendered: function(canvas) {
		        var iframe = document.createElement('iframe');
		        iframe.setAttribute('style', 'position:absolute;top:0;right:0;height:100%; width:100%');
		        document.body.appendChild(iframe);
		        iframe.src = pdf.output('datauristring');

		       //var div = document.createElement('pre');
		       //div.innerText=pdf.output();
		       //document.body.appendChild(div);
		    }
		});
     </script> -->


</body>
</html>