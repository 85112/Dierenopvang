<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dieren Detail Pagina</title>
    <link rel="stylesheet" href="Common.css">
</head>
<body>

<?php
require 'config.php';
//haal de band-id uit de url
$ID = $_GET['ID'];
//maak de query
$query ="SELECT * FROM dieren WHERE ID = " . $ID;
//vang het resultaat op
$resultaat = mysqli_query($mysqli, $query);
//als het resultaat uit 0 bestaat
if (mysqli_num_rows($resultaat) == 0)
{
    echo "<P>Er is geen dier met ID $ID.</P>";
}
//als er wel rijen zijn gevonden:

else {
    echo "<div class=\"tabel\">";
    echo " <fieldset>";

    echo "<legend><h3>details dier</h3></legend>";

    //haal de bands uit het resultaat
    $rij = mysqli_fetch_array($resultaat);
    //zet de gegevens in een tabel
    echo "<table border='1'>";
    echo "<tr><td>Naam:</td>";
    echo "<td>" . $rij['Naam'] . "</td></tr>";
    echo "<tr><td>Dier:</td>";
    echo "<td>" . $rij['Soort'] . "</td></tr>";
    echo "<tr><td>Ras:</td>";
    echo "<td>" . $rij['Ras'] . "</td></tr>";
    echo "<tr><td>Geslacht:</td>";
    if ( $rij['Geslacht'] == '1'){echo "<td> V </td></tr>";} else{echo "<td> M </td></tr>";};
    echo "<tr><td>Kleur:</td>";
    echo "<td>" . $rij['Kleur'] . "</td></tr>";
    echo "<tr><td>Geboortedatum:</td>";
    echo "<td>" . $rij['Geboortedatum'] . "</td></tr>";
    echo "<tr><td>Gecastreerd:</td>";
    if ( $rij['Gecastreerd'] == '2'){echo "<td> Ja </td></tr>";} else{echo "<td> Nee </td></tr>";};
    echo "<tr><td>Datum Binnengebracht:</td>";
    echo "<td>" . $rij['Datum_binnengebracht'] . "</td></tr>";
    echo "<tr><td>Medisch Gecheckt:</td>";
    if ( $rij['medisch_gecheckt'] == '2'){echo "<td> Ja </td></tr>";} else{echo "<td> Nee </td></tr>";};
    echo "<tr><td>Ingeënt:</td>";
    if ( $rij['ingeint'] == '2'){echo "<td> Ja </td></tr>";} else{echo "<td> Nee </td></tr>";};
    echo "<tr><td>Klant:</td>";

    $Klant_id = $rij['Klant_id'];
    $queryklant = "SELECT `Voornaam` FROM `beroeps9_klanten` WHERE Klant_id = '$Klant_id'";
    $result = mysqli_query($mysqli, $queryklant);
    $klant = mysqli_fetch_assoc($result);

    ?>
    <td><?php echo $klant['Voornaam'];?></td></tr>
    <?php
    echo "</table>";
    echo "<p>Adopteer:<a href='Adoptie.php?id=" . $rij['ID'] . "'>Adopteren</a></td></p>";
    echo "<p>Terug naar het <a href='Overzicht.php'>overzicht</a></td></p>";
    echo "</fieldset>";
    echo "</div>";
}
?>
</body>
