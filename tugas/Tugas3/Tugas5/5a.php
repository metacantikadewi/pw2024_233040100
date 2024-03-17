<?php

$mahasiswa = [
    [
        "nama" => "Meta Cantika Dewi",
        "npm" => "233040100",
        "email" => "metacantika130506@mail.unpas.ac.id",
        "jurusan" => "Teknik Informatika",
        "gambar" => "meta.jpg"
    ],
    [
        "nama" => "Rossa",
        "npm" => "23091078",
        "email" => "rossa13@gmail.com",
        "jurusan" => "Teknik Informatika",
        "gambar" => "rossa.jpg" 
    ],
    [
        "nama" => "Rizky Febrian",
        "npm" => "23250298",
        "email" => "ikyfebrian@gmail.com",
        "jurusan" => "Teknik Industri",
        "gambar" => "rizky.jpg"  
    ],
    [
        "nama" => "Yovie Widianto",
        "npm" => "23210168",
        "email" => "yovie@gmail.com",
        "jurusan" => "Sastra Inggris",
        "gambar" => "yowie.jpg" 
    ],
    [
        "nama" => "Afgansyah Reza",
        "npm" => "23270589",
        "email" => "afgan@gmail.com",
        "jurusan" => "Ilmu Komunikasi",
        "gambar" => "afgan.jpg"  
    ],
    [
        "nama" => "Melitha Sidabutar",
        "npm" => "23080101",
        "email" => "melitha@gmail.com",
        "jurusan" => "Teknologi Pangan",
        "gambar" => "melitha.jpg"   
    ],
    [
        "nama" => "Malini Raharja",
        "npm" => "23040320",
        "email" => "mahaliniraharja@gmail.com",
        "jurusan" => "Seni Musik",
        "gambar" => "mahalini.jpg"
    ],
    [
        "nama" => "Tiara Andini",
        "npm" => "24230901",
        "email" => "Tiaraandini@gmail.com",
        "jurusan" => "DKV",
        "gambar" => "tiara.jpg"
    ],
    [
        "nama" => "Judika Nalom abadi",
        "npm" => "24310878",
        "email" => "judikanalom@gmail.com",
        "jurusan" => "Teknik Informatika",
        "gambar" => "judika.jpg"
    ],
    [
        "nama" => "Juicy luicy",
        "npm" => "24130605",
        "email" => "juicyluicy0@gmail.com",
        "jurusan" => "Teknik Mesin",
        "gambar" => "juicy luicy.jpg"   
    ]
];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa UNPAS</title>
</head>
<body>
    <h1>Daftar Mahasiswa UNPAS</h1>
    <?php foreach($mahasiswa as $m) : ?>
        <ul>
            <li><img src="img/<?= $m["gambar"]; ?>"></li>
            <li>Nama : <?= $m["nama"]; ?></li>
            <li>NPM : <?= $m["npm"]; ?></li>
            <li>Email : <?= $m["email"]; ?></li>
            <li>Jurusan : <?= $m["jurusan"]; ?></li>
        </ul>
        <?php endforeach; ?>
</body>
</html>