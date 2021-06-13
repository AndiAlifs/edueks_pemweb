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
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="<?php echo base_url('index.php/home/index/' . $cek) ?>">EduEx</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="<?php echo base_url('index.php/home/index/' . $cek) ?>">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="<?php echo base_url('index.php/home/univ/' . $cek) ?>">Universitas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url('index.php/home/jurusan/' . $cek) ?>">Jurusan</a>
                    </li>
                </ul>
                <?php
                if ($cek == 1) { ?>
                    <a class="nav-link" href="<?php echo base_url('index.php/home/profil/1') ?>" class="nav-link">Profil</a>
                    <a class="nav-link" href="<?php echo base_url('index.php/home/index/0') ?>" class="nav-link">Log Out</a>
                <?php } else { ?>
                    <a class="nav-link" href="<?php echo base_url('index.php/home/login') ?>" class="nav-link">Login</a>
                <?php }
                ?>
            </div>
        </div>
    </nav>

    <div class="header text-center m-3">
        <h2 class="display-4">Temukan Universitas Impianmu!</h2>
        <p class="lead">Kumpulan Universitas terbaik untuk wujudkan impian dan masa depanmu!</p>
    </div>

    <div class="bg-primary p-5 d-flex justify-content-around" id="latar-1">
        <div class="row justify-content-between">
            <?php foreach ($universitas as $univ) :
                $penjelasan_singkat = substr($univ->penjelasan, 0, 100);
            ?>  
                <div class="col-sm-12 col-md-6 col-lg-4">
                    <div class="card m-2 list-univ">
                        <img class="card-img-top" src="<?= $univ->link_photo ?>" alt="Card image cap" height="200rem">
                        <div class="card-header">
                            <?= $univ->alamat ?>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title"><?= $univ->nama ?></h5>
                            <p class="card-text"><?= $penjelasan_singkat . "..." ?></p>
                            <form action="<?= base_url('index.php/home/review_univ/' . $cek) ?>" method="post">
                                <input type="hidden" name="univ" value="<?= $univ->id ?>">
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