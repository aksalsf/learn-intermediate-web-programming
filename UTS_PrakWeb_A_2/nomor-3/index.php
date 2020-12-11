<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $bangundatar = $_POST['bangundatar'];

    /*Lingkaran*/
    if (isset($_POST["jari"])) {
        $jari = $_POST["jari"];
    }
    function luaslingkaran($jari)
    {
        $luas_ling = 22 / 7 * $jari * $jari;
        return $luas_ling;
    }
    if (isset($_POST["jari"])) {
        $jari = $_POST["jari"];
    }

    function kelllingkaran($jari)
    {
        $kell_ling = 2 * 22 / 7 * $jari;
        return $kell_ling;
    }
    /*Persegi*/
    if (isset($_POST["sisi"])) {
        $sisi = $_POST["sisi"];
    }

    function luaspersegi($sisi)
    {
        $luas_pers = $sisi * $sisi;
        return $luas_pers;
    }
    if (isset($_POST["sisi"])) {
        $sisi = $_POST["sisi"];
    }

    function kellpersegi($sisi)
    {
        $kell_pers = 4 * $sisi;
        return $kell_pers;
    }
    /*Segitiga*/
    if (isset($_POST["alas_tiga"]) && isset($_POST["tinggi_tiga"])) {
        $alas = $_POST["alas_tiga"];
        $tinggi = $_POST["tinggi_tiga"];
    }

    function luassegitiga($alas, $tinggi)
    {
        $luas_tiga = 1 / 2 * $alas * $tinggi;
        return $luas_tiga;
    }
    if (isset($_POST["a_tiga"]) && isset($_POST["b_tiga"]) && isset($_POST["c_tiga"])) {
        $a = $_POST["a_tiga"];
        $b = $_POST["b_tiga"];
        $c = $_POST["c_tiga"];
    }

    function kellsegitiga($a, $b, $c)
    {
        $kell_tiga = $a + $b + $c;
        return $kell_tiga;
    }
    /*Jajar Genjang*/
    if (isset($_POST["alas_jar"]) && isset($_POST["tinggi_jar"])) {
        $alas = $_POST["alas_jar"];
        $tinggi = $_POST["tinggi_jar"];
    }

    function luasjajargenjang($alas, $tinggi)
    {
        $luas_jar = $alas * $tinggi;
        return $luas_jar;
    }
    if (isset($_POST["a_jar"]) && isset($_POST["b_jar"])) {
        $a = $_POST["a_jar"];
        $b = $_POST["b_jar"];
    }

    function kelljajargenjang($a, $b)
    {
        $kell_jar = 2 * ($a + $b);
        return $kell_jar;
    }
    /*Layang layang*/
    if (isset($_POST["diagonal1"]) && isset($_POST["diagonal2"])) {
        $d1 = $_POST["diagonal1"];
        $d2 = $_POST["diagonal2"];
    }

    function luaslayang($d1, $d2)
    {
        $luas_lay = 1 / 2 * $d1 * $d2;
        return $luas_lay;
    }
    if (isset($_POST["a_lay"]) && isset($_POST["c_lay"])) {
        $a = $_POST["a_lay"];
        $c = $_POST["c_lay"];
    }

    function kelllayang($a, $c)
    {
        $kell_lay = 2 * ($a + $c);
        return $kell_lay;
    }
}
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../css/bootstrap.css">

    <style>
        .error {
            color: #FF0000;
        }
    </style>
</head>

