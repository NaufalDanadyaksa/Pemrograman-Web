<?php
include "koneksi.php";
$nip = $_POST['nip'];
$nama = $_POST['nama'];
$matkul = $_POST['matkul'];


$query = "INSERT INTO dosen SET nip='$nip', nama='$nama', matkul='$matkul'";
mysqli_query($koneksi, $query);
header("location:admin-page.php");
