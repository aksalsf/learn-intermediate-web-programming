<!DOCTYPE html>
<html>

<head>
	<title>UTS Praktikum Pemrograman Web</title>
	<link rel="stylesheet" href="../css/bootstrap.css">
	<style type="text/css">
		body {
			font-size: 16pt;
			font-family: cursive;
			background-color: pink;
		}
	</style>
</head>

<body>
	<a href="../index.php" class="float-right btn btn-outline-danger">Kembali ke Beranda</a>
	<?php
	$nilai = array(
		array("Adi", 7, 8, 6, 6, 7),
		array("Bunga", 8, 9, 9, 8, 7),
		array("Candra", 8, 8, 9, 9, 8),
		array("Dita", 6, 8, 8, 6, 8),
		array("Edgar", 5, 6, 5, 6, 6)
	);

	echo "<h3>List Nama dan Hasil UTS Mata Pelajaran</h3>";
	echo "Nama:   " . $nilai[0 ][0] . "<br>Matematika: " . $nilai[0][1] . " | BIN: " . $nilai[0][2] . " | BIG: " . $nilai[0][3] . " | IPA: " . $nilai[0][4] . " | IPS: " . $nilai[0][5] . "<br>";
	echo "<hr>";
	echo "Nama:   " . $nilai[1][0] . "<br>Matematika: " . $nilai[1][1] . " | BIN: " . $nilai[1][2] . " | BIG: " . $nilai[1][3] . " | IPA: " . $nilai[1][4] . " | IPS: " . $nilai[1][5] . "<br>";
	echo "<hr>";
	echo "Nama:   " . $nilai[2][0] . "<br>Matematika: " . $nilai[2][1] . " | BIN: " . $nilai[2][2] . " | BIG: " . $nilai[2][3] . " | IPA: " . $nilai[2][4] . " | IPS: " . $nilai[2][5] . "<br>";
	echo "<hr>";
	echo "Nama:   " . $nilai[3][0] . "<br>Matematika: " . $nilai[3][1] . " | BIN: " . $nilai[3][2] . " | BIG: " . $nilai[3][3] . " | IPA: " . $nilai[3][4] . " | IPS: " . $nilai[3][5] . "<br>";
	echo "<hr>";
	echo "Nama:   " . $nilai[4][0] . "<br>Matematika: " . $nilai[4][1] . " | BIN: " . $nilai[4][2] . " | BIG: " . $nilai[4][3] . " | IPA: " . $nilai[4][4] . " | IPS: " . $nilai[4][5] . "<br><br>";

	echo "<h3>Rata - Rata Nilai dari Semua Siswa </h3>";
	echo $nilai[0][0] . "<br>";
	echo "(" . $nilai[0][1] . " + " . $nilai[0][2] . " + " . $nilai[0][3] . " + " . $nilai[0][4] . " + " . $nilai[0][5] . ") : 5 = ";
	$rata1 = ($nilai[0][1] + $nilai[0][2] + $nilai[0][3] + $nilai[0][4] + $nilai[0][5]) / 5;
	echo $rata1;
	echo "<br><hr>";
	echo $nilai[1][0] . "<br>";
	echo "(" . $nilai[1][1] . " + " . $nilai[1][2] . " + " . $nilai[1][3] . " + " . $nilai[1][4] . " + " . $nilai[1][5] . ") : 5 = ";
	$rata2 = ($nilai[1][1] + $nilai[1][2] + $nilai[1][3] + $nilai[1][4] + $nilai[1][5]) / 5;
	echo $rata2;
	echo "<br><hr>";
	echo $nilai[2][0] . "<br>";
	echo "(" . $nilai[2][1] . " + " . $nilai[2][2] . " + " . $nilai[2][3] . " + " . $nilai[2][4] . " + " . $nilai[2][5] . ") : 5 = ";
	$rata3 = ($nilai[2][1] + $nilai[2][2] + $nilai[2][3] + $nilai[2][4] + $nilai[2][5]) / 5;
	echo $rata3;
	echo "<br><hr>";
	echo $nilai[3][0] . "<br>";
	echo "(" . $nilai[3][1] . " + " . $nilai[3][2] . " + " . $nilai[3][3] . " + " . $nilai[3][4] . " + " . $nilai[3][5] . ") : 5 = ";
	$rata4 = ($nilai[3][1] + $nilai[3][2] + $nilai[3][3] + $nilai[3][4] + $nilai[3][5]) / 5;
	echo $rata4;
	echo "<br><hr>";
	echo $nilai[4][0] . "<br>";
	echo "(" . $nilai[4][1] . " + " . $nilai[4][2] . " + " . $nilai[4][3] . " + " . $nilai[4][4] . " + " . $nilai[4][5] . ") : 5 = ";
	$rata5 = ($nilai[4][1] + $nilai[4][2] + $nilai[4][3] + $nilai[4][4] + $nilai[4][5]) / 5;
	echo $rata5;
	echo "<br><br>";

	echo "<h3>Rata - Rata Nilai Mata Pelajaran</h3>";
	echo "Matematika <br>";
	echo "(" . $nilai[0][1] . " + " . $nilai[1][1] . " + " . $nilai[2][1] . " + " . $nilai[3][1] . " + " . $nilai[4][1] . ") : 5 = ";
	echo ($nilai[0][1] + $nilai[1][1] + $nilai[2][1] + $nilai[3][1] + $nilai[4][1]) / 5;
	echo "<br><hr>";
	echo "Bahasa Indonesia <br>";
	echo "(" . $nilai[0][2] . " + " . $nilai[1][2] . " + " . $nilai[2][2] . " + " . $nilai[3][2] . " + " . $nilai[4][2] . ") : 5 = ";
	echo ($nilai[0][2] + $nilai[1][2] + $nilai[2][2] + $nilai[3][2] + $nilai[4][2]) / 5;
	echo "<br><hr>";
	echo "Bahasa Inggris <br>";
	echo "(" . $nilai[0][3] . " + " . $nilai[1][3] . " + " . $nilai[2][3] . " + " . $nilai[3][3] . " + " . $nilai[4][3] . ") : 5 = ";
	echo ($nilai[0][3] + $nilai[1][3] + $nilai[2][3] + $nilai[3][3] + $nilai[4][3]) / 5;
	echo "<br><hr>";
	echo "IPA <br>";
	echo "(" . $nilai[0][4] . " + " . $nilai[1][4] . " + " . $nilai[2][4] . " + " . $nilai[3][4] . " + " . $nilai[4][4] . ") : 5 = ";
	echo ($nilai[0][4] + $nilai[1][4] + $nilai[2][4] + $nilai[3][4] + $nilai[4][4]) / 5;
	echo "<br><hr>";
	echo "IPS <br>";
	echo "(" . $nilai[0][5] . " + " . $nilai[1][5] . " + " . $nilai[2][5] . " + " . $nilai[3][5] . " + " . $nilai[4][5] . ") : 5 = ";
	echo ($nilai[0][5] + $nilai[1][5] + $nilai[2][5] + $nilai[3][5] + $nilai[4][5]) / 5;
	echo "<br><br>";

	echo "<h3>Penentuan Jenis Kelas dan Naik atau Tidaknya</h3>";
	echo $nilai[0][0] . "<br>";
	if ($rata1 >= 6 && $nilai[0][4] > $nilai[0][5]) {
		echo "Selamat atas kenaikan kelasnya dan selamat masuk ke kelas IPA ";
	} elseif ($rata1 >= 6 && $nilai[0][4] < $nilai[0][5]) {
		echo "Selamat atas kenaikan kelasnya dan selamat masuk ke kelas IPS";
	} elseif ($rata1 <= 6) {
		echo "Mohon maaf dikarenakan nilai kurang, anda belum naik kelas";
	}
	echo "<br><hr>";
	echo $nilai[1][0] . "<br>";
	if ($rata2 >= 6 && $nilai[1][4] > $nilai[1][5]) {
		echo "Selamat atas kenaikan kelasnya dan selamat masuk ke kelas IPA ";
	} elseif ($rata2 >= 6 && $nilai[1][4] < $nilai[1][5]) {
		echo "Selamat atas kenaikan kelasnya dan selamat masuk ke kelas IPS";
	} elseif ($rata2 <= 6) {
		echo "Mohon maaf dikarenakan nilai kurang, anda belum naik kelas";
	}
	echo "<br><hr>";
	echo $nilai[2][0] . "<br>";
	if ($rata3 >= 6 && $nilai[2][4] > $nilai[2][5]) {
		echo "Selamat atas kenaikan kelasnya dan selamat masuk ke kelas IPA ";
	} elseif ($rata3 >= 6 && $nilai[2][4] < $nilai[2][5]) {
		echo "Selamat atas kenaikan kelasnya dan selamat masuk ke kelas IPS";
	} elseif ($rata3 <= 6) {
		echo "Mohon maaf dikarenakan nilai kurang, anda belum naik kelas";
	}
	echo "<br><hr>";
	echo $nilai[3][0] . "<br>";
	if ($rata4 >= 6 && $nilai[3][4] > $nilai[3][5]) {
		echo "Selamat atas kenaikan kelasnya dan selamat masuk ke kelas IPA ";
	} elseif ($rata4 >= 6 && $nilai[3][4] < $nilai[3][5]) {
		echo "Selamat atas kenaikan kelasnya dan selamat masuk ke kelas IPS";
	} elseif ($rata4 <= 6) {
		echo "Mohon maaf dikarenakan nilai kurang, anda belum naik kelas";
	}
	echo "<br><hr>";
	echo $nilai[4][0] . "<br>";
	if ($rata5 >= 6 && $nilai[4][4] > $nilai[4][5]) {
		echo "Selamat atas kenaikan kelasnya dan selamat masuk ke kelas IPA ";
	} elseif ($rata5 >= 6 && $nilai[4][4] < $nilai[4][5]) {
		echo "Selamat atas kenaikan kelasnya dan selamat masuk ke kelas IPS";
	} elseif ($rata5 >= 6 && $nilai[4][4] == $nilai[4][5]) {
		echo " Selamat atas kenaikan kelasnya dan<br>Dikarenakan nilai IPA dan IPS sama, maka silakan memilih antar keduanya";
	} elseif ($rata5 <= 6) {
		echo "Mohon maaf dikarenakan nilai kurang, anda belum naik kelas";
	}
	?>
</body>

</html>