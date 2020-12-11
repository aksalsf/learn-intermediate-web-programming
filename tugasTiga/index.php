<?php
  extract($_POST);
  $operatorName = "";
  if (isset($hitung)) {
    switch ($operator) {
      case '+':
        $operatorName = "penjumlahan";
        $result = $firstNumber + $secondNumber;
        break;

      case '-':
        $operatorName = "pengurangan";
        $result = $firstNumber - $secondNumber;
        break;

      case '*':
        $operatorName = "perkalian";
        $result = $firstNumber * $secondNumber;
        break;

      case '/':
        $operatorName = "pembagian";
        $result = $firstNumber / $secondNumber;
        break;

      default:
        $operatorName = "perhitungan";
        $result = "ERROR (Operator Hitung Salah)";
        break;
    }

  }
 ?>
<!DOCTYPE html>
<html lang="id-ID" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap.min.css">
    <title>Tugas 3 - Aksal Syah Falah</title>
  </head>
  <body>
    <div class="col-md-6 mx-auto mt-5 mb-5">
      <div class="container p-3">
        <h1 class="text-center font-weight-bold">Kalkulator</h1>
        <hr>
        <form class="row" method="POST" action="index.php">
          <div class="col-md-4">
            <input type="number" class="form-control" name="firstNumber" placeholder="<?php echo isset($firstNumber)? $firstNumber : "Angka Pertama"; ?>">
          </div>
          <div class="col-md-4">
            <select class="custom-select" name="operator">
                <option value="disabled" selected><?php echo isset($operator)? $operator : "Pilih Operator"; ?></option>
                <option value="+">Penjumlahan</option>
                <option value="-">Pengurangan</option>
                <option value="*">Perkalian</option>
                <option value="/">Pembagian</option>
              </select>
          </div>
          <div class="col-md-4">
            <input type="number" class="form-control" name="secondNumber" placeholder="<?php echo isset($secondNumber)? $secondNumber : "Angka Kedua"; ?>">
          </div>
          <div class="col-md-4 ml-auto mt-3">
            <button class="btn btn-primary w-100" type="submit" name="hitung">Hitung</button>
          </div>
        </form>
        <?php if ($operatorName!=""): ?>
          <div class="form-inline mt-3">
            <label class="mr-3" for="result">Hasil <?php echo $operatorName; ?>nya adalah</label>
            <input class="form-control" type="number" name="result" value="<?php echo $result; ?>" placeholder="<?php echo $result; ?>" disabled>
          </div>
        <?php endif; ?>
      </div>
    </div>
  </body>
</html>
