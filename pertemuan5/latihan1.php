<?php 
//array
//variabel yang dapat memiliki banyak nilai
//elemen pada array boleh memiliki tipe data yang berbeda
//pasangan antara key dan value


//membuat array
//cara lama
$hari = array("senin",	"selasa", "rabu");
//cara baru
$bulan = ["januari", "februari", "maret"];
$arr1 = [123, "tulisan", false];

//menampilkan array
// var_dump($hari);
// echo "<br>";
// print_r($bulan);
// echo "<br>";
//menampilkan 1 elemen pada array
// echo $arr1[1]," ",  $bulan[ 2];

//menambahkan array pada array
var_dump($hari);
$hari[]="Kamis";
echo "<br>";
$hari[]="Jum'at";
echo"<br>";
var_dump($hari);

 ?>