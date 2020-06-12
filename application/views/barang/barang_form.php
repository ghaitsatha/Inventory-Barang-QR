<!doctype html>
<html>
    <head>
        <title></title>
        <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ?>"/>
        <style>
            body{
                padding: 15px;
            }
        </style>
    </head>
    <body>
        <h2 style="margin-top:0px">Barang <?php echo $button ?></h2>
        <form action="<?php echo $action; ?>" method="post">
	    <div class="form-group">
            <label for="varchar">Nama Barang <?php echo form_error('nama_barang') ?></label>
            <input type="text" class="form-control" name="nama_barang" id="nama_barang" placeholder="Nama Barang" value="<?php echo $nama_barang; ?>" />
        </div>
	    <div class="form-group">
            <label for="int">Id Kategori <?php echo form_error('id_kategori') ?></label>
            <select class="form-control" name="id_kategori" id="id_kategori" placeholder="Id Kategori" value="<?php echo $id_kategori; ?>" />
                <option value="">Pilih Kategori</option>
                <option value="1">Barang Habis Pakai</option>
                <option value="2">Barang Modal</option>
            </select>
        </div>
	    <!-- <div class="form-group">
            <label for="date">Tgl Masuk <?php echo form_error('tgl_masuk') ?></label>
            <input type="text" class="form-control" name="tgl_masuk" id="tgl_masuk" placeholder="Tgl Masuk" value="<?php echo $tgl_masuk; ?>" />
        </div> -->
	    <div class="form-group">
            <label for="varchar">Pengirim <?php echo form_error('pengirim') ?></label>
            <input type="text" class="form-control" name="pengirim" id="pengirim" placeholder="Pengirim" value="<?php echo $pengirim; ?>" />
        </div>
	    <div class="form-group">
            <label for="int">Id Lokasi <?php echo form_error('id_lokasi') ?></label>
            <select class="form-control" name="id_lokasi" id="id_lokasi" placeholder="Id Lokasi" value="<?php echo $id_lokasi; ?>" />
                <option value="">Pilih Lokasi</option>
                <option value="1">Rak A</option>
                <option value="2">Rak B</option>
                <option value="">Rak C</option>
            </select>
        </div>
	    <!-- <div class="form-group">
            <label for="varchar">Barcode <?php echo form_error('barcode') ?></label>
            <input type="text" class="form-control" name="barcode" id="barcode" placeholder="Barcode" value="<?php echo $barcode; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Qr <?php echo form_error('qr') ?></label>
            <input type="text" class="form-control" name="qr" id="qr" placeholder="Qr" value="<?php echo $qr; ?>" />
        </div> -->
        <div class="form-group">
            <label for="int">Stok Barang <?php echo form_error('stok') ?></label>
            <input type="text" class="form-control" name="stok" id="stok" placeholder="Stok Barang" value="<?php echo $stok; ?>" />
        </div>
        <div class="form-group">
            <label for="varchar">Satuan <?php echo form_error('satuan') ?></label>
            <input type="text" class="form-control" name="satuan" id="satuan" placeholder="Satuan" value="<?php echo $satuan; ?>" />
        </div>
        <div class="form-group">
            <label for="varchar">Fungsi <?php echo form_error('fungsi') ?></label>
            <input type="text" class="form-control" name="fungsi" id="fungsi" placeholder="Fungsi Barang" value="<?php echo $fungsi; ?>" />
        </div>
        <div class="form-group">
            <label for="varchar">Pengambil <?php echo form_error('pengambil') ?></label>
            <input type="text" class="form-control" name="pengambil" id="fungsi" placeholder="Pengambil Barang" value="<?php echo $pengambil; ?>" />
        </div>
        <div class="form-group">
            <label for="varchar">Alamat Kirim <?php echo form_error('kirim') ?></label>
            <input type="text" class="form-control" name="kirim" id="kirim" placeholder="Kirim Ke" value="<?php echo $kirim; ?>" />
        </div>
	    <input type="hidden" name="id_barang" value="<?php echo $id_barang; ?>" /> 
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('barang') ?>" class="btn btn-default">Cancel</a>
	</form>
    </body>
</html>