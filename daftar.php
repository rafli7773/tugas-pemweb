<?php
include 'functions.php';
if (isset($_POST['daftar'])) {
    if (daftar($_POST) > 0) {
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
    <title>Halaman Daftar</title>
</head>

<body>
    <h1>Halaman Daftar</h1>
    <form action="" method="post">
        <label for="username">username</label>
        <input type="text" name="username" id="username">
        <br><br>

        <label for="password">Password</label>
        <input type="password" name="password" id="password">
        <br><br>

        <label for="konfirmasiPassword">Konfirmasi Password</label>
        <input type="password" name="konfirmasiPassword" id="konfirmasiPassword">
        <br><br>

        <button type="submit" name="daftar">Daftar</button>
    </form>
</body>

</html>