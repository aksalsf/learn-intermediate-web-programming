<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $BangunRuang = $_POST['Bangun-Ruang'];

    /*Balok*/
    if (isset($_POST['panjang']) && isset($_POST['lebar']) && isset($_POST['tinggi'])) {
        $panjang = $_POST['panjang'];
        $lebar = $_POST['lebar'];
        $tinggi = $_POST['tinggi'];
    }
    function luasBalok($panjang, $lebar, $tinggi)
    {
        $luasbalok = 2 * ($panjang * $lebar + $panjang * $tinggi + $lebar * $tinggi);
        return $luasbalok;
    }
    if (isset($_POST['panjang']) && isset($_POST['lebar']) && isset($_POST['tinggi'])) {
        $panjang = $_POST['panjang'];
        $lebar = $_POST['lebar'];
        $tinggi = $_POST['tinggi'];
    }
    function kelilingBalok($panjang, $lebar, $tinggi)
    {
        $kelbalok = 4 * ($panjang + $lebar + $tinggi);
        return $kelbalok;
    }
    if (isset($_POST['panjang']) && isset($_POST['lebar']) && isset($_POST['tinggi'])) {
        $panjang = $_POST['panjang'];
        $lebar = $_POST['lebar'];
        $tinggi = $_POST['tinggi'];
    }
    function volumeBalok($panjang, $lebar, $tinggi)
    {
        $volbalok = $panjang * $lebar * $tinggi;
        return $volbalok;
    }
    /*Tabung*/
    if (isset($_POST['jaritabung'])) {
        $jari = $_POST['jaritabung'];
    }
    function luasTabung($jari)
    {
        $luastabung = 2 * 3.14 * pow($jari, 2);
        return $luastabung;
    }
    if (isset($_POST['jaritabung'])) {
        $jari = $_POST['jaritabung'];
    }
    function kelilingAlasTabung($jari)
    {
        $kelalastabung = 2 * 3.14 * $jari;
        return $kelalastabung;
    }
    if (isset($_POST['jaritabung']) && isset($_POST['tinggitabung'])) {
        $jari = $_POST['jaritabung'];
        $tinggi = $_POST['tinggitabung'];
    }
    function volumeTabung($jari, $tinggi)
    {
        $voltabung = 3.14 * pow($jari, 2) * $tinggi;
        return $voltabung;
    }

    /*Bola*/
    if (isset($_POST['jaribola'])) {
        $jari = $_POST['jaribola'];
    }
    function luasBola($jari)
    {
        $luasbola = 4 * 3.14 * $jari * $jari;
        return $luasbola;
    }
    if (isset($_POST['jaribola'])) {
        $jari = $_POST['jaribola'];
    }
    function KelilingBola($jari)
    {
        $kelbola = 4 / 3 * 3.14 * pow($jari, 2);
        return  $kelbola;
    }
    if (isset($_POST['jaribola'])) {
        $jari = $_POST['jaribola'];
    }
    function VolumeBola($jari)
    {
        $volbola = 4 / 3 * 3.14 * pow($jari, 3);
        return $volbola;
    }

    /*Kerucut*/
    if (isset($_POST['jarikerucut']) && isset($_POST['garispelukis'])) {
        $jari = $_POST['jarikerucut'];
        $garispelukis = $_POST['garispelukis'];
    }
    function LuasKerucut($jari, $garispelukis)
    {
        $luaskerucut = 3.14 * $jari * ($jari + $garispelukis);
        return  $luaskerucut;
    }
    if (isset($_POST['jarikerucut'])) {
        $jari = $_POST['jarikerucut'];
    }
    function KelilingKerucut($jari)
    {
        $kelkerucut = 2 * 3.14 * $jari;
        return $kelkerucut;
    }
    if (isset($_POST['jarikerucut']) && isset($_POST['tinggikerucut'])) {
        $jari = $_POST['jarikerucut'];
        $tinggi = $_POST['tinggikerucut'];
    }
    function VolumeKerucut($jari, $tinggi)
    {
        $volkerucut = 1 / 3 * 3.14 * pow($jari, 2) * $tinggi;
        return $volkerucut;
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
    <link rel="stylesheet" href="css/bootstrap.css">

    <title>Program Menghitung Bangun Ruang</title>
</head>

<body>
    <a href="index.php" class="float-right btn btn-outline-primary">Kembali ke Beranda</a>
    <h1>Program Menghitung Bangun Ruang</h1>
    <div class="col-6 mt-5 mb-5 mx-auto">
        <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <!-- Dropdown -->
            <?php if ($_SERVER["REQUEST_METHOD"] == "POST") : ?>
                <select name="Bangun-Ruang" class="form-control">
                    <option><?php echo $BangunRuang; ?></option>
                </select>
            <?php else : ?>
                <select name="Bangun-Ruang" class="form-control">
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
                    <label>S</label>
                    <input type="number" class="form-control" name="garispelukis" required></input>
                <?php endif; ?>
            <?php endif; ?>
            <button type="submit" name="submit" class="btn btn-success">Submit</button>
        </form>
        <div class="mt-5">
            <?php if (isset($_POST['panjang']) && isset($_POST['lebar']) && isset($_POST['tinggi'])) : ?>
                <h2><?php echo "Luas Permukaan Balok : " . luasBalok($panjang, $lebar, $tinggi); ?></h2>
            <?php endif; ?>
            <?php if (isset($_POST['panjang']) && isset($_POST['lebar']) && isset($_POST['tinggi'])) : ?>
                <h2><?php echo "Keliling Balok : " . kelilingBalok($panjang, $lebar, $tinggi); ?></h2>
            <?php endif; ?>
            <?php if (isset($_POST['panjang']) && isset($_POST['lebar']) && isset($_POST['tinggi'])) : ?>
                <h2><?php echo "Volume Balok : " . volumeBalok($panjang, $lebar, $tinggi); ?></h2>
            <?php endif; ?>

            <?php if (isset($_POST['jaritabung'])) : ?>
                <h2><?php echo "Luas Permukaan Tabung : " . luasTabung($jari); ?></h2>
            <?php endif; ?>
            <?php if (isset($_POST['jaritabung'])) : ?>
                <h2><?php echo "Keliling Alas Tabung : " . kelilingAlasTabung($jari); ?></h2>
            <?php endif; ?>
            <?php if (isset($_POST['jaritabung']) && isset($_POST['tinggitabung'])) : ?>
                <h2><?php echo "Volume Tabung : " . volumeTabung($jari, $tinggi); ?></h2>
            <?php endif; ?>

            <?php if (isset($_POST['jaribola'])) : ?>
                <h2><?php echo "Luas Permukaan Bola : " . luasBola($jari); ?></h2>
            <?php endif; ?>
            <?php if (isset($_POST['jaribola'])) : ?>
                <h2><?php echo "Keliling Bola : " . KelilingBola($jari); ?></h2>
            <?php endif; ?>
            <?php if (isset($_POST['jaribola'])) : ?>
                <h2><?php echo "Volume Bola : " . VolumeBola($jari); ?></h2>
            <?php endif; ?>

            <?php if (isset($_POST['jarikerucut']) && isset($_POST['garispelukis'])) : ?>
                <h2><?php echo "Luas Permukaan Kerucut : " . LuasKerucut($jari, $garispelukis); ?></h2>
            <?php endif; ?>
            <?php if (isset($_POST['jarikerucut'])) : ?>
                <h2><?php echo "Keliling Kerucut : " . KelilingKerucut($jari); ?></h2>
            <?php endif; ?>
            <?php if (isset($_POST['jarikerucut']) && isset($_POST['tinggikerucut'])) : ?>
                <h2><?php echo "Volume Kerucut : " . VolumeKerucut($jari, $tinggi); ?></h2>
            <?php endif; ?>


        </div>
    </div>
</body>

</html>