<body>
    <a href="../index.php" class="float-right btn btn-outline-primary">Kembali ke Beranda</a>
    <h1>Menghitung Luas dan Keliling Bangun Datar</h1>
    <div class="col-6 mt-5 mb-5 mx-auto">
        <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <h6>Pilih Bangun Datar</h6>
            <?php if ($_SERVER["REQUEST_METHOD"] == "POST") : ?>
                <select name="bangundatar" class="form-control">
                    <option><?php echo $bangundatar; ?></option>
                </select>
            <?php else : ?>
                <select name="bangundatar" class="form-control">
                    <option>Lingkaran</option>
                    <option>Persegi</option>
                    <option>Segitiga</option>
                    <option>Jajar Genjang</option>
                    <option>Layang-layang</option>
                </select>
            <?php endif; ?>
            <?php if ($_SERVER["REQUEST_METHOD"] == "POST") : ?>
                <?php if ($bangundatar == "Lingkaran") : ?>
                    <label>Jari-jari</label>
                    <input type="number" class="form-control" name="jari"></input>
                <?php endif; ?>

                <?php if ($bangundatar == "Persegi") : ?>
                    <label>Sisi</label>
                    <input type="number" class="form-control" name="sisi"></input>
                <?php endif; ?>

                <?php if ($bangundatar == "Segitiga") : ?>
                    <label>Alas</label>
                    <input type="number" class="form-control" name="alas_tiga"></input>
                    <label>Tinggi</label>
                    <input type="number" class="form-control" name="tinggi_tiga"></input>
                    <label>a</label>
                    <input type="number" class="form-control" name="a_tiga"></input>
                    <label>b</label>
                    <input type="number" class="form-control" name="b_tiga"></input>
                    <label>c</label>
                    <input type="number" class="form-control" name="c_tiga"></input>
                <?php endif; ?>

                <?php if ($bangundatar == "Jajar Genjang") : ?>
                    <label>Alas</label>
                    <input type="number" class="form-control" name="alas_jar"></input>
                    <label>Tinggi</label>
                    <input type="number" class="form-control" name="tinggi_jar"></input>
                    <label>a</label>
                    <input type="number" class="form-control" name="a_jar"></input>
                    <label>b</label>
                    <input type="number" class="form-control" name="b_jar"></input>
                <?php endif; ?>

                <?php if ($bangundatar == "Layang-layang") : ?>
                    <label>d 1</label>
                    <input type="number" class="form-control" name="diagonal1"></input>
                    <label>d 2</label>
                    <input type="number" class="form-control" name="diagonal2"></input>
                    <label>a</label>
                    <input type="number" class="form-control" name="a_lay"></input>
                    <label>c</label>
                    <input type="number" class="form-control" name="c_lay"></input>
                <?php endif; ?>
            <?php endif; ?>
            <button type="submit" name="submit" class="btn btn-success">Submit</button>
        </form>
        <div class="mt-5">
            <?php if (isset($_POST["jari"])) : ?>
                <h5><?php echo "Luas lingkaran adalah : " . luaslingkaran($jari); ?></h5>
            <?php endif; ?>
            <?php if (isset($_POST["jari"])) : ?>
                <h5><?php echo "Keliling lingkaran adalah : " . kelllingkaran($jari); ?></h5>
            <?php endif; ?>

            <?php if (isset($_POST["sisi"])) : ?>
                <h5><?php echo "Luas persegi adalah : " . luaspersegi($sisi); ?></h5>
            <?php endif; ?>
            <?php if (isset($_POST["sisi"])) : ?>
                <h5><?php echo "Keliling persegi adalah : " . kellpersegi($sisi); ?></h5>
            <?php endif; ?>

            <?php if (isset($_POST["alas_tiga"]) && isset($_POST["tinggi_tiga"])) : ?>
                <h5><?php echo "Luas segitiga adalah : " . luassegitiga($alas, $tinggi); ?></h5>
            <?php endif; ?>
            <?php if (isset($_POST["a_tiga"]) && isset($_POST["b_tiga"]) && isset($_POST["c_tiga"])) : ?>
                <h5><?php echo "Keliling segitiga adalah : " . kellsegitiga($a, $b, $c); ?></h5>
            <?php endif; ?>

            <?php if (isset($_POST["alas_jar"]) && isset($_POST["tinggi_jar"])) : ?>
                <h5><?php echo "Luas jajar genjang adalah : " . luasjajargenjang($alas, $tinggi); ?></h5>
            <?php endif; ?>
            <?php if (isset($_POST["a_jar"]) && isset($_POST["b_jar"])) : ?>
                <h5><?php echo "Keliling jajar genjang adalah : " . kelljajargenjang($a, $b); ?></h5>
            <?php endif; ?>

            <?php if (isset($_POST["diagonal1"]) && isset($_POST["diagonal2"])) : ?>
                <h5><?php echo "Luas layang-layang adalah : " . luaslayang($d1, $d2); ?></h5>
            <?php endif; ?>
            <?php if (isset($_POST["a_lay"]) && isset($_POST["c_lay"])) : ?>
                <h5><?php echo "Keliling layang-layang adalah : " . kelllayang($a, $c); ?></h5>
            <?php endif; ?>
        </div>
    </div>
</body>

</html>