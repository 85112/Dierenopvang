<?php
session_start();
if (isset($_POST['Login']))
{
    require 'config.php';

    $Gebruikersnaam = $_POST['Gebruikersnaam'];
    $Wachtwoord = sha1($_POST['Wachtwoord']);

    $opdracht = "SELECT * FROM beroeps9_users
WHERE Gebruikersnaam = '$Gebruikersnaam' AND Wachtwoord = '$Wachtwoord'";


    $resultaat = mysqli_query($mysqli, $opdracht);
    if (mysqli_num_rows($resultaat) > 0)
    {
        $Gebruikersnaam = mysqli_fetch_array($resultaat);
        $_SESSION['Gebruikersnaam'] = $Gebruikersnaam['Gebruikersnaam'];
        $_SESSION['Level'] = 2;
        header('Location: Donaties_uitlees.php');
    }
    else
    {
        echo "<p>Naam en/of wachtwoord zijn verkeerd</p>";
        echo "<p><a href='Inlog.php'>Probeer opnieuw</a></p>";
    }
}
?>