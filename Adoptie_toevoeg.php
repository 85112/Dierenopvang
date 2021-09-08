<head>
    <link rel="stylesheet" href="style.css">
</head>
<?php
session_start();
require 'session_check.php';
require 'config.php';

if (isset($_POST['submit'])) {

    $Afbeelding = $_FILES['Afbeelding'];
    $tijdelijk = $Afbeelding['tmp_name'];
    $Afnaam = $Afbeelding['name'];
    $type = $Afbeelding['type'];
    $map = "Fotos/";

    $toegestaan = array("image/jpeg", "image/gif", "image/png");
    if (in_array($type, $toegestaan)) {

        echo "Verplaats " . $tijdelijk . " naar " . $map . $Afnaam . "...<br/>";

        if (move_uploaded_file($tijdelijk, $map . $Afnaam)) {

            echo "Het is gelukt!<br/>";
        } else {
            echo "Er is iets fout gegaan.<br/>";
        }
    } else {
        echo "Dit bestandtype ($type) is niet toegestaan!<br/>";
    }

    $naam = $_POST['naam'];
    $soort = $_POST['dier'];
    $ras = $_POST['ras'];
    $geslacht = $_POST['geslacht'];
    $kleur = $_POST['kleur'];
    $geboortedatum = $_POST['geboortedatum'];
    $gecastreerd = $_POST['gecastreerd'];
    $datum_binnen = $_POST['datum_binnen'];
    $medisch_check = $_POST['medisch_check'];
    $ingeent = $_POST['ingeent'];

    if (strlen($naam) > 0 &&
        strlen($soort) > 0 &&
        strlen($ras) > 0 &&
        strlen($geslacht) > 0 &&
        strlen($kleur) > 0 &&
        strlen($geboortedatum) > 0 &&
        strlen($gecastreerd) > 0 &&
        strlen($datum_binnen) > 0 &&
        strlen($medisch_check) > 0 &&
        strlen($ingeent) > 0 &&
        strlen($Afnaam))
    {
            $query = "INSERT INTO `dieren`(`ID`, `Naam`, `Soort`, `Ras`, `Geslacht`, `Kleur`, `Geboortedatum`, `Gecastreerd`, `Datum_binnengebracht`, `medisch_gecheckt`, `ingeënt`, `Afbeelding`) VALUES(NULL,'$naam', '$soort', '$ras', '$geslacht', '$kleur', '$geboortedatum', '$gecastreerd', '$datum_binnen','$medisch_check', '$ingeent','$Afnaam')";
            if (mysqli_query($mysqli, $query)){
    echo "<h1>" . $naam . " is voor adoptie gesteld </h1>";

            } else {
                echo "<p>FOUT bij toevoegen</p>";
                echo mysqli_error($mysqli);
            }
        }
    }
    else {
        echo "Niet alle velden zijn ingevuld";
    }

?>

<center><h2>Stel voor adoptie:</h2></center>
<center>

    <form name="form1" method="post" enctype="multipart/form-data">
        <fieldset>
            <table>
                <label for="naam"> Naam:</label>
                <input type="text" id="naam" name="naam" value=""><br>
                <label for="dier"> Dier:</label>
                <input type="text" id="dier" name="dier" value=""><br>
                <label for="ras"> Ras:</label>
                <input type="text" id="ras" name="ras" value=""><br>
                <label for="geslacht">Geslacht:</label>
                <select id="geslacht" name="geslacht">
                    <option value="M" selected>M</option>
                    <option value="V">V</option>
                </select><br>
                <label for="kleur"> Kleur:</label>
                <input type="text" id="kleur" name="kleur" value=""><br>
                <label for="geboortedatum">Geboortedatum:</label>
                <input type="date" id="geboortedatum" name="geboortedatum" value=""><br>
                <label for="gecastreerd">Gecastreerd?:</label>
                <select id="gecastreerd" name="gecastreerd">
                    <option value="Ja" selected>Ja</option>
                    <option value="Nee">Nee</option>
                </select><br>
                <label for="datum_binnen">Datum van adoptie stelling:</label>
                <input type="date" id="datum_binnen" name="datum_binnen" value=""><br>
                <label for="medisch_check">Medisch gecheckt?:</label>
                <select id="medisch_check" name="medisch_check">
                    <option value="Ja" selected>Ja</option>
                    <option value="Nee">Nee</option>
                </select><br>
                <label for="ingeent">Ingeënt?:</label>
                <select id="ingeent" name="ingeent">
                    <option value="Ja" selected>Ja</option>
                    <option value="Nee">Nee</option>
                </select>
                <br><br>
                <input type="file" name="Afbeelding" value="<?=$Afnaam?>"><br><br>
                <input class="submit" type="submit" id="button" value="Verzend" name="submit">
            </table>
        </fieldset>
    </form>

</center>
<?php
echo "<br>";
echo "<center><a href='Overzicht.php'><button class='uitlees'><p>Lees uit</p></button></a></center>";
?>
