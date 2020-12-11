<?php
  // Validasi
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nameErr = $emailErr = $genderErr = $websiteErr = "";
    $errorStatus = false;
    function test_input($data) {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
    }

    if (empty($_POST["nama"])) {
        $nameErr = "Name is required";
      } else {
        $name = test_input($_POST["nama"]);
        // check if name only contains letters and whitespace
        if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
          $nameErr = "Penulisan nama Anda tidak tepat!";
        }
      }

      if (empty($_POST["email"])) {
        $emailErr = "Email is required";
      } else {
        $email = test_input($_POST["email"]);
        // check if e-mail address is well-formed
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
          $emailErr = "Penulisan email Anda salah!";
        }
      }

      if (empty($_POST["website"])) {
        $website = "";
      } else {
        $website = test_input($_POST["website"]);
        // check if URL address syntax is valid (this regular expression also allows dashes in the URL)
        if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
          $websiteErr = "URL salah!";
        }
      }

      if (empty($_POST["komentar"])) {
        $comment = "";
      } else {
        $comment = test_input($_POST["komentar"]);
      }

      if (empty($_POST["gender"])) {
        $genderErr = "Gender is required";
      } else {
        $gender = test_input($_POST["gender"]);
      }

      function showError($errorMessage)
      {
        global $errorStatus;
        if (!empty($errorMessage)) {
          echo '<p style="color:#FF0000;"><em>'. $errorMessage ."</em></p>";
          $errorStatus = true;
        }
      }

  }

 ?>
<!DOCTYPE html>
<html lang="id-ID" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Latihan 3</title>
  </head>
  <body>
    <!-- Bagian Formulir -->
    <h2>Buku Tamu</h2>
    <p style="color:#FF0000;">* wajib diisi</p>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
      <p>
        <label for="nama">Nama<span style="color:#FF0000;">*</span></label>
        <!-- Required agar input wajib diisi -->
        <input type="text" name="nama" required value="<?php echo $_SERVER["REQUEST_METHOD"] == "POST" ? $name : "" ; ?>">
        <?php $_SERVER["REQUEST_METHOD"] == "POST" ? showError($nameErr) : "" ; ?>
      </p>
      <p>
        <label for="email">Email<span style="color:#FF0000;">*</span></label>
        <!-- Required agar input wajib diisi -->
        <input type="email" name="email" required value="<?php echo $_SERVER["REQUEST_METHOD"] == "POST" ? $email : "" ; ?>">
        <?php $_SERVER["REQUEST_METHOD"] == "POST" ? showError($emailErr) : "" ; ?>
      </p>
      <p>
        <label for="website">Website</label>
        <input type="url" name="website" value="<?php echo $_SERVER["REQUEST_METHOD"] == "POST" ? $website : "" ; ?>">
        <?php $_SERVER["REQUEST_METHOD"] == "POST" ? showError($websiteErr) : "" ; ?>
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
        <textarea name="komentar" rows="8" cols="80" value="<?php echo $_SERVER["REQUEST_METHOD"] == "POST" ? $comment : "" ; ?>"></textarea>
      </p>
      <button type="submit" name="submit">Simpan</button>
    </form>
    <!-- Bagian untuk Menampilkan Data dari Form -->
    <?php if ($_SERVER["REQUEST_METHOD"] == "POST" && $errorStatus == false): ?>
      <h4>Biodata</h4>
      <p>Nama: <?php echo $name; ?></p>
      <p>Email: <?php echo $email; ?></p>
      <p>Website: <a href="<?php echo $website; ?>"><?php echo $website; ?></a></p>
      <p>Jenis Kelamin: <?php echo $gender; ?></p>
      <p>Komentar: <?php echo $comment; ?></p>
    <?php endif; ?>
  </body>
</html>
