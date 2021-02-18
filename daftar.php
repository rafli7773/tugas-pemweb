<?php
include 'functions.php';
if (isset($_SESSION['login'])) {
    header("location: index.php");
}
if (isset($_POST['daftar'])) {
    if (daftar($_POST) > 0) {
        $_SESSION['berhasilDaftar'] = true;
        header("location: login.php");
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="materialize.min.css">
    <title>Halaman Daftar</title>
</head>

<body>
    <div class="container">
        <div class="row valign-wrapper" style="margin-top: 50px">
            <div class="col s12">
                <div class="card">
                    <div class="card-content">
                        <span class="card-title center">Daftar</span>
                        <form action="" method="post">
                            <div class="row">
                                <div class="col input-field m12 s12">
                                    <input type="text" name="username" required id="username" class="validate" autocomplete="off">
                                    <label for="username">Username</label>
                                </div>
                                <div class="col input-field m12 s12">
                                    <input type="password" name="password" required id="password" class="validate">
                                    <label for="password">Password</label>
                                </div>
                                <div class="col input-field m12 s12">
                                    <input type="password" name="konfirmasiPassword" class="validate" required id="konfirmasiPassword">
                                    <label for="konfirmasiPassword">Konfirmasi Password</label>
                                </div>
                            </div>
                            <button type="submit" name="daftar" class="btn waves-light waves-effect">Daftar</button>
                        </form>
                        <div class="center"><a href="login.php">Login</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php
    if (isset($_SESSION['passwordTidakSama'])) : ?>
        <div class="passwordTidakSama"></div>
    <?php endif;
    unset($_SESSION['passwordTidakSama']);
    ?>
    <?php
    if (isset($_SESSION['dipake'])) : ?>
        <div class="dipake"></div>
    <?php endif;
    unset($_SESSION['dipake']);
    ?>

    <script src="materialize.min.js"></script>
    <script src="sweetalert2.all.min.js"></script>
    <script src="swal.js"></script>
</body>

</html>