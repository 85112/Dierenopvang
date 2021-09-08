<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dieren overzicht</title>
    <style>
        body {
            background-color: #F9E4B7;
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
        #login{
            float:right;
        }

        .dier
        {
            margin: 10px;
            width: 300px;
            height: 300px;
            background-color: white;
            padding: 20px;
            display: inline-block;
        }
        .dier img
        {
            width: 100%;
            height: 100%;
            display: inline-block;
            border: 2px solid black;
        }
        .dier button
        {
            width: 102%;
            height: 18%;
            display: inline-block;
            border: 2px solid black;
        }

    </style>
</head>
<body>
<div class="Menu">
    <a href="Home.html">Home</a>
    <a href="Overzicht.php">Dieren</a>

    <div id="login">
        <a href="Inlog.php">Login</a>
        <a href="uitlog.php">Uitlog</a>
    </div>

    <a href=Adoptie_toevoeg.php>Adoptie opstel</a>

    <?php
    require 'config.php';

    //maak de query
    $query = "SELECT * FROM dieren";

    //vang het resultaat op
    $resultaat = mysqli_query($mysqli, $query);

    //als het resultaat uit 0 rijen bestaat
    if (mysqli_num_rows($resultaat) ==0)
    {
        echo "<p>Er zijn geen resultaten gevonden.</p>";
    }

//Als er wel rijen zijn
    else {
        while ($rij = mysqli_fetch_array($resultaat)) {
            echo "<div class='ColorText'>";

            echo "<div class='dier'>";
            echo "<td><img src='Fotos/" . $rij['Afbeelding'] . "'/></td>";
            echo "<td> <a href='klantdier_detail.php?ID=" . $rij['ID'] . "'>detail</a></td>";
            echo "</div>";

            echo "</div>";

        }

    }
    ?>




















</div>















</body>
</html>

