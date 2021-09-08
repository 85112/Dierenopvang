<?php
session_start();
if (isset($_SESSION['Voornaam'])){
    $_SESSION['Level'] == 1;
}else if(!isset($_SESSION['Voornaam'])){
    $_SESSION['Level'] == 0;
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Home</title>
    <style>
        body {
            background-image: url("img/grass-background.jpg");
        }
        .Menu {
            background: orangered;
        }
        a:link, a:visited {
            background-color: orangered;
            color: white;
            padding: 15px 25px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
        }
        a:hover, a:active {
            background-color: white;
            color: black;
        }
        .HeaderFoto {
            display: block;
            margin-left: auto;
            margin-right: auto;
            width: 50%;
            color: white;
            font-size: large;
        }
        #login{
            float:right;
        }
    </style>
</head>
<body>
<div class="Menu">
    <a href="Home.html">Home</a>
    <a href="Overzicht.php">Dieren</a>

    <div id="login">
        <a href="Inlog.php">Login</a>
    </div>
</div><br>

<div class="HeaderFoto">
    <img src="img/dierenbanner3.jpg" alt="">

    <h1>Wie zijn wij?</h1>

    <p>De Stichting DierenOpvang en Internet is een non-profit-organisatie, die zich ten doel stelt:</p>

    <p>Het op non-profit-basis realiseren van internet-faciliteiten ter bevordering van het vinden en plaatsen van asieldieren.</p>

    <p>De Stichting DierenOpvang en Internet richt zich hierbij op verkorting van de tijd dat dieren in het asiel moeten blijven door bemiddeling via de site dierenopvang.com.
    Daarnaast is er een compleet overzicht - zonder dat asiels worden uitgesloten - van de Nederlandse en Belgische asiels met bijbehorende websites.</p>

    <p>Uitgangspunt is dat iedereen een hond of kat moet kunnen uitzoeken, die qua karakter en persoonlijke situatie bij hem/haar past. Gekeken wordt daarbij naar de factoren, waarop een plaatsing kan slagen of mislukken: de zogenaamde slaag- en faalfactoren.</p>

    <p>Dit zijn persoonlijke omstandigheden, zoals het samen kunnen gaan met kinderen en/of andere huisdieren, maar ook - voor honden - alleen thuis kunnen blijven, en voor katten het al dan niet naar buiten moeten kunnen gaan.</p>

    <p>Er kan echter ook zonder toepassing van deze criteria gezocht worden, bijvoorbeeld op rasgroep (bij honden), kleur (bij katten) of "koppel", als men twee dieren wil opnemen, die bij elkaar horen.</p>

    <p>Natuurlijk moet men er rekening mee houden, dat men zelf voldoende tijd voor dieren heeft, dat er een gewenningsperiode moet zijn om een band op te bouwen en dat jonge, maar vaak ook nog oudere dieren uit een asiel mogelijk wat extra opvoeding behoeven.
    Hondentrainingen, die tegenwoordig vaak vanuit asiels georganiseerd worden, en vaak worden aanbevolen, zijn niet verplicht.</p>

    <p>De asiels verzorgen zelf de invoer van de gegevens van de dieren en de bemiddeling naar de toekomstige eigenaren.</p>

    <p>Speciale aandacht wordt gegeven aan de "langzitters".</p>

    <p>Disclaimer<br>
    De Stichting DierenOpvang en Internet is niet aansprakelijk voor de juistheid van de informatie, gegevens over de dieren. Dit valt onder de verantwoording van de deelnemende asiels, die de Stichting Dierenasiels en Internet (ook wel Stichting Dierenasiels genoemd) hiervoor door hun deelname moeten vrijwaren. Niets van deze websites mag worden overgenomen voor publicatie, schriftelijk, op internet of op welke manier dan ook, zonder vooraf schriftelijke toestemming. De Stichting Dierenasiels en Internet is niet aansprakelijk voor onjuiste interpretatie van gegevens op de site. Aan de publicatie op de websites van de Stichting Dierenasiels en Internet kunnen geen formele rechten worden ontleend. Niets van deze pagina mag worden verveelvuldigd zonder schriftelijke toestemming van de Stichting Dierenasiels en Internet.
    © copyright Stichting DierenOpvang en Internet; alle rechten voorbehouden.</p>

</div>

</body>
</html>