<!DOCTYPE html>
<html lang="id-ID" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Latihan 1</title>
  </head>
  <body>
    <!-- Bagian Formulir -->
    <h2>Buku Tamu</h2>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
      <p>
        <label for="nama">Nama</label>
        <input type="text" name="nama">
      </p>
      <p>
        <label for="email">Email</label>
        <input type="email" name="email">
      </p>
      <p>
        <label for="website">Website</label>
        <input type="url" name="website">
      </p>
      <p>
        Jenis Kelamin
        <input type="radio" name="gender" value="putra">
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
    <?php if (isset($_POST['submit'])): ?>
      <?php
        $nama = $_POST['nama'];
        $email = $_POST['email'];
        $website = $_POST['website'];
        $gender = $_POST['gender'];
        $komentar = $_POST['komentar'];
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
