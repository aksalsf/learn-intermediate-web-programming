<!DOCTYPE html>
<html lang="id-ID">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Submit[dot]PHP</title>
</head>
<body>
    <?php
        $nama = $_POST['nama'];
        $nim = $_POST['nim'];
        $gender = $_POST['gender'];
        $jurusan = $_POST['jurusan'];
    ?>
    <p>
        Hai, namaku <?php echo $nama; ?> dengan NIM <strong><?php echo $nim; ?></strong>
        <br> Saya seorang <?php echo $gender; ?> yang berasal dari jurusan teknik <?php echo $jurusan; ?>
    </p>
</body>
</html>
