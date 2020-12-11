<?php

    // NIM M3119004

    function hitungKeliling($alas, $miring)
    {
        $kelilingJajarGenjang = 2 * ($alas + $miring);
        return "Nilai Keliling Jajar Genjang adalah $kelilingJajarGenjang";
    }

    function hitungLuas($alas, $tinggi)
    {
        $luasJajarGenjang = $alas * $tinggi;
        return "Nilai Luas Jajar Genjang adalah $luasJajarGenjang";
    }

    echo hitungKeliling(90,4) . "<br>";
    echo hitungLuas(90,4);

?>