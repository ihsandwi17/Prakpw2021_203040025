<?php 
/*
// Nama : Nur Ihsan Dwi 
// Nrp : 203040025
// Shift : Rabu 9.00 - 10.00
*/
?>

<?php
$conn = mysqli_connect("localhost", "root", "");
mysqli_select_db($conn, "pw_tubes_203040025");
$result = mysqli_query($conn,"SELECT * FROM Jamtangan");
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    
<h1 style="font-size:70px">Jam Tangan</h1>
<div class="table-responsive">
    <table class="table">
        <tr class="table-primary" style="text-align:center">
            <th>No</th>
            <th>Gambar</th>
            <th>Nama</th>
            <th>Fitur</th>
            <th>Harga</th>
            <th>Type</th>
        </tr>
        <?php $i = 1 ?>
        <?php while ($gr = mysqli_fetch_assoc($result)) : ?>
            <tr>
                <td class="table-success"><?= $i; ?></td>
                <td><img src="img/<?= $gr["gambar"]; ?>"></td>
                <td class="table-success"><?= $gr["nama"]; ?></td>
                <td><?= $gr["deskripsi"]; ?></td>
                <td class="table-success"><?= $gr["harga"]; ?></td>
                <td id="type"><span><?= $gr["type"]; ?></span></td>
            </tr>
        <?php $i++; ?>
        <?php endwhile; ?>

    </table>
</div>


</body>
</html>