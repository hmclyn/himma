<?php
echo date("l, d-M-Y");

?>
<?php
// date
// untuk menampilkan tanggal dengan format tertentu

echo time();
?>
<?php
// mktime
// mmembuat sendiri detik
// mktime (0,0,0,0,0,0)
// jam, mrnit, detik, bulan, tanggal,tahun
echo date("l", mktime (0,0,0,7,3,2006 ));

//strtotime
echo date("l", strtotime("25 aug 1985"));
?> 