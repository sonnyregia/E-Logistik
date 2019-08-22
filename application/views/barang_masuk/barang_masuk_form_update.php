<form action="<?php echo $action; ?>" method="post">
       <div class="form-group">
            <label for="varchar">Kode Barang <?php echo form_error('kode_barang') ?></label>
            <!-- <input type="text" class="form-control" name="kode_barang" id="kode_barang" placeholder="Kode Barang" value="<?php echo $kode_barang; ?>" /> -->
             <select name="kode_barang" readonly class="form-control">
                <option value="<?php echo $kode_barang ?>"><?php echo $kode_barang ?></option>
                <?php 
                $sql = $this->db->get('barang');
                foreach ($sql->result() as $row) {
                 ?>
                <option value="<?php echo $row->kode_barang ?>"><?php echo $row->nama_barang ?></option>
            <?php } ?>
            </select>
        </div>
        <!--  <div class="form-group">
            <label for="date">Tgl Masuk <?php echo form_error('tanggal') ?></label>
            <input type="date" class="form-control" name="tanggal" id="tanggal" placeholder="Tanggal" value="<?php echo $tanggal; ?>" />
        </div> -->
        <div class="form-group">
            <label for="int">Jumlah <?php echo form_error('jumlah') ?></label>
            <input type="text" class="form-control" name="jumlah" id="jumlah" placeholder="Jumlah" readonly value="<?php echo $jumlah; ?>" />
        </div>
        <div class="form-group">
            <label for="int">Harga <?php echo form_error('harga') ?></label>
            <input type="text" class="form-control" name="harga" id="harga" placeholder="Harga" value="<?php echo $harga; ?>" />
        </div>
        <div class="form-group">
            <label for="varchar">Supplier <?php echo form_error('supplier') ?></label>
            <input type="text" class="form-control" name="supplier" id="supplier" placeholder="Supplier" value="<?php echo $supplier; ?>" />
        </div>
        <input type="hidden" name="id_barang_masuk" value="<?php echo $id_barang_masuk; ?>" /> 
        <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
        <a href="<?php echo site_url('barang_masuk') ?>" class="btn btn-default">Cancel</a>
    </form>