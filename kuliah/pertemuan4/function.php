<?php 
/*
Nur Ihsan Dwi 
203040025
https://github.com/ihsandwi17/pw2021_203040025
Pertemuan 4 - 25 Februari 2021
Mempelajari Function
*/
?>

<?php 
function salam($waktu = "Datang", $nama = "Admin") {
    return "Selamat $waktu, $nama ";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>

    <title>Latihan Function</title>

</head>
<body>

    <h1><?= salam(); ?></h1>

</body>
</html>