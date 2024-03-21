
<?php

error_reporting(0);

session_start();

if(isset($_POST['login'])){

    $user = $_POST['username'];
    $pass = $_POST['password'];

    if($user == 'nicky' AND $pass == '123'){

        //membuat session
        session_start();

        $_SESSION['berhasil'] = true ;

        header("Location: welcome.php");
        
    }else{
        $salah ="<p style='color: red; text-align: center;''>username atau password anda salah!</p>";
       
    }



} 




?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>tugas praktikum_4</title>

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
           <a><b>Nicky<u>Food</u></b></a>
        </div>
        <!-- /.login-logo -->
        <div class="card">
            <div class="card-body login-card-body">
                <?php echo $salah; ?>
                <form action="" method="post">
                    <div class="input-group mb-3">
                        <input type="text" name="username" class="form-control" placeholder="Masukan Nama"required>
                        <div class="input-group-append">
                            <div class="input-group-text">
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" name="password" class="form-control" placeholder="Masukan Password"required>
                        <div class="input-group-append">
                            <div class="input-group-text">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-4">
                            <button type= "submit" name="login" class="btn btn-primary btn-block">Masuk</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>