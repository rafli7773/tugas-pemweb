<?php

session_start();

$conn = mysqli_connect('localhost', 'root', '', 'tugas');

function daftar($data)
{
    global $conn;
    $username = $data['username'];
    $password = $data['password'];
    $konfirmasiPassword = $data['konfirmasiPassword'];

    $result = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username'");
    if (mysqli_num_rows($result)) {
        $_SESSION['dipake'] = true;
        header("location: daftar.php");
        exit;
    }

    if ($password === $konfirmasiPassword) {
        $password = password_hash($password, PASSWORD_DEFAULT);
        mysqli_query($conn, "INSERT INTO user VALUES('', '$username', '$password')");
        return mysqli_affected_rows($conn);
    } else {
        $_SESSION['passwordTidakSama'] = true;
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
            $_SESSION['login'] = $row;
            header('location: index.php');
        } else {
            $_SESSION['salahLogin'] = true;
        }
    } else {
        $_SESSION['salahLogin'] = true;
    }
}

function handleKelas($query)
{
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($o = mysqli_fetch_assoc($result)) {
        $rows[] = $o;
    }
    return $rows;
}

function tambah($data)
{
    global $conn;
    $kelas = htmlspecialchars($data['kelas']);
    $query = "INSERT INTO kelas VALUES('', '$kelas')";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

function hapus($id)
{
    global $conn;
    mysqli_query($conn, "DELETE FROM kelas WHERE id = $id");
    return mysqli_affected_rows($conn);
}

function ubah($data)
{
    global $conn;
    $id = $data['id'];
    $kelas = htmlspecialchars($data['kelas']);
    $query = "UPDATE kelas SET kelas = '$kelas' WHERE id = $id";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}
