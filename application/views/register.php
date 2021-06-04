<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>
    <h5><a href="<?php echo base_url('index.php/home/login')?>">Kembali</a></h5>
    <h2>Registrasi Akun</h2>
    <form action="" method="post">
        <input type="email" name="" id="" placeholder="Email" required>
        <br>
        <input type="text" name="" id="" placeholder="Nama" required>
        <br>
        <input type="password" name="" id="" placeholder="Password" required>
        <br>
        <select name="" id="">
            <option value="Univ">Univ</option>
        </select>
        <br>
        <select name="" id="">
            <option value="Jurusan">Jurusan</option>
        </select>
        <br>
        <input type="number" name="" id="" min="1945" max="2021" placeholder="Angkatan" required>
        <br>
        <input type="text" name="" id="" placeholder="Keminatan">
        <br>
        <button type="submit">Daftar</button>
    </form>
</body>
</html>