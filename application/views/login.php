<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <form action="<?php echo base_url('index.php/home/login_process')?>" method="post">
        <input type="hidden" name="cek" value="1">
        <input type="text" name="email" placeholder="Email" style="margin: 10px;">
        <br>
        <input type="password" name="password" placeholder="Password" style="margin: 11px;">
        <br>
        <button type="submit" style="background-color: #53b8d6; color: white; border: 0px; border-radius: 10px; padding: 10px 14px;">Masuk</button>
    </form>
    <h5>Belum punya akun? Gabung sekarang <a href="<?php echo base_url('index.php/home/register')?>">Daftar</a></h5>
</body>
</html>