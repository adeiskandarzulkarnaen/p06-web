<!DOCTYPE html>
<html lang="en">

<head>
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <style>
        table {
            border-collapse: collapse;
            width: 50%;
            margin: 20px;
        }

        th,
        td {
            border: 1px solid black;
            text-align: left;
            padding: 8px;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
</head>

<body>
    <div class="kotak">
        <table>
            <tr>
                <th>Id</th>
                <th>Nama</th>
                <th>email</th>
                <th>Aksi</th>
            </tr>
            <?php
            
            include "koneksi.php";
            $data = mysqli_query($koneksi, "SELECT * FROM tamu");
            while ($tamu = mysqli_fetch_array($data)) { ?>
                <tr>
                    <td><?= $tamu["idtamu"] ?></td>
                    <td><?= $tamu["nmtamu"] ?></td>
                    <td><?= $tamu["email"] ?></td>
                    <td>
                        <a href="#">Edit</a>
                        <a href="#">Hapus</a>
                    </td>
                </tr> <?php
            } ?>
        </table>
    </div>
</body>

</html>