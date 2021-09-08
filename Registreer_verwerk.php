<?php
require_once ('config.php');

$Voornaam = $_POST ['Voornaam'];
$Achternaam = $_POST ['Achternaam'];
$email = $_POST ['email'];
$telefoon = $_POST ['telefoon'];
$adres = $_POST ['adres'];
$Wachtwoord = sha1($_POST ['Wachtwoord']);

if (isset($_POST['submit'])) {

    $sql = "INSERT INTO `beroeps9_klanten`(`klant_id`, `Voornaam`, `Achternaam`, `email`, `telefoon`, `adres`, `Wachtwoord`) VALUES (NULL ,'$Voornaam','$Achternaam','$email','$telefoon','$adres', '$Wachtwoord')";
    $resultaat = mysqli_query($mysqli, $sql);
    if ($resultaat) {
        header('Location: Inlog.php');
    }
}
?>
