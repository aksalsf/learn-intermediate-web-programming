<?php 

	$nilai = array(
		array("Aksal", rand(70, 100), rand(70, 100)),
		array("Adam", rand(70, 100), rand(70, 100)),
		array("Adhani", rand(70, 100), rand(70, 100)),
		array("Adhi", rand(70, 100), rand(70, 100)),
		array("Aldan", rand(70, 100), rand(70, 100)),
		array("Almira", rand(70, 100), rand(70, 100)),
		array("Alwi", rand(70, 100), rand(70, 100)),
		array("Amri", rand(70, 100), rand(70, 100)),
		array("Anggita", rand(70, 100), rand(70, 100)),
		array("Ardellia", rand(70, 100), rand(70, 100)),
	);

	for ($x=0; $x < 10; $x++) { 
		echo "<p> Mahasiswa dengan nama " . $nilai[$x][0] . " mendapatkan nilai UTS " . $nilai[$x][1] . " dan nilai UAS " . $nilai[$x][2] . "</p>";
	}

	

 ?>