<!DOCTYPE html>
<html lang="id-ID" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>M3119004 - Latihan 2</title>
  </head>
  <body>
    <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
      <label for="nilai">Nilai: </label>
      <input type="number" name="nilai" value="<?php echo $_SERVER["REQUEST_METHOD"] == "POST" ? $_POST["nilai"] : ""; ?>">
      <?php if ($_SERVER["REQUEST_METHOD"] == "POST"): ?>
        <p>
          <?php
            $nilai = $_POST["nilai"];
            if ($nilai > 50) {
              echo "SELAMAT ANDA LULUS!";
            } else {
              echo "MAAF, ANDA BELUM LULUS :)";
            }
           ?>
        </p>
      <?php endif; ?>
    </form>
  </body>
</html>
