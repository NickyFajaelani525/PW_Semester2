


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>tugas praktikum_5</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <!-- situs untuk mencari logo -->
    <link rel="stylesheet" href="assets/plugins/fontawesome-free/css/all.min.css"> 
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="assets/css/adminlte.min.css">
</head>
<body class="hold-transition login-page">
    <div class="login-box">
        <div class="login-logo">
           <a><b><u>Form</u></b>Tinggi Badan Pria</a>
        </div>
        <!-- /.login-logo -->
        <div class="card">
            <div class="card-body login-card-body">
                <form action="proses.php" method="post">
                    <div class="input-group mb-3">
                        <input type="text" name="nama" class="form-control" placeholder="Masukan Nama"required>
                        <div class="input-group-append">
                            <div class="input-group-text">
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="number" id="nilai" name="nilai" class="form-control" placeholder="Masukan Tinggi Badan"required>
                        <div class="input-group-append">
                            <div class="input-group-text">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-4">
                            <button type= "submit" class="btn btn-primary btn-block">Cek</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
