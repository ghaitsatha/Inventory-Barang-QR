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
        <h2 style="margin-top:0px">Daftar Penyimpanan</h2>
        <div class="row" style="margin-bottom: 10px">
           <!--  <div class="col-md-4">
                <?php echo anchor(site_url('barang/create'),'Create', 'class="btn btn-primary"'); ?>
            </div> -->
            <!-- <div class="col-md-4 text-center">
                <div style="margin-top: 8px" id="message">
                    <?php echo $this->session->userdata('message') <> '' ? $this->session->userdata('message') : ''; ?>
                </div>
            </div>
            <div class="col-md-1 text-right">
            </div> -->
            <div class="col-md-3 text-right">
                <form action="<?php echo site_url('barang/daftar_simpan'); ?>" class="form-inline" method="get">
                    <div class="input-group">
                        <input type="text" class="form-control" name="q" value="<?php echo $q; ?>">
                        <span class="input-group-btn">
                            <?php 
                                if ($q <> '')
                                {
                                    ?>
                                    <a href="<?php echo site_url('barang'); ?>" class="btn btn-default">Reset</a>
                                    <?php
                                }
                            ?>
                          <button class="btn btn-primary" type="submit">Search</button>
                        </span>
                    </div>
                </form>
            </div>
        </div>
        <table class="table table-bordered" style="margin-bottom: 10px">
            <tr>
        <th>No</th>
		<th>Nama Barang</th>
		<th>Id Lokasi</th>
		<!-- <th>Barcode</th> -->
		<!-- <th>Stok Barang</th> -->
        <th>Qr</th>
		<th>Action</th>
            </tr><?php
            foreach ($barang_data as $barang)
            {
                ?>
                <tr>
			<td width="80px"><?php echo ++$start ?></td>
			<td><?php echo $barang->nama_barang ?></td>
			<td><?php echo $barang->id_lokasi ?></td>
			<!-- <td><?php echo $barang->barcode ?></td> -->
			
             <!-- <td><?php echo $barang->stok ?></td> -->
             <td><img style="width: 5 px height: 5 px;" src="<?php echo base_url().'assets/qr/'.$barang->qr ?>"></td>
			<td style="text-align:center" width="200px">
				<?php 
				echo anchor(site_url('barang/read/'.$barang->id_barang),'Read'); 
				echo ' | '; 
				echo anchor(site_url('barang/update/'.$barang->id_barang),'Update'); 
				echo ' | '; 
				echo anchor(site_url('barang/delete/'.$barang->id_barang),'Delete','onclick="javasciprt: return confirm(\'Are You Sure ?\')"'); 
				?>
			</td>
		</tr>
                <?php
            }
            ?>
        </table>
        <div class="row">
            <div class="col-md-6">
                <a href="#" class="btn btn-primary">Total Record : <?php echo $total_rows ?></a>
	    </div>
            <div class="col-md-6 text-right">
                <?php echo $pagination ?>
            </div>
        </div>
    </body>
</html>