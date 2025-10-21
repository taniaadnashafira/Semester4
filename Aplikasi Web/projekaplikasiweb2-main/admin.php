<?php
include 'koneksi.php';

// Ambil data admin
$query = "SELECT * FROM admin";
$result = mysqli_query($koneksi, $query);

// Cek kalau query error
if (!$result) {
    die("Query error: " . mysqli_error($koneksi));
}
?>

<h2>Daftar Admin</h2>
<table border="1" cellpadding="10">
    <tr>
        <th>ID</th>
        <th>Nama</th>
        <th>Email</th>
        <th>Password</th>
        <th>Role</th>
        <th>Aksi</th>
    </tr>

    <?php while ($row = mysqli_fetch_assoc($result)) : ?>
    <tr>
        <td><?= $row['admin_id']; ?></td>
        <td><?= $row['name']; ?></td>
        <td><?= $row['email']; ?></td>
        <td><?= $row['password']; ?></td>
        <td><?= $row['role']; ?></td>
        <td>
            <a href="edit_admin.php?id=<?= $row['admin_id']; ?>">Edit</a> |
            <a href="hapus_admin.php?id=<?= $row['admin_id']; ?>" onclick="return confirm('Yakin mau hapus?');">Hapus</a>
        </td>
    </tr>
    <?php endwhile; ?>
</table>

<h2>Tambah Admin Baru</h2>
<form action="tambah_admin.php" method="post">
    <label>Nama:</label><br>
    <input type="text" name="name" required><br><br>

    <label>Email:</label><br>
    <input type="email" name="email" required><br><br>

    <label>Password:</label><br>
    <input type="password" name="password" required><br><br>

    <label>Role:</label><br>
    <input type="text" name="role" required><br><br>

    <button type="submit">Tambah</button>
</form>
