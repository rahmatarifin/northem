<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="<?php echo base_url('index.php/adm/'); ?>">Northem</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('index.php/adm/'); ?>">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('index.php/adm/hasil/');?>">Hasil</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Data Master
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="<?php echo base_url('index.php/adm/peserta/');?>">Peserta</a>
          <a class="dropdown-item" href="<?php echo base_url('index.php/adm/penguji/');?>">Penguji</a>
          <a class="dropdown-item" href="<?php echo base_url('index.php/adm/admin/');?>">Admin</a>
        </div>
      </li>
    </ul>
    <ul class="nav justify-content-end">
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="" id="navbarDropdown" role='button' data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <img class="img img-rounded" src="<?php echo base_url(); ?>tmp/foto/<? ?>">
        </a>
        <div class="dropdown-menu">
          <a href="" class="dropdown-item">Akun</a>
          <a href="" class="dropdown-item">Ganti Password</a>
          <a href="" class="dropdown-item">Log Out</a>
        </div>
      </li>
    </ul>
  </div>
</nav>