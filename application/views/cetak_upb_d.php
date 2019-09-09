<?php
header("Content-type: application/octet-stream");

header("Content-Disposition: attachment; filename=Laporan-Excel.xls");

?>
<!DOCTYPE html>
<html>
<head>
	<base href="<?php echo base_url() ?>">
	<title>Cetak UPB</title>
	<link rel="stylesheet" type="text/css" href="assets/bootflat-admin/css/bootstrap.min.css">
</head>
<body >
	<div class="container">
	<center>
		<h4>Daftar Barang Ruangan</h4>
	<!-- 	<p>Jl. Kol Abunjani 10. 133 Sipin, Jambi</p>
		<p>Telp. (0741)-612673</p> -->
	</center>
	<?php 
	$rs = $data->row();
	 ?>
	<div class="row">
		<div class="col-md-12">
			<table class="table">
				<tr>
					<th>Nama UPB</th>
					<th>:</th>
					<td>Pusat Pembiayaan Pembangunan Hutan</td>
					<th>Nama Ruangan</th>
					<th>:</th>
					<td><?php echo $rs->nama_ruang; ?></td>
					<!-- <th>Nama Pelanggan</th>
					<th>:</th>
					<td><?php echo $rs->nama_pelanggan; ?></td> -->
				</tr>
				<tr>
					<th>Kode UPB</th>
					<th>:</th>
					<td>029.01.01.447852.000.KP</td>
					<th>Kode Ruangan</th>
					<th>:</th>
					<td><?php echo $rs->kode_ruang; ?></td>
				</tr>
			</table>
		</div>
		<br>
		<div class="col-md-12">
			<table class="table table-bordered" style="margin-bottom: 10px" >
				<thead>
					<tr>
						<th>No.</th>
						<th>Nama Aset</th>
						<th>Merk</th>
						<th>Kode Aset</th>
						<th>NUP</th>
						<th>Tahun Peroleh</th>
						<th>Satuan</th>
						<th>Penguasaan</th>
						
					</tr>
				</thead>
				<tbody>
					<?php 
					$sql = $this->db->query("SELECT * FROM ruang_detail as a,barang_aset as b, barang_aset_sub as s, merk_aset as d, ruang as c, satuan_aset as e where a.id_aset=b.id_aset and a.id_aset_sub=s.id_aset_sub and a.id_merk_aset=d.id_merk_aset and a.id_ruang=c.id_ruang and a.id_satuan_aset=e.id_satuan_aset and c.id_ruang='$rs->id_ruang' ");
					$no = 1;
					foreach ($sql->result() as $row) {
					 ?>
					<tr>
						<td><?php echo $no++; ?></td>
						<td><?php echo $row->nama_aset; ?></td>
						<td><?php echo $row->merk_aset; ?></td>
						<td><?php echo $row->kode_aset; ?></td>
						<td><?php echo $row->seri; ?></td>
						<td><?php echo $row->tahun; ?></td>
						<td><?php echo $row->satuan_aset; ?></td>
						<td><?php echo $row->penguasaan; ?></td>
					</tr>
					<?php } ?>
				</tbody>
			</table>

			<div style="text-align: right;">
				<p>Jakarta, <?php echo date('d F Y') ?></p>
				<br><br><br><br><br>
				<p>Kabag Keum</p>
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