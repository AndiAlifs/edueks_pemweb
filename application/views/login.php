<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body{
            background-color: #E4FFFD;
        }
        .kotak{
            position: center;
            background-color: white;
            text-align: center; 
            width: 435px;
            height: 420px;
            border-radius: 35px;
            position: absolute;
            top:0;
            bottom: 0;
            left: 0;
            right: 0;
            
            margin: auto;
        }
        p{
            font-size: 12px;
        }
        a{
            text-decoration: none;
        }
        input{
            width: 300px;
            height: 25px;
        }
        img{
            width: 50%;
            height: 50%;
        }
    </style>
</head>
<body>
    <div class="kotak">
    <img src="<?php echo base_url('images/logo.png')?>" alt="Eduex">
            <form action="<?php echo base_url('index.php/home/login_process')?>" method="post">
                <input type="hidden" name="cek" value="1">
                <input type="text" name="email" placeholder="Email" style="margin: 10px;" autofocus >
                <br>
                <input type="password" name="password" placeholder="Password" style="margin: 11px;">
                <br>
                <br>
                <button type="submit" style="background-color: #0D7278; color: white; border: 0px; border-radius: 10px; padding: 5px 140px;">Masuk</button>
            </form>
            <br>
            <p>Belum punya akun? Gabung sekarang <a href="<?php echo base_url('index.php/home/register')?>"> D A F T A R </a></p>
       
    </div>
</body>
</html>