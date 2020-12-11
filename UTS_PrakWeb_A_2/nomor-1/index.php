<!DOCTYPE html>
<html lang="id-ID">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Nomor 1 - UTS Praktikum Pemrograman Web</title>
	<link rel="stylesheet" href="../css/bootstrap.css">
</head>

<body>
	<a href="../index.php" class="position-absolute ml-5 btn btn-outline-primary">Kembali ke Beranda</a>
	<div class="col-lg-6 mt-5 mb-5 mx-auto">
		<div class="container">
			<form action="result.php" method="post">
				<h1 class="text-center">Hitung IPK</h1>
				<!-- Nama -->
				<div class="form-group">
					<label for="nama">Nama</label>
					<input class="form-control" name="nama" required type="text" placeholder="Paijo Subarjo" minlength="2" title="Isi sesuai dengan nama Anda. Isian tidak mengandung angka atau simbol!" pattern="(^[a-zA-Z-' ]*$)">
				</div>
				<!-- NIM -->
				<div class="form-group">
					<label for="NIM">NIM</label>
					<input class="form-control" name="NIM" required type="text" placeholder="M3119005" minlength="8" maxlength="8" title="Karakter pertama harus huruf kemudian diikuti angka sesuai format NIM!" pattern="^[A-Z]{1}[0-9]{7}">
				</div>
				<!-- Jenis Kelamin -->
				<div class="form-check form-check-inline mb-3">
					<input type="radio" name="gender" class="form-check-input" value="male" required>
					<label class="form-check-label mr-3" for="male">Laki-laki</label>
					<input type="radio" name="gender" class="form-check-input" value="female">
					<label class="form-check-label" for="female">Perempuan</label>
				</div>
				<!-- Jurusan -->
				<div class="form-group">
					<label for="prodi">Program Studi</label>
					<select class="custom-select" name="prodi" required>
						<option value="te">D3 Teknik Elektro</option>
						<option value="ti">D3 Teknik Informatika</option>
						<option value="tm">D3 Teknik Mesin</option>
						<option value="tf">D3 Teknik Fisika</option>
						<option value="tk">D3 Teknik Kimia</option>
					</select>
				</div>
				<!-- Nilai -->
				<div class="form-row">
					<div class="form-group col">
						<label for="nilai-satu">Mata Kuliah 1</label>
						<input required type="text" class="form-control" name="nilai-satu" placeholder="A" maxlength="1" pattern="[AaBbCcDdEe]{1}" title="Isi hanya dengan isian A-E!">
					</div>
					<div class="form-group col">
						<label for="nilai-dua">Mata Kuliah 2</label>
						<input required type="text" class="form-control" name="nilai-dua" placeholder="B" maxlength="1" pattern="[AaBbCcDdEe]{1}" title="Isi hanya dengan isian A-E!">
					</div>
					<div class="form-group col">
						<label for="nilai-tiga">Mata Kuliah 3</label>
						<input required type="text" class="form-control" name="nilai-tiga" placeholder="C" maxlength="1" pattern="[AaBbCcDdEe]{1}" title="Isi hanya dengan isian A-E!">
					</div>
					<div class="form-group col">
						<label for="nilai-empat">Mata Kuliah 4</label>
						<input required type="text" class="form-control" name="nilai-empat" placeholder="D" maxlength="1" pattern="[AaBbCcDdEe]{1}" title="Isi hanya dengan isian A-E!">
					</div>
					<div class="form-group col">
						<label for="nilai-lima">Mata Kuliah 5</label>
						<input required type="text" class="form-control" name="nilai-lima" placeholder="E" maxlength="1" pattern="[AaBbCcDdEe]{1}" title="Isi hanya dengan isian A-E!">
					</div>
				</div>
				<button class="btn btn-success" type="submit" name="submit">Submit</button>
			</form>
		</div>
	</div>
</body>

</html>