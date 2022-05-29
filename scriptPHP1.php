<?php
$username = "m1188_gigiKlub";
$password = "Django0812";
$localhost = "mysql29.mydevil.net";
$database = "m1188_klubKsiazki";

// $username = "root";
// $password = "";
// $localhost = "localhost";
// $database = "m1188_klubKsiazki";


$connect = @new mysqli($localhost, $username, $password, $database);


if ($connect->connect_errno) {
    echo "Failed to connect to MySQL: " . $connect->connect_error;
}



//dodawanie zdjęcia 

function save_img($inputName, $fileName, $targetDir)
{
    echo "3;;;;;;;;";
    if (is_uploaded_file($_FILES[$inputName]['tmp_name'])) {
        $target_dir = $targetDir . '/';
        $target_file = $target_dir . basename($_FILES[$inputName]["name"]);
        $uploadOk = 1;

        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
        $target_file = $target_dir . $fileName . '.' . $imageFileType;

        // Allow certain file formats
        if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
            echo "Możesz przesłać pliki tylko w formatach .jpg, .jpeg, .png oraz .gif";

            $uploadOk = 0;
        }

        // Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) {
            echo " Twój plik nie został wysłany";
            // if everything is ok, try to upload file
        } else {
            if (move_uploaded_file($_FILES[$inputName]["tmp_name"], $target_file)) {
                $patch = $target_file;
            } else {
                echo "Wystąpił bład";
            }
        }
    } else {
        $patch = "brak";
    }
    return $patch;
}



//wyciąganie rekordów z tabeli 
function row($query)
{

    $row = "";
    while ($fetchBook = mysqli_fetch_assoc($query)) {
        $BookID = $fetchBook['Book_Id'];
        $BookTittle = $fetchBook['Book_Title'];
        $BookAuthor = $fetchBook['Book_Author'];
        $row .= '<div class="row"><p class="rowTitle">' . $BookTittle . '</p><p>' . $BookAuthor . '</p></div>';
    }

    return $row;
}


function rowRead($query)
{

    $row = "";
    while ($fetchBook = mysqli_fetch_assoc($query)) {
        $BookID = $fetchBook['Book_Id'];
        $BookTittle = $fetchBook['Book_Title'];
        $BookAuthor = $fetchBook['Book_Author'];
        $BookImg = $fetchBook['Book_img'];
        $BookStats = $fetchBook['Book_stat'];
        $BookRating = $fetchBook['Book_rating'];
        $BookData = $fetchBook['Book_data'];
        $BookData = explode('-', $BookData);
        $BookData = $BookData[2] . '.' . $BookData[1] . '.' . $BookData[0];


        $row .= '
        <div class="readIt">
            <div class="info">    
                <span>' . $BookTittle . '</span>
                <span class="small">' . $BookAuthor . '</span>
                <span class = "small">' . $BookData . '</span>
            </div>
            <div class="imgBook"><img src="' . $BookImg . '" alt=""></div>
            <div class="rating">
            <p>Nasza ocena</p>
            <div class="read">                
                <p class="read"> ' . $BookRating . ' / 10 &#127825;</p>

            </div>
            </div>

        </div>
   ';
    }

    return $row;
}


function rowChoose($query)
{

    $row = "";
    while ($fetchBook = mysqli_fetch_assoc($query)) {
        $BookID = $fetchBook['Book_Id'];
        $BookTittle = $fetchBook['Book_Title'];
        $BookAuthor = $fetchBook['Book_Author'];

        $row .= '
        <div class="rowChoose">
           <input type="radio" class="rowChoose" name="choose" id="c' . $BookID . '" value="' . $BookTittle . '">
            <label class="rowChoose" for="c' . $BookID . '">' . $BookTittle . '</label>
        </div>';
    }

    return $row;
}



// alert




function alert($msg)
{
    echo "<script type='text/javascript'>alert('$msg');</script>";
}
