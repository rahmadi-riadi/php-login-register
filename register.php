<?php

include 'koneksi.php';

if (isset($_POST['register'])) {

    $name = $_POST['name'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = mysqli_query($konek, "INSERT INTO users VALUES('','$name','$username','$email','$password')") or die(mysqli_error($konek));
    header("Location : login.php");
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register Akun</title>

    <link rel="stylesheet" href="css/bootstrap.min.css" />
</head>

<body class="bg-light">

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6">

                <p>&larr; <a href="index.php">Home</a>

                <h4>Bergabunglah bersama ribuan orang lainnya...</h4>
                <p>Sudah punya akun? <a href="login.php">Login di sini</a></p>

                <form action="" method="POST">

                    <div class="form-group">
                        <label for="name">Nama Lengkap</label>
                        <input class="form-control" type="text" name="name" placeholder="Nama kamu" />
                    </div>

                    <div class="form-group">
                        <label for="username">Username</label>
                        <input class="form-control" type="text" name="username" placeholder="Username" />
                    </div>

                    <div class="form-group">
                        <label for="email">Email</label>
                        <input class="form-control" type="email" name="email" placeholder="Alamat Email" />
                    </div>

                    <div class="form-group">
                        <label for="password">Password</label>
                        <input class="form-control" type="password" name="password" placeholder="Password" />
                    </div>

                    <input type="submit" class="btn btn-success btn-block" name="register" value="Daftar" />

                </form>

            </div>

            <div class="col-md-6">

                <img class="img img-responsive" class="img-thumbnail" width="500px" src="img/vaksin.png" />

            </div>

        </div>
    </div>

</body>

</html>