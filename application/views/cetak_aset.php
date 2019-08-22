<?php
header("Content-type: application/octet-stream");

header("Content-Disposition: attachment; filename=Laporan-Excel.xls");

?>
<div class="container">
  <center>
    <h4>ASET BMN</h4>
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
            <th>Kode Aset</th>
            <th>Seri Aset</th>
            <th>Nama Aset</th>
            <th>Tanggal input</th>
            <th>Tahun Peroleh</th>         
          </tr>
        </thead>
        <tbody>
          <?php 
          $sql = $this->db->query("SELECT * FROM barang_aset_sub as a,barang_aset as b where a.kode_aset=b.kode_aset and a.kode_aset='$rs->kode_aset' ");
        $no = 1;
          foreach ($sql->result() as $row) {
           ?>
          <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $row->kode_aset; ?></td>
            <td><?php echo $row->seri; ?></td>
            <td><?php echo $row->nama_aset; ?></td>
            <td><?php echo $row->tanggal_input; ?></td>
            <td><?php echo $row->tahun; ?></td>
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
