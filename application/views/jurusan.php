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
    #latar-1 {
      border-top-left-radius: 3em;
      border-top-right-radius: 3em;
    }

    .list-univ {
      border-radius: 1em;
      border-style: solid;
      border-color: white;
      border-width: 0.3em;
    }

    .card-img-top {
      border-top-left-radius: 1em;
      border-top-right-radius: 1em;
    }
  </style>
</head>

<body>

  <!-- navbar -->
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
            <a class="nav-link" href="<?php echo base_url('home/univ/' . $cek) ?>">Universitas</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="<?php echo base_url('home/jurusan/' . $cek) ?>">Jurusan</a>
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

  <div class="header text-center m-3">
    <h2 class="display-4">Temukan Jurusan Impianmu!</h2>
    <p class="lead">Kumpulan Jurusan yang sesuai denganmu untuk wujudkan impian dan masa depanmu!</p>
  </div>

  <div class="bg-info p-5 d-flex justify-content-around" id="latar-1">
    <div class="row justify-content-between">
      <?php foreach ($jurusan as $jur) :
        $penjelasan_singkat = substr($jur->penjelasan, 0, 100);
      ?>

        <div class="col-sm-12 col-md-6 col-lg-3 mb-4">
          <div class="card m-2 list-univ">
            <img class="card-img-top" src="https://cdn0-production-images-kly.akamaized.net/nx4rnZVbiOLTZhEy8nFgrGyC7BI=/640x360/smart/filters:quality(75):strip_icc():format(jpeg)/kly-media-production/medias/1328677/original/036603000_1472127823-perkuliahan.jpg" alt="Card image cap" height="200rem">
            <div class="card-body">
              <h5 class="card-title"><?= $jur->nama ?></h5>
              <p class="card-text"><?= $penjelasan_singkat . "..." ?></p>
              <form action="<?= base_url('home/review_jurusan/' . $cek) ?>" method="post">
                <input type="hidden" name="jurusan" value="<?= $jur->id ?>">
                <button class="btn btn-primary" type="submit">Baca lebih lanjut</button>
              </form>
            </div>
          </div>
        </div>

      <?php endforeach; ?>


    </div>



  </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

</html>