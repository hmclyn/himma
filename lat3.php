<?php

$mahasiswa = [
    ["Faiqotul himmah", "098765432", "Teknik Informatika", "hmclyn@unpas.ac.id"],
    ["Lukman Mahessa", "987654021", "Teknik Informatika", "mahessa@unpas.ac.id"],
    ["Arsyad", "876549032", "Teknik Informatika", "arsyad@unpas.ac.id"]
]

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>
<body>

<h1>Daftar Mahasiswa</h1>

<?php foreach( $mahasiswa as $mhs) : ?> 
<ul>
    <li>Nama : <?= $mhs[0]; ?></li>
    <li>NRP : <?= $mhs[1]; ?></li>
    <li>Jurusan : <?= $mhs[2]; ?></li>
    <li>Email : <?= $mhs[3]; ?></li>
</ul>
<?php endforeach; ?>
    
</body>
</html>
