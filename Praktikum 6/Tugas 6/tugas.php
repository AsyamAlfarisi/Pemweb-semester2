<?php

    include 'koneksi_tugas.php';
    // show data
    $query = "SELECT * FROM kendaraan";
    $result = $conn->query($query);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<table border="1" style="width:100%">
        <tr>
            <th>ID</th>
            <th>MERK</th>
            <th>MODEL</th>
            <th>BENSIN</th>
            <th>WARNA</th>
        </tr>

        <?php while ($row = $result->fetch_assoc()) :    ?>
        <tr>
            <td> <?= $row['id'] ?> </td>
            <td> <?= $row['merk'] ?></td>
            <td> <?= $row['model'] ?></td>
            <td> <?= $row['bensin'] ?></td>
            <td> <?= $row['warna'] ?></td>
            
        </tr>
        <?php endwhile;   ?>
   
    </table>
    
<br>
    <h2>Tambah Kendaraan</h2>
    <form action="insert_tugas.php" method="POST">
        Merk: <input type="text" name="merk" required><br>
        Model: <input type="text" name="model" required><br>
        Bensin: <input type="text" name="bensin" required><br>
        Warna: <input type="text" name="warna" required><br>
        <input type="submit" value="Tambah">
    </form>        

</body>
</html>