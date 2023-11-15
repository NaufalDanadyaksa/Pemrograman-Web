<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="sign-up.css">
</head>

<body>
    <!-- Navbar -->

    <nav class="navbar navbar-expand-lg bg-dark ">
        <div class="container-fluid">
            <a class="navbar-brand text-white" href="#">Sistem Informasi Mahasiswa</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse " id="navbarNav">

            </div>
        </div>
    </nav>

    <!-- Sign Up -->
    <div class="signup-form">
        <form action="sign-up.php" method="post">
            <h2>Sign Up</h2>
            <hr>
            <div class="form-group">
                <label>Nama</label>
                <input type="text" class="form-control" name="nama" required="required">
            </div>
            <div class="form-group">
                <label>NIM</label>
                <input type="text" class="form-control" name="nim" required="required">
            </div>
            <div class="form-group">
                <label>Kelamin</label> <br>
                <input type="radio" name="jenis_kelamin" value="L"> Laki laki
                <input type="radio" name="jenis_kelamin" value="P"> Perempuan
            </div>
            <div class="form-group">
                <Label>Jurusan</Label>
                <select class="form-select" aria-label="Default select example" name="jurusan" required>
                    <option value="Teknik Informatika">Teknik Informatika</option>
                    <option value="Teknik Mesin">Teknik Mesin</option>
                    <option value="Kedokteran">Kedokteran</option>
                </select>
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" class="form-control" name="password" required="required">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-block btn-lg">Sign Up</button>
            </div>

        </form>
        <div class="text-center">Already have an account? <a href="index.php">Login here</a></div>
    </div>
    <h1></h1>
</body>

</html>