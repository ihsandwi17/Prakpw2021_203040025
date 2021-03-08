<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body> 
    <table border="1" cellspacing="0" cellpadding="10">
        <tr>
            <th></th>
            <?php for ($i = 1; $i <= 5; $i++) : ?>
                <th>Kolom <?= $i; ?></th>
            <?php endfor; ?>
        </tr>

        <tr>
            <th> Baris 1</th>
            <?php for ($j = 1; $j <= 5; $j++) : ?>
                <td>Baris <?= $j; ?>, Kolom <?= $j; ?></td>
            <?php endfor; ?>
        </tr>

        <tr>
            <th> Baris 2</th>
            <?php for ($j = 1; $j <= 5; $j++) : ?>
                <td>Baris <?= $j; ?>, Kolom <?= $j; ?></td>
            <?php endfor; ?>
        </tr>

        <tr>
            <th> Baris 3</th>
            <?php for ($j = 1; $j <= 5; $j++) : ?>
                <td>Baris <?= $j; ?>, Kolom <?= $j; ?></td>
            <?php endfor; ?>
        </tr>

        <tr>
            <th> Baris 4</th>
            <?php for ($j = 1; $j <= 5; $j++) : ?>
                <td>Baris <?= $j; ?>, Kolom <?= $j; ?></td>
            <?php endfor; ?>
        </tr>

        <tr>
            <th> Baris 5</th>
            <?php for ($j = 1; $j <= 5; $j++) : ?>
                <td>Baris <?= $j; ?>, Kolom <?= $j; ?></td>
            <?php endfor; ?>
        </tr>


    </table>
</body>
</html>