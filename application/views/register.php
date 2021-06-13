<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous"><link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <style>
        body{
            background-color: #E4FFFD;
        }
        .container{
            position: center;
            background-color: white;
            width: 592px;
            height: 390px;
            border-radius: 35px;
            position: absolute;
            top:0;
            bottom: 0;
            left: 0;
            right: 0;
            margin: auto;
        }
        .row{
            margin-top: 30px;
        }
        h2{
            text-align:left;
            margin-left: 20px;    
        }
        p{
            margin-top: 10px;
        }
        button{
            width: 300px;
            text-align: center;
            background-color: #0D7278; 
            color: white; 
            border: 0px; 
            border-radius: 10px; 
            padding: 5px 140px;
        }
        a{
            text-decoration: none;
        }
    </style>
</head>
<body>
    <div class="container">    
        <h2>Registrasi Akun</h2>
        <div class="row">
            <div class="col-sm-6">
                <form action="<?php echo base_url('index.php/home/register_process')?>" method="post">
                    <input type="email" name="email" id="" placeholder="Email" required>
                    <br>
                    <br>
                    <input type="text" name="nama" id="" placeholder="Nama" required>
                    <br>
                    <br>
                    <input type="password" name="password" id="" placeholder="Password" required>
                    <br>
                    <br>
                    <label for="universitas">Universitas: </label>
                    <select name="universitas" id="" required>
                        <?php foreach ($nama_univ as $univ) : ?>    
                        <option value="<?= $univ->id; ?>"><?= $univ->nama; ?> </option>
                        <?php endforeach; ?>
                    </select>
                    <br>
                    <br>
            </div>
            <div class="col-sm-6">
                <label for="jurusan">Jurusan: </label>
                    <select name="jurusan" id="" required>
                        <?php foreach ($nama_jurusan as $jurusan) : ?>    
                        <option value="<?= $jurusan->id; ?>"><?= $jurusan->nama; ?> </option>
                        <?php endforeach; ?>
                    </select>
                    <br>
                    <br>
                    <input type="number" name="angkatan" id="" min="1945" max="2021" placeholder="Angkatan" required>
                    <br>
                    <br>
                    <input type="text" name="keminatan" id="" placeholder="Keminatan"> <label for="keminatan" style="font-size:10px">*kosongi jika tidak ada</label>
                    <br>
                </form>
            </div>    
            <br>   
        </div>
        <div class="col text-center">
            <button type="submit" class="btn-lg">Daftar</button>        
        </div>
        <p style="text-align: center;">Sudah mempunyai akun? <a href="<?php echo base_url('index.php/home/login') ?>">Login </a></p>                    
    </div>
</body>
</html>