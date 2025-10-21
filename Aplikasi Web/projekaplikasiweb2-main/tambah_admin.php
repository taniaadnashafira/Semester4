<?php
include 'koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name     = $_POST['name'];
    $email    = $_POST['email'];
    $password = $_POST['password'];
    $role     = $_POST['role'];

    $sql = "INSERT INTO admin (name, email, password, role) 
            VALUES ('$name', '$email', '$password', '$role')";

    if (mysqli_query($koneksi, $sql)) {
        header("Location: admin.php");
    } else {
        echo "Gagal tambah data admin: " . mysqli_error($koneksi);
    }
}
?>
