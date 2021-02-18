<?php
include "functions.php";
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
if (isset($_POST['tambah'])) {
    if (tambah($_POST) > 0) {
        header("location: index.php");
        $_SESSION['berhasilTambah'] = true;
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
    <title>Tambah</title>
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
        <div class="row" style="margin-top: 50px">
            <div class="col s12 m8">
                <div class="card">
                    <div class="card-content">
                        <span class="card-title">Tambah</span>
                        <form method="post">
                            <div class="row">
                                <div class="col input-field m12 s12">
                                    <input type="text" class="validate" name="kelas" id="kelas" autofocus autocomplete="off">
                                    <label for="kelas">Kelas</label>
                                </div>
                                <div class="col input-field m12 s12">
                                    <button type="submit" class="btn waves-effect waves-light" name="tambah">Tambah</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="materialize.min.js"></script>
</body>

</html>