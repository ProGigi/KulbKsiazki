<?php
session_start();
if($_SESSION["login"]==2){
require('scriptPHP1.php');
require('scriptHTML.php');
$taskVerification = "SELECT Book_Id, Book_Title, Book_Author FROM `book` WHERE Book_stat = 2";
$queryVerification = mysqli_query($connect, $taskVerification);


echo $head;
echo $bodyNavHeader;
if (mysqli_num_rows($queryVerification)) {
    echo
    '<main calss="mein">
    <article class="choose">    
        <h1>Witamy w systemie wyboru C.I.P.A</h1>     
            <span>Oj chyba się pospieszyłem najpierw przeczytaj i oceń bieżącą książke</span>                 
            <a href="index.php" class="button ">Powrót</a>
    </article>


</main>';
} else {

    echo
    '<main calss="mein">
    <article class="choose">    
        <h1>Witamy w systemie wyboru C.I.P.A</h1>                      
            <a href="choose1.php?active" class="button ">Zacznij losowanie</a>
    </article>


</main>';




    echo $footer;
}
}
else{
    header("Location:login.html");
}