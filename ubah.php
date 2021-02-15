<?php
include "functions.php";
if (!isset($_SESSION['login'])) {
    header("location: login.php");
    exit;
}
$id = $_GET['id'];
$kelas = handleKelas("SELECT * FROM kelas WHERE id = $id")[0];
if (isset($_POST['ubah'])) {
    if (ubah($_POST) > 0) {
        header("location:index.php");
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah</title>
</head>

<body>
    <h1>Ubah</h1>
    <form method="post">
        <label for="kelas">Kelas</label>
        <input type="hidden" name="id" value="<?= $kelas['id']; ?>">
        <input type="text" name="kelas" id="kelas" value="<?= $kelas['kelas']; ?>">
        <button type="submit" name="ubah">Ubah</button>
    </form>
</body>

</html>