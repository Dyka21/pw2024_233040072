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
        "nrp" => "283040078",
        "email" => "slamet@gmail.com",
        "jurusan" => "Teknik Mesin",
        "gambar" => "slamet.jpg",
    ],

    [
        "nama" => "Lambang Wicaksono",
        "nrp" => "283040696",
        "email" => "lambang@gmail.com",
        "jurusan" => "Sastra Inggris",
        "gambar" => "lambang.jpg",
    ],

    [
        "nama" => "Wiki Siambutar",
        "nrp" => "283040045",
        "email" => "wiki@gmail.com",
        "jurusan" => "Sastra Sunda",
        "gambar" => "wiki.jpg",
    ],

    [
        "nama" => "Jingin Gilpit",
        "nrp" => "283040009",
        "email" => "jingin@gmail.com",
        "jurusan" => "Ilmu Hukum",
        "gambar" => "jingin.jpg",
    ],

    [
        "nama" => "Ginanjar Pramulya",
        "nrp" => "283040008",
        "email" => "ginanjar@gmail.com",
        "jurusan" => "Teknik Kimia",
        "gambar" => "ginanjar.jpg",
    ],

    [
        "nama" => "Penaldo JR",
        "nrp" => "283040007",
        "email" => "penaldo@gmail.com",
        "jurusan" => "Arsitektur",
        "gambar" => "penaldo.jpg",
    ],

    [
        "nama" => "Pessi",
        "nrp" => "283040006",
        "email" => "pessi@gmail.com",
        "jurusan" => "Sastra Mesin",
        "gambar" => "pessi.jpg",
    ],

    [
        "nama" => "Puan Maharaja",
        "nrp" => "283040005",
        "email" => "puan@gmail.com",
        "jurusan" => "Teknik Industri",
        "gambar" => "puan.png",
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