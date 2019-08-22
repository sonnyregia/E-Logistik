
 <div class="row">
<div class="col-md-4">
        <a href="barang_aset_pinjam/tambah_pinjam" class="btn btn-primary">Tambah</a>
        <!-- <a href="app/export_penjualan" target="_blank" class="btn btn-primary">Export</a> -->
    </div>
    <div class="col-md-4"></div>
    <div class="col-md-4"></div><br><br><br>
    <div class="col-md-12">
        <table class="table table-bordered" style="margin-bottom: 10px">
            <tr>
                <th>No</th>
                <th>Kode Pinjam</th>
                <th>Pegawai</th>
        <th>Jabatan</th>
        <th>Aset Barang</th>
        <th>Kode Aset Barang</th>
<!--         <th>Seri Aset Barang</th> -->
        <th>Keterangan</th>
        <th>Action</th>
            </tr>
            <?php 
                $sql = $this->db->query("SELECT * FROM barang_aset_pinjam as a, barang_aset as b where a.kode_aset=b.kode_aset");
                $no = 1;
                foreach ($sql->result() as $row) {
                 ?>
                <tr>
            <td width="80px"><?php echo ++$start ?></td>
            <td><?php echo $row->kode_pinjam ?></td>
            <td><?php echo $row->nama_pegawai ?></td>
            <td><?php echo $row->jabatan ?></td>
            <td><?php echo $row->nama_aset ?></td>
            <td><?php echo $row->kode_aset ?></td>
             <!-- <td><?php echo $row->seri ?></td> -->
            <td><?php echo $row->keterangan ?></td>
            <td style="text-align:center" width="200px">
                <a href="barang_aset_pinjam/detail/<?php echo $row->kode_aset ?>" class="btn btn-info btn-sm">detail</a>
            </td>
        </tr>
                <?php
            }
            ?>
        </table>
        </div>
</div>