<head>
	<link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ?>"/>
</head>
 <div class="container">
 	<h1 class="text-danger"><b>Barang Sudah Ada!</b></h1>
 	<div class='form-group'>
	    <label for='nmbrg'>Nama Barang</label>
	    <input type='text' id='nmbrg' name='nmbrg' class='form-control' value="<?= $keterangan[0]->nama_barang ?>">
	</div>
	<div class='form-group'>
	    <label for='loc'>Lokasi</label>
	    <input type='text' id='loc' name='loc' class='form-control' value="<?= $keterangan[0]->id_lokasi ?>">
	</div>
	<div class='form-group'>
	    <label for='sender'>Pengirim</label>
	    <input type='text' id='sender' name='sender' class='form-control' value="<?= $keterangan[0]->pengirim ?>">
	</div>
	<div class='form-group'>
	    <label for='qty'>Jumlah</label>
	    <input type='text' id='qty' name='qty' class='form-control' value="<?= $keterangan[0]->stok ?>">
	</div>
	<div class='form-group'>
		<label for='qr'>QR Code</label>
		<img style="width: 50 px;" src="<?php echo base_url().'assets/qr/'.$keterangan[0]->qr ?>">;
	</div>

	<a class="btn btn-primary" href="<?php echo base_url('Barang/create') ?>">Kembali</a>
 </div>