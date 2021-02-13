<?php

session_start();

$conn = mysqli_connect('localhost', 'root', '', 'tugas');

function daftar($data)
{
    global $conn;
    $username = $data['username'];
    $password = $data['password'];
    $konfirmasiPassword = $data['konfirmasiPassword'];

    if ($password === $konfirmasiPassword) {
        $password = password_hash($password, PASSWORD_DEFAULT);
        mysqli_query($conn, "INSERT INTO user VALUES('', '$username', '$password')");
        return mysqli_affected_rows($conn);
    }
}

function login($data)
{
    global $conn;

    $username = $data['username'];
    $password = $data['password'];

    $result = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'");
    if (mysqli_num_rows($result)) {
        $row = mysqli_fetch_assoc($result);
        if (password_verify($password, $row['password'])) {
            $_SESSION['login'] = true;
            header('location: index.php');
        }
    }
}
