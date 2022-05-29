<?php
session_start();
if($_SESSION["login"]==2){
require('scriptPHP1.php');
require('scriptHTML.php');


echo $head;
echo $bodyNavHeader;
if (isset($_GET['succes'])) {
    echo '<p class="succes alert">wszystko OK</p>';
} else if (isset($_GET['error'])) {
    echo '<p class="error alert">Coś poszło nie tak</p>';
} else if (isset($_GET['same'])) {
    echo '<p class="same alert">Ktoś już dodał tą pozycje</p>';
}
echo $mainaddBook;
echo $footer;
}
else{
    header("Location:login.html");
}