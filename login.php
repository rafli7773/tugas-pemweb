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
    <title>Halaman Login</title>
</head>

<body>
    <h1>Login</h1>

    <form action="" method="post">
        <label for="username">Username</label>
        <input type="text" name="username" id="username">
        <br><br>

        <label for="password">Password</label>
        <input type="password" name="password" id="password">
        <br><br>

        <button type="submit" name="login">Login</button>
    </form>

</body>

</html>