<?php
//echo "Hello World";
$nama = "Ardh Nur Syah Ramadhan";
$jurusan = "TI 10";
$semester = "02";
$umur = "22";

echo "Nama Saya Adalah: " . $nama;


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2> <?php echo $nama; ?> </h2>
    <p>
        Saya kuliah di jurusan <?= $jurusan; ?>
    </p>
    <p>
        Saat ini saya semester <?= $semester; ?>
    </p>
</body>
</html>