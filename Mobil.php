<?php
class Mobil {
    public $merk;
    public $warna;

    public function __construct($merk, $warna) {
        $this->merk = $merk;
        $this->warna = $warna;
}

    public function infoMobil() {
        return "Mobil ini bermerk " . $this->merk . " dan berwarna " . $this->warna;
    }

}

$mobil1 = new Mobil("Toyota", "Merah");
echo $mobil1->infoMobil();
