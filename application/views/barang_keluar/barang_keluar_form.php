<form action="<?php echo $action; ?>" method="post">
        <div class="form-group">
            <label for="varchar">Nama Barang <?php echo form_error('kode_barang') ?></label>
            <select name="kode_barang" class="form-control">
                <option value="">Nama Barang | Merk | Stock</option>
                <?php 
                                foreach($all_barang as $barang)
                                {
                                    $selected = ($barang['kode_barang'] == $this->input->post('kode_barang')) ? ' selected="selected"' : "";
                                    foreach($all_merk as $merk){
                                        if($barang['merk_barang'] == $merk['merk_barang']){
                                            echo '<option value="'.$barang['kode_barang'].'" '.$selected.'>'.$barang['nama_barang'].' | '.$merk['merk_barang'].' | '.$barang['stok'].'</option>';
                                        }
                                    }
                                } 
                                ?>
            </select>
        </div>
        <div class="form-group">
            <label for="date">Tgl Keluar <?php echo form_error('tanggal') ?></label>
            <input type="date" class="form-control" name="tanggal" id="tanggal" placeholder="Tanggal" value="<?php echo $tanggal; ?>" />
        </div>
        <div class="form-group">
            <label for="int">Jumlah <?php echo form_error('jumlah') ?></label>
            <input type="text" class="form-control" name="jumlah" id="jumlah" placeholder="Jumlah" value="<?php echo $jumlah; ?>" />
        </div>
        <div class="form-group">
            <label for="varchar">Pegawai <?php echo form_error('pegawai') ?></label>
            <input type="text" class="form-control" name="pegawai" id="pegawai" placeholder="Pegawai" value="<?php echo $pegawai; ?>" />
        </div>
        <div class="form-group">
            <label for="varchar">Bidang <?php echo form_error('bidang') ?></label>
            <input type="text" class="form-control" name="bidang" id="bidang" placeholder="Bidang" value="<?php echo $bidang; ?>" />
        </div>
        <input type="hidden" name="id_barang_keluar" value="<?php echo $id_barang_keluar; ?>" /> 
        <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
        <a href="<?php echo site_url('barang_keluar') ?>" class="btn btn-default">Cancel</a>
    </form>