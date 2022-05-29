<?php
session_start();
if($_SESSION["login"]==2){
require('scriptPHP1.php');
require('scriptHTML.php');

if (isset($_GET['title'])) {
    $title = $_GET['title'];
    $today = date("Y-m-d");
    echo $title . '<br>';
    $taskUpdata = 'UPDATE book SET Book_stat="1", Book_rating=' . $_POST['bookRating'] . ', Book_data ="' . $today . '" WHERE Book_Title = "' . $title . '"';
    echo $taskUpdata;
    $query = mysqli_query($connect, $taskUpdata);
    header("Location:index.php?succes");
} else {
    header("Location:index.php?error");
}
}
else{
    header("Location:login.html");
}