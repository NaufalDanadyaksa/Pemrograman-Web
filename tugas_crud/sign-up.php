<?php
include "koneksi.php";
$nim = $_POST['nim'];
$nama = $_POST['nama'];
$jurusan = $_POST['jurusan'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$password = $_POST['password'];
$level = "user";

$query = "INSERT INTO mahasiswa SET nim='$nim', nama='$nama', jurusan='$jurusan'
        , jenis_kelamin='$jenis_kelamin',password='$password', level='$level'";
mysqli_query($koneksi, $query);
header("location:index.php");
