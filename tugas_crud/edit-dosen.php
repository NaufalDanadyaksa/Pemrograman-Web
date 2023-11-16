<?php
include 'koneksi.php';
$id_dosen             = $_POST['id_dosen'];
$nip                = $_POST['nip'];
$nama               = $_POST['nama'];
$matkul            = $_POST['matkul'];

$query = "UPDATE dosen SET nip='$nip', nama='$nama', matkul='$matkul' WHERE id_dosen='$id_dosen'";
mysqli_query($koneksi, $query);
header("location:admin-page.php");
