<?php

function luasLingkaran($jari) : float {
    $luas = 3.14*$jari*$jari;
    return $luas;
}

function Kelilinglingkaran($jari): float{
    $keliling = 2 * 3.14 * $jari;
    return $keliling;
}

function Volumebola($jari): float{
    $volume = (4/3) * 3.14 * $jari**3;
    return $volume;
}

function Volumetabung($jari, $tinggi): float{
    $volume = luasLingkaran($jari) * $tinggi;
    return $volume; 
}

function Volumekerucut($jari, $tinggi): float{
    $volume = (1/3) * luasLingkaran($jari) * $tinggi;
    return $volume;
}

$jari = readline('Masukkan nilai jari-jari : ');
$tinggi = readline('Masukkan nilai tinggi : ');

$luas_lingkaran = luasLingkaran($jari);
echo "Luas Lingkaran: {$luas_lingkaran}\n";

$keliling_lingkaran = Kelilinglingkaran($jari);
echo "Keliling Lingkaran: {$keliling_lingkaran}\n";

$Volume_bola = Volumebola($jari);
echo "Volume Bola: {$Volume_bola}\n";

$Volume_tabung = Volumetabung($jari, $tinggi);
echo "Volume Tabung: {$Volume_tabung}\n";

$Volume_kerucut = Volumekerucut($jari, $tinggi);
echo "Volume Kerucut {$Volume_kerucut}\n";
