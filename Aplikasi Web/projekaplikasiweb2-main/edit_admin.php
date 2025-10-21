<?php
include 'koneksi.php';

$id = $_GET['id'];
$query = mysqli_query($koneksi, "SELECT * FROM admin WHERE admin_id = $id");
$data = mysqli_fetch_assoc($query);
?>

<h2>Edit Admin</h2>
<form action="update_admin.php" method="post">
    <input type="hidden" name="admin_id" value="<?= $data['admin_id']; ?>">
    
    <label>Nama:</label><br>
    <input type="text" name="name" value="<?= $data['name']; ?>" required><br><br>

    <label>Email:</label><br>
    <input type="email" name="email" value="<?= $data['email']; ?>" required><br><br>

    <label>Password:</label><br>
    <input type="password" name="password" value="<?= $data['password']; ?>" required><br><br>

    <label>Role:</label><br>
    <input type="text" name="role" value="<?= $data['role']; ?>" required><br><br>

    <button type="submit">Update</button>
</form>
