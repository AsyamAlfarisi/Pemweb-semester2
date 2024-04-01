<?php

include 'koneksi_tugas.php';

$merk = $_POST['merk'];
$model = $_POST['model'];
$bensin = $_POST['bensin'];
$warna = $_POST['warna'];

$query = "INSERT INTO kendaraan (merk, model, bensin, warna)
          VALUES ('$merk', '$model', '$bensin', '$warna') ";

if($conn->query($query) === TRUE ){
    header("Location: tugas.php");
} else {
    echo "Error: " . $query . "<br>" . $conn->error;
}

$conn->close();

?>