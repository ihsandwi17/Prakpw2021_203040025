<?php
/*
// Nama : Nur Ihsan Dwi 
// Nrp : 203040025
// Shift : Rabu 9.00 - 10.00
*/
?>

<?php
require 'php/functions.php';
$gear = query("SELECT * FROM JamTangan");
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

   <title>Document</title>

</head>

<body>
    <div class="container">
        <h1>Jam Tangan Name</h1>
        <?php foreach ($gear as $gr) : ?>
            <p class="nama">
            <table class="table">
                <tr>
                    <td class="table-success"><a style="text-decoration:none" href="php/detail.php?id=<?= $gr['id'] ?>"><span><?= $gr["nama"]; ?></span></a></td>
                </tr>
            </table>

            </p>
        <?php endforeach; ?>
    </div>
    </table>
    </div>

</body>

</html>