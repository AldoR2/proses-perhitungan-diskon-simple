<?php

class Perhitungan{

    public $total_bayar;
    public $diskon;
    public $bayar;

    public function __construct($total_bayar, $diskon,  $bayar) {
        $this->total_bayar = $total_bayar;
        $this->diskon = $diskon;
        $this->bayar = $bayar;

    }

    public function infoHarga() {
        return "Item berharga Rp" . $this->total_bayar . " mendapatkan diskon sebesar " . $this->diskon . "%, kemudian total yang 
        harus dibayarkan oleh pembeli adalah sebesar Rp" . $this->bayar;
    }

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form method="POST">
<label>Total Bayar</label>
<input type="number" name="total_bayar" id="total_bayar">

<label>Diskon (%)</label>
<input type="text" name="diskon" id="diskon">

<button type="submit" name="submit">Submit</button>

</form>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Mengambil data dari form
    $total_bayar = (float) $_POST['total_bayar'];
    $diskon = (float) $_POST['diskon'];

    // Menghitung diskon dan total yang harus dibayar
    $total_diskon = $total_bayar * ($diskon / 100);
    $bayar = $total_bayar - $total_diskon;

    // Membuat objek dari class Perhitungan
    $transaksi1 = new Perhitungan($total_bayar, $diskon, $bayar);

    // Menampilkan hasil
    echo $transaksi1->infoHarga();
}
?>
</body>
</html>



