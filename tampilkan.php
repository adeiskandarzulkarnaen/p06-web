<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Menampilkan Data Tamu</title>
        <link rel="stylesheet" href="./style.css">
    </head>

    <body>
        <div class="kotak">
            <a href="index.php">tambah data</a>
            <table>
                <tr>
                    <th>id</th>
                    <th>nama</th>
                    <th>email</th>
                    <th>aksi</th>
                </tr>
                <?php 
                    include 'koneksi.php';
                    $data = mysqli_query($koneksi, "SELECT * FROM tamu");
                    
                    while($tamu = mysqli_fetch_array($data)) { ?>
                        <tr>
                            <td> <?= $tamu["idtamu"]?> </td>
                            <td> <?= $tamu["nmtamu"]?> </td>
                            <td> <?= $tamu["email"]?> </td>
                            <td>
                                <a href="#">Edit</a>
                                <a href="#">Hapus</a>
                            </td>
                        </tr> <?php 
                    } 
                ?>
            </table>
        </div>
    </body>

</html>