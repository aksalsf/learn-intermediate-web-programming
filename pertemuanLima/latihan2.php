<?php 

	$nama = array(
		"Adam", "Adhani", "Adhi", "Aksal", "Aldan", "Almira", "Alwi", "Amri", "Anggita", "Ardellia"
	);

	for ($i=0; $i < 10; $i++) { 
		$mahasiswa[$nama[$i]] = $i+1;
	}

	foreach ($mahasiswa as $X => $Y) {
		echo "Mahasiswa dengan nama $X memiliki NIM $Y";
		echo "<br>";
	}

 ?>