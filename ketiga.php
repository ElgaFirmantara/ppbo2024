<?php
class Lingkaran
{
    const PHI = 3.14;
    public $jari_jari;

    public function __construct($jari_jari) {
        $this->jari_jari = $jari_jari;
    }

    public function luas() : float {
        return self::PHI*$this->jari_jari*$this->jari_jari;
    }


    public function keliling() : float {
        return 2*self::PHI*$this->jari_jari;
    }
}


class Bola
{
    const PHI = 3.14;
    public $jari_jari;
    public function __construct($jari_jari) {
        $this->jari_jari = $jari_jari;
    }
    public function volume() : float {
        return (4/3)*self::PHI*pow($this->jari_jari,3);
    }
}


class Tabung
{
    const PHI = 3.14;
    public $jari_jari;
    public $tinggi;
    public function __construct($jari_jari, $tinggi) {
        $this->jari_jari = $jari_jari;
        $this->tinggi = $tinggi;
    }
    public function volume() : float {
        return self::PHI*pow($this->jari_jari,2)*$this->tinggi;
    }
}


class Kerucut
{
    const PHI = 3.14;
    public $jari_jari;
    public $tinggi;
    public function __construct($jari_jari, $tinggi) {
        $this->jari_jari = $jari_jari;
        $this->tinggi = $tinggi;
    }
    public function volume() : float {
        return (1/3)*self::PHI*pow($this->jari_jari,2)*$this->tinggi;
    }
}

$nasi_tumpeng = new Kerucut(4,10);
$hasil = $nasi_tumpeng-> volume();
echo "Volume Kerucut : {$hasil} \n";

$lingkaran = new Lingkaran(4);
$hasil = $lingkaran ->luas();
$hasil2 = $lingkaran -> keliling();
echo "Luas Lingkaran : {$hasil} \n";
echo "Keliling Lingkaran : {$hasil2} \n";

$bola = new Bola(4);
$hasil = $bola -> volume();
echo "Volume Bola : {$hasil} \n";

$Tabung = new Tabung(4,10);
$hasil = $Tabung -> volume();
echo "Volume Tabung : {$hasil} \n";

?>