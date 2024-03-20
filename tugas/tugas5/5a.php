<?php
$mahasiswa = [
    [
        "nama" => "Andyka Khaerulana",
        "nrp" => "233040072",
        "email" => "andikakhaerulana21@gmail.com",
        "jurusan" => "Teknik Informatika",
        "gambar" => "photo.jpg",
    ],

    [
        "nama" => "Jojon Sujontor",
        "nrp" => "283040050",
        "email" => "sujontor@gmail.com",
        "jurusan" => "Teknik Ancaman",
        "gambar" => "jojon.jpg",
    ],

    [
        "nama" => "Slamet Kopling",
        "nrp" => "283040067",
        "email" => "slamet@gmail.com",
        "jurusan" => "Teknik Permokelan",
        "gambar" => "slamet.jpg",
    ],
]
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        img {
            width: 100px;
            height: auto;
        }
    </style>
</head>
<body>
    <h1>daftar mahasiswa</h1>
    
    <?php foreach ($mahasiswa as $mhs) : ?>
        <ul>
        <li>
            <img src="img/<?= $mhs["gambar"]; ?>" alt="">
        </li>
        <li>Nama: <?= $mhs["nama"]; ?></li>
        <li>NRP: <?= $mhs["nrp"]; ?></li>
        <li>Email: <?= $mhs["email"]; ?></li>
        <li>Jurusan: <?= $mhs["jurusan"]; ?></li>
    </ul>
    <?php endforeach; ?>
</body>
</html>