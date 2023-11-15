<?php
include 'koneksi.php';

$nama = $_POST['nama'];
$password = $_POST['password'];

// Lakukan query ke database
$query = "SELECT * FROM mahasiswa WHERE nama='$nama' AND password='$password'";
$result = $koneksi->query($query);

if ($result->num_rows == 1) {
    // Pengguna berhasil login
    $row = $result->fetch_assoc();
    $level = $row['level'];

    // Redirect ke halaman sesuai level
    if ($level == 'admin') {
        header("Location: admin-page.php");
    } else {
        header("Location: user-page.php");
    }
} else {
    // Pengguna gagal login
    echo "Login failed. Check your username and password.";
}

$koneksi->close();
