<?php
$mahasiswa = ["Joni", "123456", "Sistem Informasi", "jon1@gmail.com"];
?>

<!DOCTYPE html>
<html lang="en">

<head>
     <title>Document</title>
</head>

<body>
    <hl>Daftar Mahasiswa</hl>
    <ul>
        <?php foreach ($mahasiswa as $mhs): ?>
          <li><?= $mhs; ?></li> 
        <?php endforeach; ?>

</ul>

</body>

</html>
