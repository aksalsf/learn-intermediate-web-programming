<?php

$username = $_POST['namaUser'];
$email = $_POST['emailUser'];
$lahir = $_POST['lahirUser'];
$password = $_POST['passwordUser'];
$gender = $_POST['genderUser'];
$angkatan = $_POST['angkatan'];
$choices = array();
foreach ($_POST['choiceUser'] as $choice) {
  $choices[] = $choice;
}

?>
<!DOCTYPE html>
<html lang="id-ID" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Selamat datang, <?php echo $username; ?></title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
</head>

<body>
  <div class="container">
    <div class="col-md-6 mx-auto mt-5 card p-5 bg-light shadow-sm">
      <h1 class="font-weight-bold text-center">Dashboard</h1>
      <hr>
      <p class="text-capitalize">
        <strong>Nama:</strong> <?php echo $username; ?>
      </p>
      <p>
        <strong>Email:</strong> <?php echo $email; ?>
      </p>
      <p>
        <strong>Tanggal Lahir:</strong> <?php echo $lahir; ?>
      </p>
      <p class="text-capitalize">
        <strong>Jenis Kelamin:</strong> <?php echo $gender; ?>
      </p>
      <p>
        <strong>Study Club:</strong>
        <ol class="text-capitalize">
          <?php
          foreach ($choices as $choice) {
            echo "<li>" . $choice . "</li>";
          }
          ?>
        </ol>
      </p>
      <p>
        <strong>Angkatan:</strong> <?php echo $angkatan; ?>
      </p>
      <a href="index.php">Back to home</a>
    </div>
  </div>
</body>

</html>