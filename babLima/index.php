<?php 

    function println() {
        echo "<br>";
    }

    $fruits = [
        "Apple", "Grape", "Watermellon", "Mango", "Cherry"
    ];

    // Count
    echo "Jumlah Isi dalam Array" . count($fruits);
    println();

    // Sort
    sort($fruits);
    print_r($fruits);
    println();

    // Rsort
    rsort($fruits);
    print_r($fruits);
    println();

    // Array Push
    array_push($fruits, "Pineapple");
    print_r($fruits);
    println();

    // Array Pop
    array_pop($fruits);
    print_r($fruits);
    println();

    // Array Shift
    array_shift($fruits);
    print_r($fruits);
    println();

    // Shuffle
    shuffle($fruits);
    print_r($fruits);
    println();

    // Array Search
    if (array_search("Grape", $fruits) == TRUE) {
        echo "Anda punya buah Anggur";
    }
    println();

    $mahasiswa = [
        "Nama" => "Aksal Syah Falah",
        "NIM" => "M3119004",
        "Asal" => "Surakarta",
    ];

    // Extract
    extract($mahasiswa);
    echo $Nama;
    println();

    // List
    $entities = ["Paijo", "Eagle", "Cedar"];
    list($human, $animal, $plant) = $entities;
    echo $human;
    println();


?>