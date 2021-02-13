<?php

session_start();

session_destroy();
session_unset($_SESSION['login']);

header("location: login.php");
