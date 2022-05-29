<?php
session_start();
if ($_SESSION["login"] == 2) {

    require('scriptPHP1.php');
    require('scriptHTML.php');

    $taskBook = "SELECT Book_Id, Book_Title, Book_Author FROM `book` WHERE Book_stat = '0' ORDER BY RAND() LIMIT 16 ";
    $taskRead = "select * from book where Book_data = (select max(Book_data) from book)";
    $taskReadNow = "SELECT Book_Title, Book_Author, Book_img FROM `book` WHERE Book_stat = 2";

    $query = mysqli_query($connect, $taskBook);
    $queryRead = mysqli_query($connect, $taskRead);
    $queryReadNow = mysqli_query($connect, $taskReadNow);
    $numRow = mysqli_num_rows($queryReadNow);

    $fetchReadNow = mysqli_fetch_assoc($queryReadNow);

    if ($numRow == 0) {
        $readNow = ' <span>Nic nie czytamy?????</span>
                <span class = "small">Zacznij Losowanie </span>                
                <a href="choose.php" class="button ">Losuj</a>';
        $popUp = '';
    } else {
        $ReadNowTitle = $fetchReadNow['Book_Title'];
        $ReadNowAuthor = $fetchReadNow['Book_Author'];
        $ReadNowImg = $fetchReadNow['Book_img'];
        $readNow = '<div class="info">
                    <span>' . $ReadNowTitle . '</span>
                    <span class = "small">' . $ReadNowAuthor . '</span>
                </div>
                <div class="imgBook"><img src="' . $ReadNowImg . '" alt=""></div>
                
                <a href="#" class="button readNow1">Oceń</a>';
        $popUp = '
    <form action="readNow.php?title=' . $ReadNowTitle . '"  method="post">
     <article class="popUp">
     <form action="readNow.php?active" method="post">
                <h1>Teraz czytamy</h1>
                <div class="info">
                <span name="title">' . $ReadNowTitle . '</span>
                <span class="small" name="author">' . $ReadNowAuthor . '</span>
                </div>
                <div class="imgBook" name="img"><img src="' . $ReadNowImg . '" alt=""></div>
                <div class="rating">
                <label for="bookRating">Na ile &#127825 oceniasz</label>
                <input type="number" name="bookRating" id="" required>
                </div>
               <input type="submit" class="button" value="Przeczytane">
                <div class="close"><i class="far fa-times-circle"></i></div>
                </form>
            </article>
    ';
    }

    if (isset($_GET['error'])) {
        alert("Cos poszlo nie tak");
    }
    if (isset($_GET['succes'])) {
        alert("Wszystko OK!!!!");
    }




    echo $head;
    echo $bodyNavHeader;
    echo  '
<main calss="mein">
<div class="blur">

            <article class="readNow">
                <h1>Teraz czytamy</h1>                
               ' . $readNow . '


            </article>

            <article class="readIt">
                <h1>Ostatnio Przeczytane</h1>
                <div>
                   ' . rowRead($queryRead) . '
                </div>
                <a href="read.php" class=" button readIt">Zobacz więcej</a>
            </article>

            <article class="suggestions">
                <h1>Propozycje</h1>

                <span>16 losywych propozycji</span>
                <div class="flexRow">
                    ' . row($query) . '
                </div>
                <a href="suggestions.php" class=" button readIt">Zobacz więcej</a>
            </article>
    </div>
           ' . $popUp . '
           <a href="logout.php">wyloguj</a>
        </main>';
?>


<?php
    echo $footer;
} else {
    header("Location:login.html");
}
