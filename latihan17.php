<?php
$mahasiswa = ["joni","123456","sistem informasi","joni@gmail.com"];
?>

<!DOCTYPE html>
<html lang="en">

<head>
<title>Document</title>    
</head>

<body>
<h1> Daftar Mahasiswa </h1>    
<ul>
    <?php foreach ($mahasiswa as $mhs):?>
    <li><?= $mhs; ?></li>
    <?php endforeach; ?>   

</ul>

</body>
    
</html>