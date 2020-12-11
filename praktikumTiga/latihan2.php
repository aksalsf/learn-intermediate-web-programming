<!DOCTYPE html>
<html lang="id-ID" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 1 - Belajar Variabel</title>
  </head>
  <body>
    <?php
      $variabel_global = 4;
      function myTest()
      {
        $variabel_lokal = 3;
        echo "Global:" . $variabel_global; echo "<br>";
        echo "Lokal:" . $variabel_lokal;
      }
      function myTest2()
      {
        global $variabel_global;
        $variabel_global = 04;
        echo "Global Baru:" . $variabel_global;
      }

     ?>
     <?php myTest(); ?><br>
     <?php echo "Nilai variabel global: " . $variabel_global; ?><br>
     <?php echo "Nilai variabel lokal: " . $variabel_lokal; ?><br>
     <?php myTest2(); ?>
  </body>
</html>
