<?php
    $file = "file.txt"; // Untuk menyimpan nama file
    if (@unlink($file)) {
    // @ berfungsi untuk menyembunyikan pesan warning bila file tidak ada
        echo "File berhasil dihapus!";
    } else {
        echo "File tidak ada!";
    }
?>