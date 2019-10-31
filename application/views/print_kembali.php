<?php
header("Content-type: application/octet-stream");

header("Content-Disposition: attachment; filename=Laporan-Excel.xls");

?>
<!DOCTYPE html>
<html>
<head>
	<base href="<?php echo base_url() ?>">
	<title>Cetak Laporan</title>
	<link rel="stylesheet" type="text/css" href="assets/bootflat-admin/css/bootstrap.min.css">
</head>
<body >
	<div class="container">
	<?php 
	$rs = $data->row();
	 ?>
	<div class="row">
		<!-- <p><a class="btn btn-info btn-lg" href="<?php echo base_url('barang_aset_kembali/laporan') ?>" target="_blank">Export ke Excel</a></p> -->
		<div class="col-md-12">
			<table class="table table-bordered" style="margin-bottom: 10px" >
				<thead>
					<tr>
					<th>No</th>
					<th>No Kartu</th>
					<th>Tanggal Pinjam</th>
					<th>Tanggal Kembali</th>
					<th>Nama Pegawai</th>
					<th>Kode Aset</th>
					<th>NUP</th>
					<th>Nama Aset</th>
					<th>Keterangan</th>					
				</tr>
				</thead>
				<tbody>
					<?php 
					$sql = $this->db->query("SELECT * FROM barang_aset_kembali as a,barang_aset as b, barang_aset_pinjam as c, kartu as d, barang_aset_sub as e where a.id_aset=b.id_aset and a.id_aset_pinjam=c.id_aset_pinjam and a.id_kartu=d.id_kartu and a.id_aset_sub=e.id_aset_sub");
					$no = 1;
					foreach ($sql->result() as $row) {
					 ?>
					<tr>
						<td><?php echo $no++; ?></td>
						<td><?php echo $row->nomor_kartu; ?></td>
						<td><?php echo $row->tanggal_pinjam; ?></td>
						<td><?php echo $row->tanggal_balik; ?></td>
						<td><?php echo $row->nama_pegawai; ?></td>
						<td><?php echo $row->kode_aset; ?></td>
						<td><?php echo $row->seri; ?></td>
						<td><?php echo $row->nama_aset; ?></td>
						<td><?php echo $row->keterangan; ?></td>
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