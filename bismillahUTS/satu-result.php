<?php if ($_SERVER["REQUEST_METHOD"] == "POST") : ?>
	<?php

	// Menangkap Data
	$nama = $_POST['nama'];
	$NIM = $_POST['NIM'];
	$gender = "";
	switch ($_POST['gender']) {
		case 'male':
			$gender = "Laki-laki";
			break;

		case 'female':
			$gender = "Perempuan";
			break;

		default:
			$gender = "Error";
			break;
	}
	$prodi = "";
	switch ($_POST['prodi']) {
		case 'te':
			$prodi = "Teknik Elektro";
			break;
		case 'ti':
			$prodi = "Teknik Informatika";
			break;
		case 'tm':
			$prodi = "Teknik Mesin";
			break;
		case 'tf':
			$prodi = "Teknik Fisika";
			break;
		case 'tk':
			$prodi = "Teknik Kimia";
			break;

		default:
			# code...
			break;
	}

	function getNilaiAngka($value)
	{
		$valueUpper = strtoupper($value);
		switch ($valueUpper) {
			case 'A':
				return 4;
				break;
			case 'B':
				return 3;
				break;
			case 'C':
				return 2;
				break;
			case 'D':
				return 1;
				break;
			case 'E':
				return 0;
				break;
			default:
				return 0;
				break;
		}
	}

	$sks = 3;

	$nilaiSatu = getNilaiAngka($_POST['nilai-satu']) * $sks;
	$nilaiDua = getNilaiAngka($_POST['nilai-dua']) * $sks;
	$nilaiTiga = getNilaiAngka($_POST['nilai-tiga']) * $sks;
	$nilaiEmpat = getNilaiAngka($_POST['nilai-empat']) * $sks;
	$nilaiLima = getNilaiAngka($_POST['nilai-lima']) * $sks;

	$nilaiIPK =
		($nilaiSatu + $nilaiDua + $nilaiTiga + $nilaiEmpat + $nilaiLima) / ($sks * 5);

	$predikat = "";

	if ($nilaiIPK <= 4) {
		if ($nilaiIPK >= 3.76) {
			$predikat = "Summa Cumlaude";
		} elseif ($nilaiIPK >= 3.51) {
			$predikat = "Cumlaude";
		} elseif ($nilaiIPK >= 3.01) {
			$predikat = "Sangat Memuaskan";
		} elseif ($nilaiIPK >= 2.76) {
			$predikat = "Memuaskan";
		} elseif ($nilaiIPK >= 2) {
			$predikat = "Cukup";
		} else {
			$predikat = "Tidak Lulus";
		}
	} else {
		$predikat= "Error Data Found!";
	}

	?>

	<!DOCTYPE html>
	<html>

	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Hasil | Nomor 1 - UTS Praktikum Pemrograman Web</title>
		<link rel="stylesheet" href="css/bootstrap.css">
	</head>

	<body>
		<a href="satu-index.php" class="position-absolute ml-5 btn btn-outline-primary">Kembali ke Index Satu</a>
		<div class="col-lg-6 mx-auto mt-5 mb-5">
			<h1 class="text-center">Hasil</h1>
			<hr>
			<form>
				<div class="form-group">
					<label>Nama</label>
					<input class="form-control" type="text" disabled value="<?php echo $nama; ?>">
				</div>
				<div class="form-group">
					<label>NIM</label>
					<input class="form-control" type="text" disabled value="<?php echo $NIM; ?>">
				</div>
				<div class="form-group">
					<label>Jenis Kelamin</label>
					<input class="form-control" type="text" disabled value="<?php echo $gender; ?>">
				</div>
				<div class="form-group">
					<label>Program Studi</label>
					<input class="form-control" type="text" disabled value="<?php echo $prodi; ?>">
				</div>
				<div class="form-row">
					<div class="form-group col">
						<label>Nilai Matkul 1</label>
						<input class="form-control" type="text" disabled value="<?php echo $nilaiSatu; ?>">
					</div>
					<div class="form-group col">
						<label>Nilai Matkul 2</label>
						<input class="form-control" type="text" disabled value="<?php echo $nilaiDua; ?>">
					</div>
					<div class="form-group col">
						<label>Nilai Matkul 3</label>
						<input class="form-control" type="text" disabled value="<?php echo $nilaiTiga; ?>">
					</div>
					<div class="form-group col">
						<label>Nilai Matkul 4</label>
						<input class="form-control" type="text" disabled value="<?php echo $nilaiEmpat; ?>">
					</div>
					<div class="form-group col">
						<label>Nilai Matkul 5</label>
						<input class="form-control" type="text" disabled value="<?php echo $nilaiLima; ?>">
					</div>
				</div>
				<div class="form-group">
					<label>Indeks Prestasi Komulatif (IPK) </label>
					<input class="form-control" type="text" disabled value="<?php echo $nilaiIPK; ?>">
				</div>
				<div class="form-group">
					<label>Predikat Kelulusan</label>
					<input class="form-control" type="text" disabled value="<?php echo $predikat; ?>">
				</div>
			</form>
		</div>
	</body>

	</html>
<?php else : ?>
	<?php header('Location: satu-index.php'); ?>
<?php endif ?>