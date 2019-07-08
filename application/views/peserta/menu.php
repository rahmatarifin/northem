<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="<?php echo base_url('peserta/'); ?>">Northem</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo base_url('peserta/'); ?>">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url(); ?>peserta/uload">Upload Files</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url(); ?>peserta/prop_">Files</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url(); ?>peserta/pengumuman">Pengumuman</a>
      </li>
      <li class="nav-item">
        <a href="<?php echo base_url('peserta/p'); ?>" class="nav-link">Pesan</a>
      </li>
    </ul>
    <ul class="float-right">
      <li class="nav-item dropdown">
        <a href="#" class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <? foreach($account as $ac) { ?>
            <img src="<?php echo base_url();?>tmp/foto/<? echo $ac->id_pes; ?>.png" class="img img-rounded" width="45">
          <? } ?>
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="<?php echo base_url('peserta/akun'); ?>">Akun</a>
          <a class="dropdown-item" href="<?php echo base_url('peserta/ganti-pass'); ?>">Ganti Password</a>
          <a class="dropdown-item" href="<?php echo base_url('log/b'); ?>">Log Out</a>
        </div>
      </li>
    </ul>
  </div>
</nav>