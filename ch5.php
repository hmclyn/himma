<?php  
$datasiswa = [
    [
        "Nama" => "Joni Susanto",
        "Kelas" => "XII TKR 2",
        "Alamat" => "Pemalang"
    ],
    [
        "Nama" => "Intan Ayu",
        "Kelas" => "XII TB 1",
        "Alamat" => "Brebes"
    ],
    [
        "Nama" => "Salma Karima",
        "Kelas" => "XI RPL 1",
        "Alamat" => "Batang"
    ]
];
$i = 1;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ch 5</title>
</head>
<body>
    <table>
<table border="1" cellpadding="10" cellspacing="0">
    
        <tr>
            <td>No</td>
            <td>Nama</td>
            <td>Kelas</td>
            <td>Alamat</td>
        </tr>

    <?php foreach($datasiswa as $y ) : ?>
        <tr>
                <td><?= $i++ ?></td>
                <td><?= $y ["Nama"]?></td>
                <td><?= $y ["Kelas"]?></td>
                <td><?= $y ["Alamat"]?></td>
        </tr>
    <?php endforeach; ?> 
    </table>
</table> 
</body>
</html> 