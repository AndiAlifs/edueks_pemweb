<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Pengguna</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous"><link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="<?php echo base_url('index.php/home/index/' . $cek)?>">EduEx</a>
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
      <?php
        if($cek == 1) { ?>
          <a class="nav-link active" href="<?php echo base_url('index.php/home/profil/1')?>" class="nav-link">Profil</a>
          <a class="nav-link" href="<?php echo base_url('index.php/home/index/0')?>" class="nav-link">Log Out</a>
        <?php } else { ?>
          <a class="nav-link" href="<?php echo base_url('index.php/home/login')?>" class="nav-link">Login</a>
        <?php }
      ?>
    </div>
  </div>
</nav>
<h1>Profil Pengguna</h1>
<h5>Nama: <?= $profil->pnama?></h5>
<h5>Email: <?= $profil->email?></h5>
<h5>Universitas: <?= $profil->unama?></h5>
<h5>Jurusan: <?= $profil->jnama?></h5>
<h5>Angkatan: <?= $profil->angkatan?></h5>
<h5>Keminatan: <?= $profil->keminatan?></h5>
<br>
<h4>Ulasan:</h4>
<h5>Universitas</h5>
<?php if(!isset($univ[0])) { ?>
  <form action="<?= base_url('index.php/home/review/1')?>" method="post">
    <input type="hidden" name="review" value="univ">
    <button type="submit">Membuat Review</button>
  </form>
<?php } else { ?>
  <form action="<?= base_url('index.php/home/review_update/1')?>" method="post">
    <input type="hidden" name="review" value="univ">
    <button type="submit">Mengubah Review</button>
  </form>
  <form action="<?= base_url('index.php/home/review_delete/')?>" method="post">
    <input type="hidden" name="review" value="univ">
    <button type="submit">Menghapus Review</button>
  </form>
<?php } ?>
<h5>Jurusan</h5>
<?php if(!isset($jurusan[0])) { ?>
  <form action="<?= base_url('index.php/home/review/1')?>" method="post">
    <input type="hidden" name="review" value="jurusan">
    <button type="submit">Membuat Review</button>
  </form>
<?php } else { ?>
  <form action="<?= base_url('index.php/home/review_update/1')?>" method="post">
    <input type="hidden" name="review" value="jurusan">
    <button type="submit">Mengubah Review</button>
  </form>
  <form action="<?= base_url('index.php/home/review_delete/')?>" method="post">
    <input type="hidden" name="review" value="jurusan">
    <button type="submit">Menghapus Review</button>
  </form>
<?php } ?>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</html>