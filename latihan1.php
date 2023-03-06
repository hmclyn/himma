<?php
$jam_kerja = "";

if($jam_kerja>8) {
    echo "Mendapat gaji lembur";
}
else{
    echo "Tidak mendapat gaji lembur";
}

?>
<br>
<?php

$kelas_nasabah = "kelas 2";

 if ($kelas_nasabah = "kelas vip"){
    echo "kartu atm, buku tabungan, akses m-banking , dan prioritas";
 }
else if ($kelas_nasabah = "kelas 1"){
    echo "kartu atm, akses m-banking, buku tabungan";
}
else {
    echo "kartu atm, buku tabungan";
}
 

?>
<br>
<?php

for($i = 21; $i <= 30; $i++ ){
echo "$i";
}
?>

<br> 