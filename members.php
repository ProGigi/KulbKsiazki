<?php
session_start();
if($_SESSION["login"]==2){
require('scriptPHP1.php');
require('scriptHTML.php');


echo $head;
echo $bodyNavHeader;
echo  '
<main calss="mein">
    <article class="members">
                    <h1>Członkowie</h1>
                    <div class="member1">
                        <img src="img/paulina.jpg" alt="">
                        <p><span>Paulina vel. Paulinson Biernacka</span> - Jedna z głównych pomysłodawczyń klubu. Samozwańczy prezes.
                        Organizatorka spotkań, dbająca o dobrą atmosferę. Taka klubowa Babcia.</p>
                    </div>
                    <div class="member2">
                        <img src="img/ola.jpg" alt="">
                        <p><span>Aleksandra vel. Nerka Zakrzewska</span> - Jedna z głównych pomysłodawczyń klubu. Nie ma dla niej rzeczy
                        niemożliwych, przeszczepiła by nawet nerkę o zerowym współczynniku filtracji. Jakby klubowa
                        Babcia miała mieć Dziadka to właśnie Olę.</p>
                    </div>
                    <div class="member3">
                        <img src="img/majka.jpg" alt="">
                        <p><span>Marta vel. Majka Marcheffka Majkowska</span> - Człowiek opozycja. Gdyby weszła do rządu pokazałaby
                        teraźniejszej opozycji, że rzetelnymi argumentami można zdziałać więcej. UWAGA!!!!!! Przekona cię
                        że “Duma i uprzedzenie” jest fajna.</p>
                    </div>
                    <div class="member4">
                        <img src="img/bartek.jpg" alt="">
                        <p><span>Bartłomiej vel. Bieżnik Garbacz</span> - Bo przyjęcie bez bieżnika to nie przyjęcie. Gustowny
                        młodzieniec o otwartej głowie z poczuciem humoru. Pasjonują go cmentarze i ozdabianie
                        stołów.</p>
                    </div>
                    <div class="member5">
                        <img src="img/kinga mucha.jpg" alt="">
                        <p><span>Kinga vel.(z racji tego że Marta ma tyle przezwisk to na Kingę nie starczyło) Mucha</span> -
                        Osoba posiadająca ciekawe spostrzeżenia (nie lubi kwiatu jabłoni ← shame). Jakby Majka
                        miała tworzyć koalicję to właśnie z Kingą. Lubi ludzi z talentami, do disiaj nie wiemy co
                        robi w naszych szeregach.</p>
                    </div>
                    <div class="member6">
                        <img src="img/gerard.jpg" alt="">
                        <p><span>Gerard vel.(ta sama sytuacja co z Kingą, DZIĘKI Majka) Jaworski</span> - Tak on na prawdę ma
                        tak na imię.</p>
                    </div>
                    <div class="member7">
                        <img src="img/milena.jpg" alt="">
                        <p><span>Milena vel.(ninja) Niedziółka</span> - Nasz klubowy ninja. Posiada dwie katany: na jedną mówi „elokwencja” na drugą „dajcie mi kalkulator bo nie umiem dodawać ale znam wzór na pole trójkąta” (w skrócie DMKBNUDAZWNPT). Jej arsenał zawiera jeszcze shurikeny argumentu i przekąski jakbyś zgłodniał podczas dyskusji.</p>
                    </div>
                    
                </article>
                </article>
                

         
</main>';
echo $footer;
}
else{
    header("Location:login.html");
}