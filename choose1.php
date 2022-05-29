<?php
session_start();
if($_SESSION["login"]==2){
require('scriptPHP1.php');
require('scriptHTML.php');


if (isset($_GET['active'])) {
    $taskBook = "SELECT Book_Id, Book_Title, Book_Author FROM `book` WHERE Book_stat = 0 ORDER BY RAND() LIMIT 16 ";
    $query = mysqli_query($connect, $taskBook);
    echo $head;
    echo $bodyNavHeader;
    echo
    '<main calss="mein">
    <article class="choose">    

        <h1>Witamy w systemie wyboru C.I.P.A</h1>
        ' . rowChoose($query) . '
        <a  class="button chooseButton">Wybierz</a>


        <h2 class="firstChoose">Witam w 1/4 finału</h2>
        <p class="firstChoose">(wybierz po jednej propozycji z pary)</p>
        <div class="first"></div>        
        <a  class="button firstChoose firstChooseButton">Dalej</a>    
        
        <h2 class="secendChoose">Witam w 1/2 finału</h2>
        <p class="secendChoose">(wybierz po jednej propozycji z pary)</p>
        <div class="secend"></div>         
        <a  class="button secendChoose secendChooseButton">Dalej</a> 
            
        <h2 class="threeChoose">Czas na werble bo mamy Finał</h2>
        <p class="threeChoose">(wybierz po jednej propozycji z pary)</p>
        <form action="choose2.php?active" method="post">
        <div class="three"></div>  
        <input type="submit" class="button threeChoose threeChooseButton" value = "ostateczny wybór"> 
        </form>


    </article>


    </main>';
    echo $footer;
} else {
    header("Location:index.php?Błąd!!!!!!!");
};
}
else{
    header("Location:login.html");
}