<?php 
	// date untuk menampilkan tanggal untik format tertentu


	echo date("l, d-M-y");

	echo "<hr>";

// time
	// unix timestamp /epoch time
	// detik yang sudah berlalu sejak 1 january 1970
	// echo time();
	echo date("l", time()-60*60*24*100);

	echo "<hr>";

	// mktime
	// membuat ssendiri detik
	// mktime(0,0,0,0,0,0,)
	// jam,menit,detik,bulan,tanggal,tahun
	echo date("l", mktime(0,0,0,2,9,1989));

	echo "<hr>";
	// strtotime
	echo date("l", strtotime("25 aug 1989"));



 ?>


<?php 
 <!-- Catatan -->
// String
// -strlen()
// 	untuk menghitung panjang sebuah string
// -strcmp()
// 	untuk menggabungkan kedua buah string
// -explode()
// 	untuk memecah string menjadi array
// -htmlspecialchars()
// 	untuk menjaga dari hacker

//  utility/bnatuan
//  -var_dump()
// 	untuk mencetak varible
//  -isset()
//  	apakah sebuah variable sudah dibuat apa belom: true/false
//  -empty()
//  	apakah variable yang dibuat kosong apa gak

//  -die()
//  	untuk menghentikan baris program
//  	-sleep()
//  		utuk memberhentian sementara biasanya 2 detik
 ?> 		