<?php

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

// define variables and set to empty values
$namaErr = $emailErr = $genderErr = $NIMErr = $birthlocErr = $birthdateErr = $prodiErr = $alamatErr = $phoneErr = "";

$nama = $email = $gender = $NIM = $birthloc = $birthdate = $prodi = $alamat = $phone = "";

$requireMessage = "Isian harus diisi!";
$validationMessage = "Harap isi dengan benar!";

$isValid = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["nama"])) {
    $namaErr = $requireMessage;
  } else {
    $nama = test_input($_POST["nama"]);
    // check if nama only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/",$nama)) {
      $namaErr = $validationMessage;
    }
  }
  
  if (empty($_POST["email"])) {
    $emailErr = $requireMessage;
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = $validationMessage;
    }
  }

  if (empty($_POST["NIM"])) {
      $NIMErr = $requireMessage;
  } else {
      $NIM = test_input($_POST["NIM"]);
      if (!preg_match("/^[A-Z]{1}[0-9]{7}/",$NIM)) {
        $NIMErr = $validationMessage;
      }
  }

  if (empty($_POST["gender"])) {
    $genderErr = $requireMessage;
  } else {
    $gender = test_input($_POST["gender"]);
    if ($gender != "l" && $gender != "p") {
        $genderErr = $requireMessage;
    }
  }

  if (empty($_POST["birthloc"])) {
    $birthlocErr = $requireMessage;
  } else {
    $birthloc = test_input($_POST["birthloc"]);
    // check if birthloc only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/",$birthloc)) {
      $birthlocErr = $validationMessage;
    }
  }

  if (empty($_POST["birthdate"])) {
    $birthdateErr = $requireMessage;
  } else {
    $birthdate = test_input($_POST["birthdate"]);
    $birthdate_check  = explode('-', $birthdate);
    if (checkdate($birthdate_check[0], $birthdate_check[1], $birthdate_check[2])) {
        $birthdateErr = $validationMessage;
    }
  }

  if (empty($_POST["prodi"])) {
    $prodiErr = $requireMessage;
  } else {
      $prodi = test_input($_POST["prodi"]);
      if ($prodi != "te" && $prodi != "ti" && $prodi != "tm") {
          $prodiErr = $validationMessage;
      }
  }

  if (empty($_POST["alamat"])) {
    $alamatErr = $requireMessage;
  } else {
      $alamat = test_input($_POST["alamat"]);
  }

  if (empty($_POST["phone"])) {
    $phoneErr = $requireMessage;
  } else {
      $phone = test_input($_POST["phone"]);
      if (!preg_match("/^[+][0-9]{13}/",$phone)) {
      $phoneErr = $validationMessage;
    }
  }

  if ($namaErr == "" && $emailErr == "" && $genderErr == "" && $NIMErr == "" && $birthlocErr == "" && $birthdateErr == "" && $prodiErr == "" && $alamatErr == "" && $phoneErr == "") {
      require 'db-insert.php';
  }
}

?>