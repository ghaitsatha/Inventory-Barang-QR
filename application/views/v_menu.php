<!-- Navigation -->

<nav class="navbar navbar-expand-lg navbar-white bg-white fixed-top">
   <div class="container">     
    <a class="navbar-brand" href="#">
    <img src="<?php echo site_url('assets/aps.png');?>" width="60" height="50" class="d-inline-block align-top" alt="" loading="lazy">
    ANGKASA PURA SUPPORT
  </a>   
  <button class="navbar-toggler" type="button" data-toggle="collapse"
       data-target="#navbarResponsive" aria-controls="navbarResponsive" 
         aria-expanded="false" aria-label="Toggle navigation">   
    <span class="navbar-toggler-icon"></span>     </button>
     <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="nav justify-content-end">
        <li class="nav-item active">
          <a class="nav-link" href="<?php echo site_url('barang/daftar_barang');?>">Daftar Barang
            <span class="sr-only">(current)</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo site_url('barang/daftar_simpan');?>">Daftar Penyimpanan</a>
        </li>
        <!-- <li class="nav-item">
          <a class="nav-link" href="#">Services</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contact</a>
        </li> -->
       </ul>
    </div>
  </div>
</nav>