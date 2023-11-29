<?php

/* membuat koneksi */
$koneksi = mysqli_connect("localhost", "root", "", "db_tamu");

/* cek koneksi, jika database tidak terhubung maka akan menampilkan script alert!!  */
if (!$koneksi) {
    echo "<script> alert('database gagal terhubung!!!') </script>";
}
