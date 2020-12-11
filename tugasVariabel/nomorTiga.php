<?php

    // NIM M3119004
    $pi = 3.14;
    function hitungLuasPermukaan($jari, $tinggi)
    {
        global $pi;
        return $luasPermukaan = 2 * $pi * $jari * ($jari + $tinggi);
    }

    function hitungVolume($jari, $tinggi)
    {
        global $pi;
        return $volume = $pi * $jari * $jari  * $tinggi;
    }

    $jari = 4;
    $tinggi = 90;

    echo "Bila aku punya tabung dengan jari-jari $jari dan tingginya $tinggi, maka luas permukaannya adalah " . hitungLuasPermukaan($jari, $tinggi) . " dengan luas " . hitungVolume($jari, $tinggi);

?>