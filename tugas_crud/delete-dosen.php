<?php
include 'koneksi.php';
$id_dosen = $_GET['id_dosen'];
$query = "DELETE from dosen where id_dosen='$id_dosen'";
mysqli_query($koneksi, $query);
header("location:admin-page.php");