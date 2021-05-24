<?php
require 'functions.php';

$gear = query("SELECT * FROM jamtangan");

?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

 <title>Document</title>
</head>

<body>

<table cellpadding="13" cellspacing="0" border="1">
            <tr>
            <th>No</th>
            <th>Gambar</th>
            <th>Nama</th>
            <th>keterangan</th>
            <th>Harga</th>
            <th>Type</th>
            </tr>

            <?php foreach($pakaian as $row) : ?>
                <tr>
                    <td><?= $row["id"]?></td>
                    <td>
                        <a href=""><button>Ubah</button></a>
                        <a href=""><button>Hapus</button></a>
                    </td>
                    <td><img src="../assets/img/<?= $gr["img"]; ?>"></td>
                    <td><?= $gr["nama"]?></td>
                    <td><?= $gr["Deskripsi"]?></td>
                    <td><?= $gr["harga"]?></td>
                </tr>
            <?php endforeach; ?>
        </table>

</body>

</html>