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

 if ($kelas_nasabah == "kelas vip"){
    echo "kartu atm, buku tabungan, akses m-banking , dan prioritas";
 }
elseif ($kelas_nasabah == "kelas 1"){
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

 <?php
 
 for($i = 3; $i <= 60; $i+= 3){
    echo "$i";
    }

 ?>

 <br>

 <?php
 
 $Perusahaan =["Toyota", "Daihatsu", "Honda", "Ford", "Ferari"];
 echo $Perusahaan[4] . "<br>";
 echo $Perusahaan[1] . " dan " . $Perusahaan[2]; 
 
 ?>