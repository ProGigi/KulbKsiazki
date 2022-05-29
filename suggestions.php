<?php
session_start();
if($_SESSION["login"]==2){
require('scriptPHP1.php');
require('scriptHTML.php');

$taskBook = "SELECT Book_Id, Book_Title, Book_Author FROM `book` WHERE Book_stat = 0;";
$query = mysqli_query($connect, $taskBook);


echo $head;
echo $bodyNavHeader;
echo '
<main calss="mein">
    <article class="suggestions">
        <h1>Propozycje</h1>
               
         <div class="flexRow">' . row($query) . ' </div>
        <a href="addBook.php" class=" button readIt">Dodaj Nową</a>
    </article>
            
</main>';



echo $footer;
}
else{
    header("Location:login.html");
}