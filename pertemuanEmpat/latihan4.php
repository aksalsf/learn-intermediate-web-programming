<!DOCTYPE html>
<html lang="id-ID" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>M3119004 - Latihan 4</title>
  </head>
  <body>
    <h1>Lihat Ranking</h1>
    <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
      <label for="ranking">Ranking: </label>
      <input type="number" name="ranking" value="<?php echo $_SERVER["REQUEST_METHOD"] == "POST" ? $_POST["ranking"] : ""; ?>">
      <?php if ($_SERVER["REQUEST_METHOD"] == "POST"): ?>
        <p>
          <?php
            $ranking = $_POST["ranking"];
            switch ($ranking) {
              case 1:
                echo "Peringkat ke $ranking adalah Andi";
                break;
              case 2:
                echo "Peringkat ke $ranking adalah Budi";
                break;
              case 3:
                echo "Peringkat ke $ranking adalah Caca";
                break;
              case 4:
                echo "Peringkat ke $ranking adalah Doni";
                break;
              case 5:
                echo "Peringkat ke $ranking adalah Eni";
                break;

              default:
                echo "Data Tidak Ada";
                break;
            }
           ?>
        </p>
      <?php endif; ?>
    </form>
  </body>
</html>
