<?php
include 'koneksi.php';

$id       = $_POST['admin_id'];
$name     = $_POST['name'];
$email    = $_POST['email'];
$password = $_POST['password'];
$role     = $_POST['role'];

$query = "UPDATE admin SET 
            name = '$name', 
            email = '$email', 
            password = '$password', 
            role = '$role' 
          WHERE admin_id = $id";

if (mysqli_query($koneksi, $query)) {
    header("Location: admin.php");
} else {
    echo "Gagal update: " . mysqli_error($koneksi);
}
