<?php
session_start();
if ($_SESSION["login"] == 2) {

    require('scriptPHP1.php');
    require('scriptHTML.php');


    $task = "SELECT * FROM `book` WHERE Book_stat = '1' ORDER BY Book_data DESC";
    $query = mysqli_query($connect, $task);

    echo $head;
    echo $bodyNavHeader;
    echo '
<main calss="mein">
    <article class="readIt" >    
        <h1>Ostatnio Przeczytane</h1>
        ' . rowRead($query) . '


    </article>

</main>
    
    
    
    ';
    echo $footer;
} else {
    header("Location:login.html");
}
