<?php 
	//date untuk menampilkan tanggal dengan format tertentu
	// echo date("l, d-M-Y");


	//time
	//UNIX timestamp / EPOCH
	// echo time();

	//mengecek 100 hari kedepan
	// echo date("d - M - Y", time()+60*60*24*100);

	//mktime
	//membuat sendiri detik
	//mktime(0,0,0,0,0,0)
	//jam, menit, detik, bulan, tanggal, tahun
	// echo date("l", mktime(0,0,0,10,20,1998));

	//strtotime
	echo date("l", strtotime("20 oct 1998"));
 ?>