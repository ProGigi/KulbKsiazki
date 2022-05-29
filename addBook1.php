<?php

require('scriptPHP1.php');

if (isset($_GET['addBook'])) {
    $title = $_POST['title'];
    $author = $_POST['author'];
    $taskVerification = "SELECT Book_Id, Book_Title, Book_Author FROM `book` WHERE Book_Title = '$title' AND Book_Author= '$author'";
    $queryVerification = mysqli_query($connect, $taskVerification);
    if (mysqli_num_rows($queryVerification)) {
        header("Location:addBook.php?same");
    } else {
        $patch = save_img('bookImg', $title, 'img');
        $taskAdd =  "INSERT INTO book VALUES (NULL, '$title', '$author', '$patch','0','0','0000-00-00')";
        $query = mysqli_query($connect, $taskAdd);
        header("Location:addBook.php?succes");
    }
} else {
    header("Location:addBook.php?error");
}
