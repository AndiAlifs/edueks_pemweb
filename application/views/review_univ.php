<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Universitas</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
  <style>
    #cover_atas {
      background-image: url("<?= $universitas->link_photo ?>");
      background-position: center;
      background-repeat: no-repeat;
      background-size: cover;
      height: 50vh;
    }

    .review {
      border-left: 0.5em solid green;
    }
  </style>
</head>

<body>
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
            <a class="nav-link" aria-current="page" href="<?php echo base_url('home/index/' . $cek) ?>">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="<?php echo base_url('home/univ/' . $cek) ?>">Universitas</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url('home/jurusan/' . $cek) ?>">Jurusan</a>
          </li>
        </ul>
        <ul class="navbar-nav">
          <?php
            if($cek == 1) { ?>
              <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('index.php/home/profil/1')?>" class="nav-link">Profil</a>
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
  <div class="jumbotron jumbotron-fluid p-4" id="cover_atas">
  <img src="<?= $universitas->logo ?>" class="mx-auto d-block" alt="" width="20%">
  </div>
  <div class="container p-3">
    <h2 class="text-center display-3 mb-4"><?= $universitas->nama ?></h2>
    <div class="p-3 mb-3">
      <h6>Lokasi: <?= $universitas->alamat ?></h6>
      <br>
      <p style="text-align: justify;"><?= $universitas->penjelasan ?></p>
    </div>
    <h3>Review:</h3>
    <?php foreach ($review as $rev) : ?>
      <div class="review p-3" style="background-color: whitesmoke;">
        <ul class="list-inline">
          <li class="list-inline-item">Jurusan: <?= $rev->nama ?></li>
          <li class="list-inline-item">Angkatan: <?= $rev->angkatan ?></li>
        </ul>
        <p class="blockquote font-italic">"<?= $rev->review ?>"</p>
      </div>
    <?php endforeach; ?>
  </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

</html>