<form action="<?php echo $action; ?>" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="varchar">Kode Barang <?php echo form_error('kode_barang') ?></label>
            <input type="text" class="form-control" name="kode_barang" id="kode_barang" placeholder="Kode Barang" value="<?php echo $kode_barang; ?>" readonly/>
        </div>
        <div class="form-group">
            <label for="varchar">Nama Barang <?php echo form_error('nama_barang') ?></label>
            <input type="text" class="form-control" name="nama_barang" id="nama_barang" placeholder="Nama Barang" value="<?php echo $nama_barang; ?>" />
        </div>
        <div class="form-group">
            <label for="varchar">Satuan Barang </label>
            <select name="satuan_barang" class="form-control">
                <option value="<?php echo $satuan_barang ?>" >Satuan</option>
                <?php
                $sql = $this->db->get('satuan_barang');
                foreach ($sql->result() as $row){
                    ?>
                <option value="<?php echo $row->satuan_barang ?>"><?php echo $row->satuan_barang ?></option>
                <?php } ?>
            </select>
        </div>
        <div class="form-group">
            <label for="varchar">Merk Barang </label>
            <select name="merk_barang" class="form-control">
                <option value="<?php echo $merk_barang ?>">Merk</option>
                <?php 
                $sql = $this->db->get('merk_barang');
                foreach ($sql->result() as $row) {
                 ?>
                <option value="<?php echo $row->merk_barang ?>"><?php echo $row->merk_barang ?></option>
            <?php } ?>
            </select>
        </div>


        <div class="form-group">
            <label for="int">Stok <?php echo form_error('stok') ?></label>
            <input type="text" class="form-control" name="stok" id="stok" placeholder="Stok" value="<?php echo $stok; ?>" />
        </div>
        <input type="hidden" name="id_barang" value="<?php echo $id_barang; ?>" /> 
        <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
        <a href="<?php echo site_url('barang') ?>" class="btn btn-default">Cancel</a>
    </form>