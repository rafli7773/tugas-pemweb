<?php
include "functions.php";
if (!isset($_SESSION['login'])) {
    header("location: login.php");
    exit;
}

$kelas = handleKelas("SELECT * FROM kelas ORDER BY id DESC");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Utama</title>
</head>

<body>
    <h1>Halaman Utama</h1>
    <center>
        <a href="tambah.php">Tambah</a>
        <table border="1" cellpadding="10" cellspacing="0">
            <tr>
                <td>No</td>
                <td>Kelas</td>
                <td>Actions</td>
            </tr>
            <tr>
                <?php $i = 1;
                foreach ($kelas as $k) :
                ?>
                    <td><?= $i++; ?></td>
                    <td><?= $k['kelas']; ?></td>
                    <td><a href="hapus.php?id=<?= $k['id']; ?>">Hapus</a> <a href="ubah.php?id=<?= $k['id']; ?>">Ubah</a></td>
            </tr>
        <?php endforeach ?>
        </table>
    </center>
    <a href="logout.php">Logout</a>
</body>

</html>