<?php if (isset($_POST['submit'])): ?>
<?php

  $nama = $_POST['nama'];
  $golongan = $_POST['golongan'];
  $lamaKerja = $_POST['lama_kerja'];
  $status = $_POST['status'];
  $jumlahAnak = $_POST['jumlah_anak'];
  $gajiPokok = 0;
  $gajiKotor = 0;
  $gajiBersih = 0;
  $tunjanganTotal = 0;
  $tunjanganKeluarga = 200000;
  $tunjanganAnak = 100000;
  $tunjanganProfesi = 50000;
  $pajak = 0;

  // Hitung Gaji
  switch ($golongan) {
    case 1:
      $gajiPokok = 1000000;
      $pajak = 0;
      break;

    case 2:
      $gajiPokok = 2000000;
      $pajak = 2.5/100;
      break;

    case 3:
      $gajiPokok = 3000000;
      $pajak = 5/100;
      break;

    default:
      $gajiPokok = 0;
      $pajak = 0;
      break;
  }

  if ($status == "sudah") {
    $tunjanganTotal += $tunjanganKeluarga;
    if ($jumlahAnak != 0) {
      if ($jumlahAnak > 3) {
        $tunjanganTotal = $tunjanganTotal + ($tunjanganAnak * 3);
      } else {
        $tunjanganTotal = $tunjanganTotal + ($tunjanganAnak * $jumlahAnak);
      }
    }
  }

  if ($lamaKerja % 2 == 0) {
    $tunjanganTotal = $tunjanganTotal + ($lamaKerja / 2);
  }

  $gajiKotor = $gajiPokok + $tunjanganTotal;

  $gajiBersih = $gajiKotor - ($gajiKotor * $pajak);

 ?>
<!DOCTYPE html>
<html lang="id-ID" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap.min.css">
    <title>Gaji <?php echo $nama; ?> - M3119004</title>
  </head>
  <body>
    <main class="col-md-6 mx-auto mt-5 mb-5">
      <header>
        <h1 class="font-weight-bold text-center">Halo, <?php echo $nama; ?>!</h1>
        <hr>
      </header>
      <label for="gaji">Gaji Anda</label>
      <input class="form-control" type="number" name="gaji" value="<?php echo $gajiBersih; ?>" disabled>
    </main>
  </body>
</html>
<?php endif; ?>
