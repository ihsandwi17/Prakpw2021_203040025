<?php
/*
Nur Ihsan Dwi 
203040025
https://github.com/ihsandwi17/pw2021_203040025
Pertemuan 6 - 24 Maret 2021
Mempelajari mengenai sintaks PHP tentang Array Associative
*/
?>

<?php
/*
$mahasiswa = [
    ["Nur Ihsan Dwi ", "203040025", "203040025@mail.unpas.ac.id", "Teknik Informatika"],
    ["Doddy ferdiansyah", "033040001","doddy0@gmail.com", "Teknik Informatika"]
];
*/
// Array Associative
// Definisinya sama seperti array numeric
// key-nya adalah string yang kita buat sendiri
$mahasiswa = [
    [
        "nama" => "Nur Ihsan Dwi", 
        "nrp" => "203040025",
        "email" => "203040025@mail.unpas.ac.id",
        "jurusan" => "Teknik Informatika",
        "gambar" => 'images.png'
    ],
    [
        "nama" => "Doddy Ferdiansyah", 
        "nrp" => "033040001", 
        "email" => "doddy@yahoo.com",
        "jurusan" => "Teknik Informatika"
    ]
];
  
// echo $mahasiswa[1]["email"];
// echo $mahasiswa[1]["jurusan"];
// echo $mahasiswa[1]["tugas"][1];



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>

    <?php foreach( $mahasiswa as $mhs ) : ?>
    <ul>
        <li>
        <img src="img/<?= $mhs["gambar"]; ?>">
        </li>
        <li>Nama : <?= $mhs["nama"]; ?></li>
        <li>NRP :<?= $mhs["nrp"]; ?></li>
        <li>Jurusan :<?= $mhs["jurusan"]; ?></li>
        <li>Email :<?= $mhs["email"]; ?></li>
    </ul>
    <?php endforeach; ?>
        
</body>
</html>