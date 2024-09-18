<?php

// File: App/Admin/TenagaKependidikan.php
namespace App\Admin;

class TenagaKependidikan extends Pegawai {
    public int $gaji_pokok;

    public function cuti(): void {
        echo "Cuti telah dilakukan";
    }
}
