<?php
session_start();
$password = $_POST['password'];
$pass2 = "21232f297a57a5a743894a0e4a801fc3";
$login = $_POST['username'];
$login2 = "admin";
$pass_hash =  md5($password);

if ($pass_hash == $pass2 && $login == $login2) {
    $_SESSION["login"] = 2;
    header("Location:index.php?Zalogowany");
} else {
    header("Location:login.html?error");
}
