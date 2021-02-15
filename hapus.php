<?php

include "functions.php";
if (!isset($_SESSION['login'])) {
    header("location: login.php");
    exit;
}

$id = $_GET['id'];
if (hapus($id) > 0) {
    header("location:index.php");
}
