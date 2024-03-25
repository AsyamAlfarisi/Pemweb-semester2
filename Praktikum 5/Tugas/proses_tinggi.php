<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST')
{
    $nama = $_POST['nama'];
    $tinggi = $_POST['tinggi'];

    include 'Mahasiswa_tugas.php';

    $tinggimahasiswa = new Mahasiswa_tugas($nama,$tinggi);
    $hasilTinggi = $tinggimahasiswa->hasilTinggi();
    $ketentuan = $tinggimahasiswa->ketentuan();
}




?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
 

    <table class="table mt-5">
  <thead>
    <tr>
      <th scope="col">NO</th>
      <th scope="col">Nama</th>
      <th scope="col">Tinggi</th>
      <th scope="col">Hasil</th>
      <th scope="col">Ketentuan</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td> <?= $nama ?> </td>
      <td> <?= $tinggi ?> </td>
      <td> <?= $hasilTinggi ?> </td>
      <td> <?= $ketentuan ?> </td>
    </tr>
  </tbody>
</table>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>