<?php
session_start();
if (!isset($_SESSION["username"])) {
  header("Location: login.php");
  exit;
}

require 'functions.php';

$id = $_GET['id'];

$gr = query("SELECT * FROM jamtangan WHERE id = $id")[0];

if (isset($_POST['ubah'])) {
  if (ubah($_POST) > 0) {
    echo "<script>
                alert('Data Berhasil diubah!');
                document.location.href = 'admin.php';
          </script>";
  } else {
    echo "<script>
                alert('Data Gagal diubah!');
                document.location.href = 'admin.php';
          </script>";
  }
}
?>

<link rel="stylesheet" href="../css/ubah.css">
<h3>Form Ubah Data jamtangan</h3>
<form action="" method="POST">
  <div class="container">
    <ul>
      <input type="hidden" name="id" id="id" value="<?= $gr['id']; ?>">
      <li>
        <label for="gambar">Gambar </label><br>
        <input type="text" name="gambar" id="gambar" required value="<?= $gr['gambar']; ?>"><br><br>
      </li>
      <li>
        <label for="nama">Nama </label><br>
        <input type="text" name="nama" id="nama" required value="<?= $gr['nama']; ?>"><br><br>
      </li>
      <li>
        <label for="deskripsi">Deskripsi </label><br>
        <input type="text" name="deskripsi" id="deskripsi" required value="<?= $gr['deskripsi']; ?>"><br><br>
      </li>
      <li>
        <label for="harga">Harga </label><br>
        <input type="text" name="harga" id="harga" required value="<?= $gr['harga']; ?>"><br><br>
      </li>
      <li>
        <label for="tipe">Type </label><br>
        <select name="tipe" id="tipe" required value="<?= $gr['tipe']; ?>">
        <option value="">-----Type Jamtangan-----</option>
          <option value="JamTanganpria">pria</option>
          <option value="Jam tangan wanita">wanita</option>
          <option value="Jamtangan">alltype</option>
        </select>
      </li>
      <br>
      <button type="submit" name="ubah" onclick="return confirm('Benar ingin Mengubah Data')">Ubah Data!</button>
      <button type="submit">
        <a href="../index.php" style="text-decoration: none; color: #f27b50; font-weight: 600;">Kembali</a>
      </button>
    </ul>
  </div>
</form>