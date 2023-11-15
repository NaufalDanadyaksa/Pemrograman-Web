<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>

<body>
    <!-- Navbar -->

    <nav class="navbar navbar-expand-lg bg-dark ">
        <div class="container-fluid">
            <a class="navbar-brand text-white" href="index.php">Sistem Informasi Mahasiswa</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse " id="navbarNav">

            </div>
        </div>
    </nav>
    <!-- Table -->

    <div style="margin-top: 2px; width: 90%; margin-left: 4px;">
        <h1>Selamat Datang</h1>
        <table class="table table-striped table-dark">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nim</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Kelamin</th>
                    <th scope="col">Jurusan</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include 'koneksi.php';
                $mahasiswa = mysqli_query($koneksi, "SELECT * from mahasiswa");
                $no = 1;
                foreach ($mahasiswa as $row) {
                    $jenis_kelamin = $row['jenis_kelamin'] == 'P' ? 'Perempuan' : 'Laki laki';
                    echo "<tr>
        <td>$no</td>
        <td>" . $row['nim'] . "</td>
        <td>" . $row['nama'] . "</td>
        <td>" . $jenis_kelamin, "</td>
        <td>" . $row['jurusan'], "</td>
        
        </tr>";
                    $no++;
                }
                ?>
            </tbody>
        </table>
    </div>


</body>

</html>