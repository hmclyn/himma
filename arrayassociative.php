<?php

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
<head>
    <title>Document</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>

    <?php foreach( $mahasiswa as $mhs ) : ?>
        <ul>
            <li>
                <img src="img/<?= $mhs["gambar"]; ?>">
            </li>
        </ul>
        <ul>
        <li>Nama : <?=$mhs["nama"];?></li>
        <li>Nama : <?=$mhs["nrp"];?></li>
        <li>Nama : <?=$mhs["jurusan"];?></li>
        <li>Nama : <?=$mhs["email"];?></li>  
        </ul>
        <?php endforeach; ?>
</body>
</html>