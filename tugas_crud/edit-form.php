<?php
include 'koneksi.php';
$id = $_GET['id_mhs'];
$mahasiswa = mysqli_query($koneksi, "select * from mahasiswa where id_mhs='$id'");
$row = mysqli_fetch_array($mahasiswa);
$jurusan = ["TEKNIK INFORMATIKA", "TEKNIK MESIN", "TEKNIK KIMIA"];
$level = ["admin", "user"];
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
    <form action="edit.php" method="post">
        <input type="hidden" value=" <?= $row['id_mhs']; ?>" name="id_mhs">
        <table>
            <tr>
                <td>NIM</td>
                <td><input type="text" value=" <?= $row['nim'] ?> " name="nim"></td>
            </tr>
            <tr>
                <td>NAMA</td>
                <td><input type="text" value=" <?= $row['nama'] ?> " name="nama"></td>
            </tr>
            <tr>
                <td>JENIS KELAMIN</td>
                <td>
                    <input type="radio" name="jenis_kelamin" value="L" <?php echo active_radio_button("L", $row['jenis_kelamin']) ?>>Laki laki
                    <input type="radio" name="jenis_kelamin" value="P" <?php echo active_radio_button("P", $row['jenis_kelamin']) ?>>Perempuan
                </td>
            </tr>
            <tr>
                <td>JURUSAN </td>
                <td>
                    <select name="jurusan">
                        <?php
                        foreach ($jurusan as $j) {
                            echo "<option value='$j'>";
                            // echo $row['jurusan'] == $j ? 'selected="selected' : '';
                            echo ">$j</option>";
                        }
                        ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Role</td>
                <td>
                    <select name="level">
                        <?php
                        foreach ($level as $l) {
                            echo "<option value='$l'";
                            echo $row['level'] == $l ? 'selected="selected"' : '';
                            echo ">$l</option>";
                        }
                        ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td>ALAMAT</td>
                <td><input value="<?= $row['alamat']; ?>" type="text" name="alamat"></td>
            </tr>
            <tr>
                <td colspan="2"><button type="submit" value="simpan">SIMPAN PERUBAHAN</button>
                    <a href="tes.php">Kembali</a>
                </td>
            </tr>
        </table>
    </form>
</body>

</html>