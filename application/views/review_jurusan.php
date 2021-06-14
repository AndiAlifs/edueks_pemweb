<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Review Jurusan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <style>
        #cover_atas {
            background-image: url("http://1.bp.blogspot.com/-JLtcSQ95C-4/VGgOraF5NqI/AAAAAAAAGEY/uIJXwagXTa8/s1600/college-bill.jpg");
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            min-height: 30vh;
            border-bottom: 0.5em solid lightblue;
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
                        <a class="nav-link" aria-current="page" href="<?php echo base_url('index.php/home/index/' . $cek) ?>">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url('index.php/home/univ/' . $cek) ?>">Universitas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="<?php echo base_url('index.php/home/jurusan/' . $cek) ?>">Jurusan</a>
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

    <div class="jumbotron jumbotron-fluid mb-3" id="cover_atas"></div>
    <p class="display-4 text-center">Jurusan <?= $jurusan->nama ?></p>
    <div class="container my-4">
        <h5 class="font-weight-bold">DESKRIPSI</h5>
        <P><?= $jurusan->penjelasan ?></P>
        <br>
        <div class="row">
            <div class="col-sm-12 col-md-6 p-2">
                <h5 class="font-weight-bold">KEAHLIAN DAN KEMAMPUAN</h5>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Cras justo odio</li>
                    <li class="list-group-item">Dapibus ac facilisis in</li>
                    <li class="list-group-item">Morbi leo risus</li>
                    <li class="list-group-item">Porta ac consectetur ac</li>
                    <li class="list-group-item">Vestibulum at eros</li>
                    <li class="list-group-item">Dapibus ac facilisis in</li>
                    <li class="list-group-item">Morbi leo risus</li>
                </ul>
            </div>
            <div class="col-sm-12 col-md-6 p-2">
                <img src="https://latcomm.com/wp-content/uploads/2019/09/7-Benefits-That-Highlight-The-Importance-Of-Soft-Skills-In-The-Workplace.png" class="img-fluid rounded-3" alt="" height="20px">
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-sm-12">
                <h5 class="font-weight-bold">PROSPEK KERJA</h5>
                <div class="d-flex flex-row justify-content-between">
                    <div class="bg-primary text-white p-5 rounded my-2">
                        Lorem Ipsum
                    </div>

                    <div class="bg-primary text-white p-5 rounded my-2">
                        Dolor Sit Amet
                    </div>

                    <div class="bg-primary text-white p-5 rounded my-2">
                        Lorem Ipsum
                    </div>

                    <div class="bg-primary text-white p-5 rounded my-2">
                        Porta ac consectetur ac
                    </div>

                    <div class="bg-primary text-white p-5 rounded my-2">
                        Dapibus ac facilisis in
                    </div>

                </div>
            </div>
        </div>
        <br>
        <h3>Review:</h3>
    <?php foreach ($review as $rev) : ?>
      <div class="review p-3" style="background-color: whitesmoke;">
        <ul class="list-inline">
          <li class="list-inline-item">Jurusan: <?= $rev->nama ?></li>
          <li class="list-inline-item">Angkatan: <?= $rev->angkatan ?></li>
        </ul>
        <p class="blockquote font-italic">"<?= $rev->review ?>"</p>
      </div>
      <hr>
    <?php endforeach; ?>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

</html>