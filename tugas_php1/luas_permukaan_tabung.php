<?php

	// Mendefinisikan Konstanta Phi
	define("PHI", 3.14);

	// Variabel permukaan tabung
	$rumus_tetap = 2;
	$jari_jari_tabung = 2;
	$tinggi_tabung = 10;

	// Menghitung luas permukaan tabung
	$luas_Permukaan_Tabung = $rumus_tetap * PHI * $jari_jari_tabung  * ($jari_jari_tabung + $tinggi_tabung);

	// Menampilkan luas permukaan tabung
	echo "Luas Permukaan Tabung: " . $luas_Permukaan_Tabung . "cm2";

?> 