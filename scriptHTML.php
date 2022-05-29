<?php



$head = '<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>C.I.P.A</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dongle:wght@300&family=Lobster&display=swap" rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Dongle:wght@300&family=Lobster&family=Roboto:wght@900&display=swap"
        rel="stylesheet">


    <link href="fontawesome-free-5.15.4-web/css/all.css" rel="stylesheet">
</head>';


$bodyNavHeader = '<body>
    <div class="bars">
        <i class="fas fa-bars"></i>
    </div>
    

    <div class="container">
        <header>
            <div class="name1">Czytaj i Próbuj Analizować</div>
            <div class="name2">Klub Książki</div>
        </header>
        <nav>

        <div class="nav clirfix">
            <ul>
                <li><a href="index.php"><p><i class="fas fa-book"></i> Home</p></a></li>
                <li><a href="suggestions.php"><p><i class="fas fa-book-medical"></i> Propozycje</p></a></li>
                <li><a href="read.php"><p><i class="fas fa-bookmark"></i> Przeczytane</p></a></li>
                <li><a href="members.php"><p><i class="fas fa-users"></i> Członkowie</p></a></li>
                <li><a href="choose.php"><p><i class="fas fa-random"></i> Losuj</p></a></li>
                <li><a href="addBook.php"><p><i class="fas fa-journal-whills"></i> Dodaj</p></a></li>
            </ul>
            <div class="close"><i class="far fa-times-circle"></i></div>
        </div>
    </nav>';




$mainHome = '<main calss="mein">

            <article class="readNow">
                <h1>Teraz czytamy</h1>

                <span>Komu bije dzwon</span>
                <div class="imgBook"><img src="img/Komu bije dzwon.jpg" alt=""></div>


            </article>

            <article class="readIt">
                <h1>Ostatnio Przeczytane</h1>
                <div>
                    <span>Cała prawda o planecie Ksi</span>
                    <div class="imgBook"><img src="img/Cała prawda o planecie Ksi.jpg" alt=""></div>
                    <a href="read.php" class=" button readIt">Zobzacz więcej</a>

                </div>
            </article>

            <article class="suggestions">
                <h1>Propozycje</h1>
                <span>16 losywych propozycji</span>
                <div>
                    <span>"propozycja 1"</span>
                    <span>"propozycja 2"</span>
                    <span>"propozycja 3"</span>
                    <span>"propozycja 4"</span>
                    <span>"propozycja 5"</span>
                    <span>"propozycja 6"</span>
                    <span>"propozycja 7"</span>
                    <span>"propozycja 8"</span>
                    <span>"propozycja 9"</span>
                    <span>"propozycja 10"</span>
                    <span>"propozycja 11"</span>
                    <span>"propozycja 12"</span>
                    <span>"propozycja 13"</span>
                    <span>"propozycja 14"</span>
                    <span>"propozycja 15"</span>
                    <span>"propozycja 16"</span>
                </div>
            </article>



        </main>';













$mainaddBook = '<main>
            <article class="addBook">
                <h1>Dodaj Propozycje</h1>


                <form action="addBook1.php?addBook" method="post" enctype=multipart/form-data> <p>Tytuł</p>
                    <input type="text" name="title" id="" required>
                    <p>Autor</p>
                    <input type="text" name="author" id="" required>
                    <p>Dodaj okładkę</p>
                    <input type="file" name="bookImg" id="" class="bookImg" required>
                    <input type="submit" class="button" value="Dodaj">
                </form>
            </article>
        </main>';







$footer = '  <footer class="footer">
            <p>"Z miesiąca na miesiąc bardziej oczytani"</p>
        </footer>


    </div>



    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="script.js"></script>
    <script src="jquery-3.6.0.js"></script>

</body>

</html>';
