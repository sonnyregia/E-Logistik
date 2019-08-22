<?php
header("Content-type: application/octet-stream");

header("Content-Disposition: attachment; filename=Laporan-Excel.xls");

?>
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
    <div class="col-md-12">
      <table class="table table-bordered" style="margin-bottom: 10px" >
        <thead>
          <tr>
            <th>No.</th>
            <th>Kode Barang</th>
            <th>Nama Barang</th>
            <th>Tanggal</th>
            <th>Jumlah</th>
            <th>Pegawai</th>
            <th>Bidang</th>         
          </tr>
        </thead>
        <tbody>
          <?php 
          $sql = $this->db->query("SELECT * FROM barang_keluar as a,barang as b where a.kode_barang=b.kode_barang");
          $no = 1;
          foreach ($sql->result() as $row) {
           ?>
          <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $row->kode_barang; ?></td>
            <td><?php echo $row->nama_barang; ?></td>
            <td><?php echo $row->tanggal; ?></td>
            <td><?php echo $row->jumlah; ?></td>
            <td><?php echo $row->pegawai; ?></td>
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
