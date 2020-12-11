<!DOCTYPE html>
<html lang="id-ID" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Latihan 2</title>
  </head>
  <body>
    <!-- Bagian Formulir -->
    <h2>Buku Tamu</h2>
    <p style="color:#FF0000;">* wajib diisi</p>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
      <p>
        <label for="nama">Nama<span style="color:#FF0000;">*</span></label>
        <!-- Required agar input wajib diisi -->
        <input type="text" name="nama" required>
      </p>
      <p>
        <label for="email">Email<span style="color:#FF0000;">*</span></label>
        <!-- Required agar input wajib diisi -->
        <input type="email" name="email" required>
      </p>
      <p>
        <label for="website">Website</label>
        <input type="url" name="website">
      </p>
      <p>
        Jenis Kelamin<span style="color:#FF0000;">*</span>
        <!-- Required agar input wajib diisi -->
        <input type="radio" name="gender" value="putra" required>
        <label for="gender">Putra</label>
        <input type="radio" name="gender" value="putri">
        <label for="gender">Putri</label>
      </p>
      <p>
        <p>Komentar:</p>
        <textarea name="komentar" rows="8" cols="80"></textarea>
      </p>
      <button type="submit" name="submit">Simpan</button>
    </form>
    <!-- Bagian untuk Menampilkan Data dari Form -->
    <?php if ($_SERVER["REQUEST_METHOD"] == "POST"): ?>
      <?php
        // Validasi
        function test_input($data) {
          $data = trim($data);
          $data = stripslashes($data);
          $data = htmlspecialchars($data);
          return $data;
        }

        $nama = test_input($_POST['nama']);
        $email = test_input($_POST['email']);
        $website = test_input($_POST['website']);
        $gender = test_input($_POST['gender']);
        $komentar = test_input($_POST['komentar']);

       ?>

      <h4>Biodata</h4>
      <p>Nama: <?php echo $nama; ?></p>
      <p>Email: <?php echo $email; ?></p>
      <p>Website: <a href="<?php echo $website; ?>"><?php echo $website; ?></a></p>
      <p>Jenis Kelamin: <?php echo $gender; ?></p>
      <p>Komentar: <?php echo $komentar; ?></p>

    <?php endif; ?>
  </body>
</html>
