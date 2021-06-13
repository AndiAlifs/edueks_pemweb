<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Pengguna</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous"><link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>
<body style="background-color: #C3F0E5;">
<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #2fdf59;">
  <div class="container-fluid">
      <a class="navbar-brand" href="<?php echo base_url('home/index/' . $cek) ?>">
        <img src="<?php echo $this->config->item('base_url'); ?>images/logo1.png" alt="" width="30" height="24" class="d-inline-block align-text-middle">
        EduEx
      </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarText">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="<?php echo base_url('index.php/home/index/' . $cek)?>">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url('index.php/home/univ/' . $cek)?>">Universitas</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('index.php/home/jurusan/' . $cek)?>">Jurusan</a>
        </li>
      </ul>
      <ul class="navbar-nav">
      <?php
        if($cek == 1) { ?>
          <li class="nav-item">
          <a class="nav-link active" href="<?php echo base_url('index.php/home/profil/1')?>" class="nav-link">Profil</a>
          </li>
          <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url('index.php/home/index/0')?>" class="nav-link">Log Out</a>
          </li>
        <?php } else { ?>
          <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url('index.php/home/login')?>" class="nav-link">Login</a>
          </li>
        <?php }
      ?>
      </ul>
    </div>
  </div>
</nav>
  <div class="container p-3" style="background-color: #DCFFFF;">
    <a href="<?php echo base_url('index.php/home/profil/1')?>" class="">
      <img src="<?php echo $this->config->item('base_url'); ?>images/back.svg" alt="" width="35" height="35">
    </a>
    <?php if(isset($univ) || isset($jurusan)) {
      ?> <h3 class="m-3">Mengubah Review:</h3>
    <?php } else { ?>
    <h3 class="m-3">Membuat Review:</h3>
    <?php } ?>
    <form action="<?php echo base_url("index.php/home/review_process")?>" method="post">
      <?php if(isset($univ) || isset($jurusan)) {
        ?> <input type="hidden" name="bentuk" value="ubah">
      <?php } else { ?>
        <input type="hidden" name="bentuk" value="tambah">
      <?php } ?>
      <input type="hidden" name="jenis" value="<?= $_POST['review']; ?>">
      <textarea placeholder="Silahkan isi review kamu sesuai dari pengalaman kamu selengkap-lengkapnya" class="m-3" name="review" id="" cols="100" rows="15"><?php if(isset($univ) && $_POST['review'] == "univ") echo $univ[0]->review; elseif(isset($jurusan) && $_POST['review'] == "jurusan") echo $jurusan[0]->review; else ""?></textarea>
      <br>
      <button type="submit" class="btn btn-success m-3 btn-lg">KIRIM</button>
    </form>
  </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</html>