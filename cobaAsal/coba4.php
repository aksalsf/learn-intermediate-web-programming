<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $BangunRuang = $_POST['bangun-ruang'];

    if (isset($_POST['panjang']) && isset($_POST['lebar']) && isset($_POST['tinggi'])) {
        $panjang = $_POST['panjang'];
        $lebar = $_POST['lebar'];
        $tinggi = $_POST['tinggi'];
        $kelbalok = 4 * ($panjang + $lebar + $tinggi);
        $volbalok = $panjang * $lebar * $tinggi;
    }
    function luasBalok($panjang, $lebar, $tinggi)
    {
        $luasbalok = 2 * ($panjang * $lebar + $panjang * $tinggi + $lebar * $tinggi);
        return $luasbalok;
    }
    if (isset($_POST['jaritabung'])) {
        $jari = $_POST['jaritabung'];
        $tinggi = $_POST['tinggitabung'];
        $luastabung = 2 * 3.14 * $jari * $jari;
        $kelalastabung = 2 * 3.14 * $jari;
        $voltabung = 3.14 * $jari * $jari * $tinggi;
    }
    if (isset($_POST['jaribola'])) {
        $jari = $_POST['jaribola'];
        $luasbola = 4 * 3.14 * $jari * $jari;
        $kelbola = 4 / 3 * 3.14 * $jari * $jari;
        $volbola = 4 / 3 * 3.14 * $jari * $jari * $jari;
    }
    if (isset($_POST['jarikerucut'])) {
        $jari = $_POST['jarikerucut'];
        $garispelukis = $_POST['garispelukis'];
        $tinggi = $_POST['tinggikerucut'];
        $luaskerucut = 3.14 * $jari * ($jari + $garispelukis);
        $kelkerucut = 2 * 3.14 * $jari;
        $volkerucut = 1 / 3 * 3.14 * $jari * $jari * $tinggi;
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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Program Menghitung Bangun Ruang</title>
</head>

<body>
    <h1>Program Menghitung Bangun Ruang</h1>
    <div class="col-6 mt-5 mb-5 mx-auto">
        <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <!-- Dropdown -->
            <?php if ($_SERVER["REQUEST_METHOD"] == "POST") : ?>
                <select name="bangun-ruang" class="form-control">
                    <option value="<?php echo $BangunRuang; ?>">
                        <?php echo $BangunRuang; ?>
                    </option>
                </select>
            <?php else : ?>
                <select name="bangun-ruang" class="form-control">
                    <option>Balok</option>
                    <option>Tabung</option>
                    <option>Bola</option>
                    <option>Kerucut</option>
                </select>
            <?php endif; ?>
            <?php if ($_SERVER["REQUEST_METHOD"] == "POST") : ?>
                <?php if ($BangunRuang == "Balok") : ?>
                    <label>Panjang</label>
                    <input type="number" class="form-control" name="panjang" required></input>
                    <label>Lebar</label>
                    <input type="number" class="form-control" name="lebar" required></input>
                    <label>Tinggi</label>
                    <input type="number" class="form-control" name="tinggi" required></input>
                <?php endif; ?>

                <?php if ($BangunRuang == "Tabung") : ?>
                    <label>Jari-Jari</label>
                    <input type="number" class="form-control" name="jaritabung" required></input>
                    <label>Tinggi</label>
                    <input type="number" class="form-control" name="tinggitabung" required></input>
                <?php endif; ?>

                <?php if ($BangunRuang == "Bola") : ?>
                    <label>Jari-Jari</label>
                    <input type="number" class="form-control" name="jaribola" required></input>
                <?php endif; ?>

                <?php if ($BangunRuang == "Kerucut") : ?>
                    <label>Jari-Jari</label>
                    <input type="number" class="form-control" name="jarikerucut" required></input>
                    <label>Tinggi</label>
                    <input type="number" class="form-control" name="tinggikerucut" required></input>
                    <label>garispelukis</label>
                    <input type="number" class="form-control" name="garispelukis" required></input>
                <?php endif; ?>
            <?php endif; ?>
            <button type="submit" name="submit" class="btn btn-success">Submit</button>
        </form>
        <div class="mt-5">
            <?php if ((isset($_POST['panjang'])) && isset($_POST['lebar']) && isset($_POST['tinggi'])) : ?>
                <h2><?php echo "Luas Balok : " . luasbalok($panjang, $lebar, $tinggi); ?></h2>
            <?php endif; ?>
            <?php if (isset($kelbalok)) : ?>
                <h2><?php echo "Keliling Balok : " . $kelbalok; ?></h2>
            <?php endif; ?>
            <?php if (isset($volbalok)) : ?>
                <h2><?php echo "Volume Balok : " . $volbalok; ?></h2>
            <?php endif; ?>

            <?php if (isset($luastabung)) : ?>
                <h2><?php echo "Luas Tabung : " . $luastabung; ?></h2>
            <?php endif; ?>
            <?php if (isset($kelalastabung)) : ?>
                <h2><?php echo "Keliling Alas Tabung : " . $kelalastabung; ?></h2>
            <?php endif; ?>
            <?php if (isset($voltabung)) : ?>
                <h2><?php echo "Volume Tabung : " . $voltabung; ?></h2>
            <?php endif; ?>

            <?php if (isset($luasbola)) : ?>
                <h2><?php echo "Luas Bola : " . $luasbola; ?></h2>
            <?php endif; ?>
            <?php if (isset($kelbola)) : ?>
                <h2><?php echo "Keliling Bola : " . $kelbola; ?></h2>
            <?php endif; ?>
            <?php if (isset($volbola)) : ?>
                <h2><?php echo "Volume Bola : " . $volbola; ?></h2>
            <?php endif; ?>

            <?php if (isset($luaskerucut)) : ?>
                <h2><?php echo "Luas Kerucut : " . $luaskerucut; ?></h2>
            <?php endif; ?>
            <?php if (isset($kelkerucut)) : ?>
                <h2><?php echo "Keliling Kerucut : " . $kelkerucut; ?></h2>
            <?php endif; ?>
            <?php if (isset($volkerucut)) : ?>
                <h2><?php echo "Volume Kerucut : " . $volkerucut; ?></h2>
            <?php endif; ?>


        </div>
    </div>
</body>

</html>