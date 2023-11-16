<?php
include 'koneksi.php';
$id = $_GET['id_dosen'];
$dosen = mysqli_query($koneksi, "select * from dosen where id_dosen='$id'");
$row = mysqli_fetch_array($dosen);
$matkul = [1, 2, 3];
function active_radio_button($value, $input)
{
    $result = $value == $input ? 'checked' : '';
    return $result;
}
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Data</title>
</head>

<body>

    <form action="edit-dosen.php" method="post">
        <input type="hidden" value=" <?= $row['id_dosen']; ?>" name="id_dosen">
        <table>
            <tr>
                <td>NIP</td>
                <td><input type="text" value=" <?= $row['nip'] ?> " name="nip"></td>
            </tr>
            <tr>
                <td>NAMA</td>
                <td><input type="text" value=" <?= $row['nama'] ?> " name="nama"></td>
            </tr>
            <tr>
                <ol>
                    <p>KODE MATA KULIAH</p>
                    <li>Pemrograman Web</li>
                    <li>Algoritma</li>
                    <li>Database</li>
                </ol>
            </tr>
            <tr>
                <td>MATKUL </td>
                <td>
                    <select name="matkul">
                        <?php
                        foreach ($matkul as $m) {
                            echo "<option value='$m'>";
                            // echo $row['jurusan'] == $j ? 'selected="selected' : '';
                            echo ">$m</option>";
                          
                        }
                        ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td colspan="2"><button type="submit" value="simpan">SIMPAN PERUBAHAN</button>
                    <a href="admin-page.php">Kembali</a>
                </td>
            </tr>
        </table>
    </form>
</body>

</html>