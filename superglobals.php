<?php

// $_GET
$mahasiswa = [
    [
       "nama" => "Faiqotul Himmah",
       "nrp" => "098765432",
       "email" => "himmah@unpas.ac.id",
       "jurusan" => "teknik informatika",
       "gambar" => "voto.png"
    ],
    [
       "nama" => "mahessa",
       "nrp" => "234567890",
       "email" => "mahessa@unpas.ac.id",
       "jurusan" => "teknik informatika",
       "gambar" => "vv.png" 
    ]  
   ];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <?php foreach ( $mahasiswa as $mhs ): ?>
        <ul>
            <a href="lat2.php?nama=<?= $mhs["nama"]; ?>&nrp=<?=$mhs["nrp"]; ?>&email=<?= $mhs["email"]; ?>&jurusan=<?= $mhs["jurusan"]; ?>&gambar=<?= $mhs["gambar"]; ?>"><?= $mhs["nama"]; ?></a>
        </ul> 
    <?php endforeach; ?>
</body>
</html>