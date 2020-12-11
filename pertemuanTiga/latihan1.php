<!DOCTYPE html>
<html lang="id-ID">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 1</title>
</head>


<body>
    <form action="submit.php" method="POST">
        <p>
            <label for="nama">Nama</label>
            <input type="text" name="nama">
        </p>
        <p>
            <label for="nim">NIM</label>
            <input type="text" name="nim">
        </p>
        <p>
            <input type="radio" name="gender" value="laki-laki">
            <label for="laki-laki">laki-laki</label>
            <input type="radio" name="gender" value="perempuan">
            <label for="perempuan">perempuan</label>
        </p>
        <p>
            <select type="text" name="jurusan">
            <option value="informatika">Teknik Informatika</option>
            <option value="elektro">Teknik Elektro</option>
            <option value="mesin">Teknik Mesin</option>
        </p>
        <input type="submit" name="submit">
    </form>
</body>


</html>