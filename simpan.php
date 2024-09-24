<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <table class="table mt-3">
        <thead>
        <tr>
            <th class="text-center"><h4>NO</h4></th>
            <th class="text-center"><h4>Nama</h4></th>
            <th class="text-center"><h4>NIM</h4></th>
            <th class="text-center"><h4>NO TELEPON</h4></th>
            <th class="text-center"><h4>JURUSAN</h4></th>
        </tr>
        </thead>
    <?php
        if (isset($_POST['simpan'])) {
            $nama=$_POST['nama'];
            $nim=$_POST['nim'];
            $notelp=$_POST['no_telp'];
            $jurusan=$_POST['jurusan'];
            foreach ($nama as $key => $name) {
                
    ?>
    <tbody class="text-center">
        <tr>
            <td><?= $key+1?></td>
            <td><?= $name?></td>
            <td><?= $nim[$key]?></td>
            <td><?= $notelp[$key]?></td>
            <td><?= $jurusan[$key]?></td>
        </tr>
        </tbody>
        <?php } ?>
    </table>
    <?php
                
            }
            ?>
</body>
</html>