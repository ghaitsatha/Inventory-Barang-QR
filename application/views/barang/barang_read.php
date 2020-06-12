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
        <h2 style="margin-top:0px">Barang Read</h2>
        <table class="table">
	    <tr><td>Nama Barang</td><td><?php echo $nama_barang; ?></td></tr>
	    <tr><td>Id Kategori</td><td><?php echo $id_kategori; ?></td></tr>
	    <tr><td>Tgl Masuk</td><td><?php echo $tgl_masuk; ?></td></tr>
	    <tr><td>Pengirim</td><td><?php echo $pengirim; ?></td></tr>
	    <tr><td>Id Lokasi</td><td><?php echo $id_lokasi; ?></td></tr>
	    <!-- <tr><td>Barcode</td><td><?php echo $barcode; ?></td></tr>
	    <tr><td>Qr</td><td><?php echo $qr; ?></td></tr> -->
        <tr><td>Stok Barang</td><td><?php echo $stok; ?></td></tr>
        <tr><td>Satuan</td><td><?php echo $satuan; ?></td></tr>
        <tr><td>Fungsi</td><td><?php echo $fungsi; ?></td></tr>
        <tr><td>Pengambil</td><td><?php echo $pengambil; ?></td></tr>
        <tr><td>Alamat Kirim</td><td><?php echo $kirim; ?></td></tr>
        <tr><td>Qr</td><td><img style="width: 100px" src="<?php echo base_url().'assets/qr/'.$qr; ?>"></td>
        </tr>
        <tr><td>Barcode</td><td><img style="width: 200px" src="<?php echo base_url().'assets/barcode/'.$barcode; ?>"></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('barang') ?>" class="btn btn-default">Cancel</a></td></tr>
	</table>
        </body>
</html>