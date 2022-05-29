<?php
session_start();
if($_SESSION["login"]==2){
require('scriptPHP1.php');
require('scriptHTML.php');
if (isset($_GET['active'])) {
    $chose = $_POST['threeChoose0'];
    $taskBook = "SELECT * FROM `book`Where Book_Title='" . $chose . "'";
    $query = mysqli_query($connect, $taskBook);

    $fetchBook = mysqli_fetch_assoc($query);

    $ChooseTitle = $fetchBook['Book_Title'];
    $ChooseAuthor = $fetchBook['Book_Author'];
    $ChooseImg = $fetchBook['Book_img'];
    $ChooseId = $fetchBook['Book_Id'];
    echo $head;
    echo $bodyNavHeader;
    echo
    '<main calss="mein">
    <article>
    <form action="choose3.php" method="post">
        <h1>Padło na</h1>           
        <span>' . $ChooseTitle . '</span>
        <span class = "small">' . $ChooseAuthor . '</span>
        <div class="imgBook"><img src="' . $ChooseImg . '" alt=""></div>
        <input type="text" name="chooseId" style="display: none;" value="' . $ChooseId . '">
        <input type="submit" value="TAK" class="button">
        <a href="choose.php" class="button">Nie</a>
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