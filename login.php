<?php
include "functions.php";

if (isset($_SESSION['login'])) {
    header("location: index.php");
}

if (isset($_POST['login'])) {
    login($_POST);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="materialize.min.css">
    <title>Halaman Login</title>
</head>

<body>
    <div class="container">
        <div class="row valign-wrapper" style="margin-top: 100px">
            <div class="col s12">
                <div class="card">
                    <div class="card-content">
                        <span class="card-title center">Login</span>
                        <form action="" method="post">
                            <div class="row">
                                <div class="col input-field m12 s12">
                                    <input type="text" name="username" id="username" class="validate" autocomplete="off">
                                    <label for="username">Username</label>
                                </div>
                                <div class="col input-field m12 s12">
                                    <input type="password" name="password" id="password" class="validate">
                                    <label for="password">Password</label>
                                </div>
                            </div>
                            <button type="submit" name="login" class="btn waves-light waves-effect">Login</button>
                        </form>
                        <div class="center"><a href="daftar.php">Daftar</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <?php if (isset($_SESSION['berhasilDaftar'])) : ?>
        <div class="berhasilDaftar"></div>
    <?php endif;
    unset($_SESSION['berhasilDaftar']) ?>

    <?php if (isset($_SESSION['salahLogin'])) : ?>
        <div class="salahLogin"></div>
    <?php endif;
    unset($_SESSION['salahLogin']) ?>

    <script src="materialize.min.js"></script>
    <script src="sweetalert2.all.min.js"></script>
    <script src="swal.js"></script>
</body>

</html>