<?php

class Warna{

    public $nama;
    public $warna;
    public $jumlah;


    public function __construct($nama, $warna, $jumlah) {
        $this->nama = $nama;
        $this->warna = $warna;
        $this->jumlah = $jumlah;

    }

    public function infoMotor() {
        return "Motor ini dimiliki oleh" . $this->nama . " dan berwarna " . $this->warna . " kemudian berjumlah " . $this->jumlah;
    }


}

$motor1 = new Warna("Alduy", "Merah", "2");
echo $motor1->infoMotor();