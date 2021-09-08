<?php
session_start();
if (isset($_POST['Login']))
{
    require 'config.php';

    $Voornaam = $_POST['Voornaam'];
    $Wachtwoord = sha1($_POST['Wachtwoord']);

    $opdracht = "SELECT * FROM beroeps9_klanten
WHERE Voornaam = '$Voornaam' AND Wachtwoord = '$Wachtwoord'";


    $resultaat = mysqli_query($mysqli, $opdracht);
    if (mysqli_num_rows($resultaat) > 0)
    {
        $Voornaam = mysqli_fetch_array($resultaat);
        $_SESSION['Voornaam'] = $Voornaam['Voornaam'];
        $_SESSION['Level'] = 1;
        header('Location: Home.php');
    }
    else
    {
        echo "<p>Naam en/of wachtwoord zijn verkeerd</p>";
        echo "<p><a href='Inlog.php'>Probeer opnieuw</a></p>";
    }
}
?>