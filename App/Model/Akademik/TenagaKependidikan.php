<?php

namespace App\Model\Akademik;
class TenagaKependidikan extends Pegawai {
    public int $gaji_pokok;

    public function cuti(): void {
        echo "Cuti telah dilakukan";
    }
}
