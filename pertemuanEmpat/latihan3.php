<!DOCTYPE html>
<html lang="id-ID" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>M3119004 - Latihan 3</title>
  </head>
  <body>
    <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
      <label for="nilai">Nilai: </label>
      <input type="number" name="nilai" value="<?php echo $_SERVER["REQUEST_METHOD"] == "POST" ? $_POST["nilai"] : ""; ?>">
      <?php if ($_SERVER["REQUEST_METHOD"] == "POST"): ?>
        <p>
          <?php
            $nilai = $_POST["nilai"];
            if ($nilai >= 80) {
              echo "SELAMAT, NILAI KAMU A!";
            } elseif ($nilai >= 60) {
              echo "SELAMAT, NILAI KAMU B!";
            } elseif ($nilai >= 40) {
              echo "NILAI KAMU C!";
            } elseif ($nilai >= 20) {
              echo "NILAI KAMU D!";
            } else {
              echo "NILAI KAMU E!";
            }
           ?>
        </p>
      <?php endif; ?>
    </form>
  </body>
</html>
