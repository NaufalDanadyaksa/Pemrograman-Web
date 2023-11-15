<?php
include 'koneksi.php';
$id_mhs             = $_POST['id_mhs'];
$nim                = $_POST['nim'];
$nama               = $_POST['nama'];
$jurusan            = $_POST['jurusan'];
$jenis_kelamin      = $_POST['jenis_kelamin'];
$level              = $_POST['level'];

$query = "UPDATE mahasiswa SET nim='$nim', nama='$nama', jurusan='$jurusan', jenis_kelamin='$jenis_kelamin', level='$level' WHERE id_mhs='$id_mhs'";
mysqli_query($koneksi, $query);
header("location:admin-page.php");
