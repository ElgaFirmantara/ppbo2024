<?php
date_default_timezone_set("Asia/Jakarta");
$nama = readline('Masukkan nama Anda: ');
$waktu = date('H');
$jam = date('H:i');
if ($waktu >= 5 and $waktu <=11) {
    echo " Selamat Pagi, {$nama} sekarang pukul {$jam}\n";
} elseif ($waktu >= 11 and $waktu <=15) {
    echo " Selamat Siang, {$nama} sekarang pukul {$jam}\n";
} elseif ($waktu >= 15 and $waktu <=19) {
    echo " Selamat Sore, {$nama} sekarang pukul {$jam}\n";
} else {
    echo " Selamat Malam, {$nama} sekarang pukul {$jam}\n";
}
