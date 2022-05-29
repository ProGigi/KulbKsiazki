<?php
session_start();
if($_SESSION["login"]==2){
require('scriptPHP1.php');
require('scriptHTML.php');

if (isset($_POST['chooseId'])) {
    $choseId = $_POST['chooseId'];
    $taskChoose = 'UPDATE `book` SET Book_stat = "2" WHERE Book_id = "' . $choseId . '" ';
    // echo $taskChoose;
    $query = mysqli_query($connect, $taskChoose);
    header("Location:index.php?succes");
} else
    header("Location:index.php?error");
}
else{
    header("Location:login.html");
}