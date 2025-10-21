<?php
include 'koneksi.php';

$id = $_GET['id'];
$query = "DELETE FROM admin WHERE admin_id = $id";

if (mysqli_query($koneksi, $query)) {
    header("Location: admin.php");
} else {
    echo "Gagal hapus: " . mysqli_error($koneksi);
}
