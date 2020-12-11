<?php 

	// Cara 1
	$nama = array(
		"Aksal", "Adam", "Adhani", "Adhi", "Aldan", "Almira", "Alwi", "Amri", "Anggita", "Ardellia"
	);

	// Cara 2
	$nim[0] = 4;
	for ($i=1; $i < 10; $i++) { 
		if ($i >= 4) {
			$nim[$i] = $i+1;
		} else {
			$nim[$i] = $i;
		}
	}

	echo $nama[4];
	echo "<br>";
	echo $nim[0];

 ?>