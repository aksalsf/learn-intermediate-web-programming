<!DOCTYPE html>
<html>
    <head>
        <title>Judul Website</title>
    </head>
    <body>

    <?php
        $alamatGambar = "gambar.png";
        $nilaiku = 90;
    ?>

    <?php if ($nilaiku == 100): ?>
      <img src="<?php echo $alamatGambar; ?>">
      <?php else: ?>
      <p>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
      </p>
      <p>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
      </p>
    <?php endif; ?>

    </body>
</html>
