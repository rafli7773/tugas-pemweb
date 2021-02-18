<?php include "functions.php";
if (!isset($_SESSION['login'])) {
    header("location: login.php");
    exit;
} else if (isset($_SESSION['login'])) {
    if ($_SESSION['login']['username'] === 'rafli') {
        $admin = true;
    } else {
        $admin = false;
    }
}
$kelas = handleKelas("SELECT * FROM kelas ORDER BY id DESC"); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="IE=edge" http-equiv="X-UA-Compatible">
    <meta content="width=device-width,initial-scale=1" name="viewport">
    <link rel="stylesheet" href="materialize.min.css">
    <title>Halaman Utama</title>
</head>

<body>
    <nav>
        <div class="nav-wrapper blue">
            <div class="container">
                <a href="/tugas" class="brand-logo"><?= $_SESSION['login']['username'] ?></a>
                <ul id="nav-mobile" class="right hide-on-med-and-down">
                    <?php if ($admin) : ?>
                        <li><a href="tambah.php" class="btn green">Tambah</a></li>
                    <?php endif ?>
                    <li><a href="logout.php" class="btn red">Logout</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="row" style="margin-top: 50px;">
            <div class="col m6 s8">
                <table>
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Kelas</th>
                            <?php if ($admin) : ?>
                                <th>Action</th>
                            <?php endif ?>
                        </tr>
                    </thead>
                    <?php $i = 1;
                    foreach ($kelas as $k) :
                    ?>
                        <tbody>
                            <tr>
                                <td><?= $i++; ?></td>
                                <td><?= $k['kelas']; ?></td>
                                <?php if ($admin) : ?>
                                    <td>
                                        <a class="hapus btn btn-small red" href="hapus.php?id=<?= $k['id']; ?>" data-id="<?= $k['id']; ?>">Hapus</a>
                                        <a class="btn btn-small green" href="ubah.php?id=<?= $k['id']; ?>">Ubah</a>
                                    </td>
                                <?php endif ?>
                            </tr>
                        </tbody>
                    <?php endforeach ?>
                </table>
            </div>
        </div>
    </div>

    <?php if (isset($_SESSION['berhasilTambah'])) : ?>
        <div class="berhasilTambah"></div>
    <?php endif;
    unset($_SESSION['berhasilTambah']) ?>

    <?php if (isset($_SESSION['berhasilUbah'])) : ?>
        <div class="berhasilUbah"></div>
    <?php endif;
    unset($_SESSION['berhasilUbah']) ?>

    <?php if (isset($_SESSION['berhasilHapus'])) : ?>
        <div class="berhasilHapus"></div>
    <?php endif;
    unset($_SESSION['berhasilHapus']) ?>

    <script src="materialize.min.js"></script>
    <script src="sweetalert2.all.min.js"></script>
    <script src="swal.js"></script>
</body>

</html>