<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar list dengan PHP</title>
</head>
<body>
    <h2>Daftar list dengan PHP</h2>
<ol>
    <?php
        for ($i=1; $i<=1000; $i++) {
            echo "<li>Nama siswa ke-$i</li>";
        }
    ?>
</body>
</html>