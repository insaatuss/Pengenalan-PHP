<?php

	// Mendefinisikan Konstanta Phi
	define("PHI", 3.14);

	// Variabel permukaan lingkaran
	$rumus_tetap = 4;
	$jari_jari_lingkaran = 6;
	$tinggi = 5;

	// Menghitung luas permukaan lingkaran
	$luas_Permukaan_Lingkaran = $rumus_tetap * PHI * $jari_jari_lingkaran * $tinggi;

	// Menampilkan luas permukaan lingkaran
	echo "Luas Permukaan Lingkaran: " . $luas_Permukaan_Lingkaran . "m2";

?> 