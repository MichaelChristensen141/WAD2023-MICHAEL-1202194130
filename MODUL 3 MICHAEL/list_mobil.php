<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Mobil</title>
</head>
<body>
<table align="center" border="1" cellpadding="20" cellspacing="0">
    <tr align="center">
        <th>No.</th>
        <th>Nama Mobil</th>
        <th>Brand Mobil</th>
        <th>Warna Mobil</th>
        <th>Tipe Mobil</th>
        <th>Harga Mobil</th> 
        <th>Detail</th>
    </tr>



    <?php $i = 1;
    include("navbar.php");
    include ('connect.php');
    $result = mysqli_query($conn,"SELECT * FROM showroom_mobil");
    while($showroom_mobil = mysqli_fetch_array($result))
    ?>
    <center>
        <div class="container">
            <h1>List Mobil</h1>
        <td><?php echo $i++;?></td>
        <td align="center"><?php echo $showroom_mobil['nama_mobil'];?></td>
        <td align="center"><?php echo $showroom_mobil['brand_mobil'];?></td>
        <td align="center"><?php echo $showroom_mobil['warna_mobil'];?></td>
        <td align="center"><?php echo $showroom_mobil['tipe_mobil'];?></td>
        <td align="center"><?php echo $showroom_mobil['harga_mobil'];?></td>
        <td>
            <a href="form update.php?id=<?php echo $showroom_mobil['no']; ?>" class="btn btn-primary">Ubah</a>
            <a href="delete.php?id=<?php echo $showroom_mobil['no']; ?>" class="btn btn-danger">Hapus</a>
            <?php 
            include("connect.php");

            // Buatlah query untuk mengambil data dari database (gunakan query SELECT)

            
            

            // Buatlah perkondisian dimana: 
            // 1. a. Apabila ada data dalam database, maka outputnya adalah semua data dalam database akan ditampilkan dalam bentuk tabel 
            //       (gunakan num_rows > 0, while, dan mysqli_fetch_assoc())
            //    b. Untuk setiap data yang ditampilkan, buatlah sebuah button atau link yang akan mengarahkan web ke halaman 
            //       form_detail_mobil.php dimana halaman tersebut akan menunjukkan seluruh data dari satu mobil berdasarkan id
            // 2. Apabila tidak ada data dalam database, maka outputnya adalah pesan 'tidak ada data dalam tabel'

            //<!--  **********************  1  **************************     -->

            
            







            //<!--  **********************  1  **************************     -->

            //<!--  **********************  2  **************************     -->

            
            

            
            
            //<!--  **********************  2  **************************     -->
            ?>
        </div>
    </center>
</body>
</html>
