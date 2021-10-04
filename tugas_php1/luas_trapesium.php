<?php

	// Mendefinisikan Konstanta setengah
	define("setengah", 1/2);

	// Variabel trapesium
	$jumlah_panjang_sisi_sejajar = (15+6);
	$tinggi = 8;

	// Menghitung luas trapesium
	$luas_Trapesium = setengah * $jumlah_panjang_sisi_sejajar * $tinggi;

	// Menampilkan luas trapesium
	echo "Luas Trapesium: " . $luas_Trapesium . "cm2";

?> 