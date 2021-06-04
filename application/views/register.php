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
    <form action="<?php echo base_url('index.php/home/register_process')?>" method="post">
        <input type="email" name="email" id="" placeholder="Email" required>
        <br>
        <input type="text" name="nama" id="" placeholder="Nama" required>
        <br>
        <input type="password" name="password" id="" placeholder="Password" required>
        <br>
        <label for="universitas">Universitas</label>
        <select name="universitas" id="" required>
            <?php foreach ($nama_univ as $univ) : ?>    
            <option value="<?= $univ->id; ?>"><?= $univ->nama; ?> </option>
            <?php endforeach; ?>
        </select>
        <br>
        <label for="jurusan">Jurusan</label>
        <select name="jurusan" id="" required>
            <?php foreach ($nama_jurusan as $jurusan) : ?>    
            <option value="<?= $jurusan->id; ?>"><?= $jurusan->nama; ?> </option>
            <?php endforeach; ?>
        </select>
        <br>
        <input type="number" name="angkatan" id="" min="1945" max="2021" placeholder="Angkatan" required>
        <br>
        <input type="text" name="keminatan" id="" placeholder="Keminatan"> <label for="keminatan">Kosongi jika tidak ada</label>
        <br>
        <button type="submit">Daftar</button>
    </form>
</body>
</html>