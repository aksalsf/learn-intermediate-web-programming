<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }

  $harga = test_input($_POST["harga"]);
  $dp = test_input($_POST["dp"]);
  $lamaCicil = test_input($_POST["lama-cicilan"]);
  $bunga = test_input($_POST["bunga"]);

  $isError = false;

  if ($dp < $harga * 0.02 || $dp > $harga) {
    $isError = true;
  } else {
    $isError = false;
  }

  $hutang = $harga - $dp;
  $bunga = $bunga * $hutang;
  $cicilan = $hutang / $lamaCicil + $bunga;
  $terbayar = 0;
  $kurang = $harga;

}

 ?>
<!DOCTYPE html>
<html lang="id-ID" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kredit Motor Honda Cub</title>
    <link rel="stylesheet" href="master.css">
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-md-6 p-5 mt-5 mb-5 order-2">
          <h1 class="font-weight-bold text-center">Kredit Motor Honda Cub</h1>
          <hr>
          <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form-group">
              <label for="harga">Pilih Motor</label>
              <select class="form-control" name="harga" <?php echo isset($isError) && $isError == false ? "disabled" : "" ?>>
                <?php if ($_SERVER["REQUEST_METHOD"] == "POST"): ?>
                  <option value="<?php echo $harga; ?>" selected>Harga: Rp. <?php echo $harga; ?></option>
                <?php endif; ?>
                <option value="18171000">Supra X 125 Spoke FI (Rp. 18.171.000)</option>
                <option value="19250000">Supra X 125 CW FI (Rp. 19.250.000)</option>
                <option value="24050000">Supra GTR 150 Sporty (Rp. 24.050.000)</option>
                <option value="24300000">Supra GTR 150 Exclusive (Rp. 24.300.000)</option>
                <option value="14905000">Revo Fit	(Rp. 14.905.000)</option>
                <option value="16605000">Revo X	(Rp. 16.605.000)</option>
              </select>
            </div>
            <div class="form-group">
              <label for="dp">DP (Minimal 20% Harga Motor)</label>
              <input class="form-control" type="number" name="dp" value="<?php echo $_SERVER["REQUEST_METHOD"] == "POST" ? $dp : ""; ?>" required <?php echo isset($isError) && $isError == false ? "disabled" : "" ?>>
              <?php if ($_SERVER["REQUEST_METHOD"] == "POST"): ?>
                <?php if ($isError == true): ?>
                  <p class="text-danger text-italic">DP yang Anda input salah!</p>
                <?php endif; ?>
              <?php endif; ?>
            </div>
            <div class="form-group">
              <label for="lama-cicilan">Lama Cicilan</label>
              <select class="form-control" name="lama-cicilan" required <?php echo isset($isError) && $isError == false ? "disabled" : "" ?>>
                <?php if ($_SERVER["REQUEST_METHOD"] == "POST"): ?>
                  <option value="<?php echo $lamaCicil; ?>" selected><?php echo $lamaCicil; ?> Bulan</option>
                <?php endif; ?>
                <option value="12">12 Bulan</option>
                <option value="24">24 Bulan</option>
                <option value="36">36 Bulan</option>
              </select>
            </div>
            <input type="hidden" name="bunga" value="0.03">
            <?php if ($_SERVER["REQUEST_METHOD"] == "POST" && $isError == false): ?>
                <button type="submit" name="submit" class="btn btn-success btn-disabled" disabled>Kirim</button>
              <?php else: ?>
                <button type="submit" name="submit" class="btn btn-success">Kirim</button>
            <?php endif; ?>
          </form>
        </div>
        <div class="col-md-6 p-5 mt-5 mb-5 order-1">
          <?php if ($_SERVER["REQUEST_METHOD"] == "POST"): ?>
            <?php if ($isError == true): ?>
              <img src="error.svg" class="img-fluid" alt="Error">
            <?php else: ?>
              <h2 class="h1 font-weight-bold text-center">Rincian Cicilan</h2>
              <table class="table table-danger">
                <tr>
                  <th>Terhutang</th>
                  <td>Rp. <?php echo $hutang; ?></td>
                </tr>
                <tr>
                  <th>Besar Bunga</th>
                  <td>Rp. <?php echo $bunga; ?></td>
                </tr>
                <tr>
                  <th>Cicilan</th>
                  <td>Rp. <?php echo $cicilan; ?></td>
                </tr>
              </table>
              <table class="table">
                <thead>
                  <th>Bulan</th>
                  <th>Cicilan</th>
                  <th>Terbayar</th>
                  <th>Kurang</th>
                </thead>
                <tbody>
                  <?php $i = 1; ?>
                  <?php while($kurang >= 0) : ?>
                    <tr>
                      <td><?php echo $i++; ?></td>
                      <td><?php echo $cicilan; ?></td>
                      <td><?php echo $terbayar = $terbayar + $cicilan; ?></td>
                      <td><?php echo $kurang = $kurang - $terbayar; ?></td>
                    </tr>
                  <?php endwhile; ?>
                </tbody>
              </table>
            <?php endif; ?>
            <?php else: ?>
              <img src="dijual.svg" class="img-fluid" alt="Hitung">
          <?php endif; ?>
        </div>
      </div>
    </div>
  </body>
</html>
