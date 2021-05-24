<?php
require 'functions.php';

$gear = query("SELECT * FROM jamtangan");

?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Document</title>
</head>

<body>

  <h1 style="font-size:70px">Jam tangan</h1>
  <div class="table-responsive">
    <table class="table">
      <tr class="table-primary" style="text-align:center">
        <th>#</th>
        <th>Opsi</th>
        <th>Gambar</th>
        <th>Nama</th>
        <th>Fitur</th>
        <th>Harga</th>
        <th>Type</th>
      </tr>
      <?php $i = 1 ?>
      <?php foreach ($gear as $gr) : ?>
        <tr>
          <td><?= $i; ?></td>
          <td class="table-success" id="tombol">
            <a href=""><button class="ubah">Ubah</button></a>
            <a href=""><button class="hapus">Hapus</button></a>
          </td>
          <td><img src="../assets/img/<?= $gr["gambar"]; ?>"></td>
          <td class="table-success"><?= $gr["nama"]; ?></td>
          <td><?= $gr["deskripsi"]; ?></td>
          <td class="table-success"><?= $gr["harga"]; ?></td>
          <td id="type"><span class="tipe"><?= $gr["tipe"]; ?></span></td>
        </tr>
        <?php $i++; ?>
      <?php endforeach; ?>

    </table>
  </div>

</body>

</html>