<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">

      <a class="navbar-brand" href="<?php echo base_url('home/index/' . $cek) ?>">
        <img src="<?php echo $this->config->item('base_url'); ?>images/logo1.png" alt="" width="100" height="100" class="d-inline-block align-text-middle">
        EduEx
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarText">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="<?php echo base_url('home/index/' . $cek) ?>">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url('home/univ/' . $cek) ?>">Universitas</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url('home/jurusan/' . $cek) ?>">Jurusan</a>
          </li>
        </ul>
        <?php
        if ($cek == 1) { ?>
          <a class="nav-link" href="<?php echo base_url('home/profil/1') ?>">Profil</a>
          <a class="nav-link" href="<?php echo base_url('home/index/0') ?>">Log Out</a>
        <?php } else { ?>
          <a class="nav-link" href="<?php echo base_url('home/login') ?>">Login</a>
        <?php }
        ?>
      </div>
    </div>
  </nav>
  <div class="text-center container">
    <img src="<?php echo base_url('images/logo.png') ?>" class="img-fluid rounded" alt="Logo Eduex" width="300" height="300">
    <div class="container m-3">
      <h2>Selamat Datang di UniEx</h2>
      <h6>UniEx adalah tempat untuk memberi ulasan dan juga membaca ulasan dari mahasiswa untuk universitas dan jurusan yang ada di Indonesia!</h6>
    </div>
    <div class="container m-3">
      <?php
        if ($cek == 1) { ?>
          <h3>Langsung cek profil mu dan tambahkan review mu!</h3>
          <a href="<?php echo base_url('home/profil/1') ?>">
          <button class="btn btn-primary" type="button">PROFIL</button>
        </a>
        <?php } else { ?>
          <h3>Belum login? Atau belum punya akun?? Langsung klik di bawah ini!</h3>
          <a href="<?php echo base_url('home/login') ?>">
          <button class="btn btn-primary" type="button">LOGIN</button>
        </a>
        <?php } 
        ?>
  </div>
  <div class="container m-3">
    <h3>Cek ulasan-ulasan universitas yang kamu inginkan!</h3>
    <a href="<?php echo base_url('home/univ/' . $cek) ?>">
      <button class="btn btn-primary" type="button">LIST UNIVERSITAS</button>
    </a>
  </div>
  <div class="container m-3">
    <h3>Cek ulasan-ulasan jurusan yang kamu inginkan!</h3>
    <a href="<?php echo base_url('home/jurusan/' . $cek) ?>">
      <button class="btn btn-primary" type="button">LIST JURUSAN</button>
    </a>
  </div>
</div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

</html>