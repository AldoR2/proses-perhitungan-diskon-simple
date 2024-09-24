<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="container-fluid">
        <div  class="row">
<?php
    if (isset($_POST['proses'])) {
        $angka = $_POST['angka'];
        $form="";
    for ($i=1; $i <= $angka ; $i++) { 
        $form = "Form Mahasiswa ke $i";
    ?>
    <form action="simpan.php" method="post">  
            <legend><?= $form?></legend>
    <div class="mb-3">
        <label class="form-label">Nama</label>
        <input type="text" class="form-control" name="nama[]" placeholder="Masukkan Nama Lengkap">
    </div>
    <div class="mb-3">
        <label class="form-label">Nim</label>
        <input type="text" class="form-control" name="nim[]" placeholder="Masukkan Nim">
    </div>
    <div class="mb-3">
        <label class="form-label">No. Telp</label>
        <input type="text" class="form-control" name="no_telp[]" placeholder="Masukkan No Telepon">
    </div>
    <div class="mb-3">
        <label class="form-label">Jurusan</label>
        <select class="form-select" name="jurusan[]">
            <option selected>Pilih Jurusan</option>
            <option value="Teknologi Informasi">Teknologi Informasi</option>
            <option value="Produksi Pertanian">Produksi Pertanian</option>
            <option value="Teknologi Pertanian">Teknologi Pertanian</option>
            <option value="Peternakan">Peternakan</option>
            <option value="Manajemen Agribisnis">Manajemen Agribisnis</option>
            <option value="Kesehatan">Kesehatan</option>
            <option value="Teknik">Teknik</option>
            <option value="Bisnis">Bisnis</option>
        </select>
  </div>
<?php
}
?>
    <div class="d-grid gap-2">
        <button type="submit" name="simpan" class="btn btn-primary fs-4">Simpan</button>
    </div>
        </form>
        <?php
}
?>
    </div>
    </div>
</body>
</html>