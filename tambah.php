<?php
include "functions.php";
if (!isset($_SESSION['login'])) {
    header("location: login.php");
    exit;
}
if (isset($_POST['tambah'])) {
    if (tambah($_POST) > 0) {
        header("location: index.php");
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah</title>
</head>

<body>
    <h1>Tambah</h1>
    <form method="post">
        <label for="kelas">Kelas</label>
        <input type="text" name="kelas" id="kelas">
        <button type="submit" name="tambah">Tambah</button>
    </form>
</body>

</html>