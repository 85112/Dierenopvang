<head>
    <link rel="stylesheet" href="style.css">
</head>
<?php
require 'config.php';

    $naam = $_POST['naam'];
    $achternaam = $_POST['achternaam'];
    $email = $_POST['email'];
    $bedrag = $_POST['bedrag'];

    if (strlen($naam) > 0 &&
        strlen($achternaam) > 0 &&
        strlen($email) > 0 &&
        strlen($bedrag))
    {
        $query = "INSERT INTO `Donaties`(`ID`, `Naam`, `Achternaam`, `Email`, `Bedrag`)VALUES(null, '$naam', '$achternaam', '$email', '$bedrag'";
        if (mysqli_query($mysqli, $query)){
            echo "<h1> U heeft" . $bedrag . " gedoneerd.</h1>";

        } else {
            echo "<p>FOUT bij toevoegen</p>";
            echo mysqli_error($mysqli);
        }
    }
else {
    echo "Niet alle velden zijn ingevuld";
}

?>

<center><h2>Doneer:</h2></center>
<center>

    <form name="form1" method="post" enctype="multipart/form-data">
        <fieldset>
            <table>
                <label for="naam"> Naam:</label>
                <input type="text" id="naam" name="naam" value="Anoniem"><br>
                <label for="achternaam"> Achternaam:</label>
                <input type="text" id="achternaam" name="achternaam" value="Anoniem"><br>
                <label for="email"> Email:</label>
                <input type="email" id="email" name="email" value=""><br>
                <label for="bedrag"> Bedrag:</label>
                <input type="number" id="bedrag" name="bedrag" value=""><br>

                <input class="submit" type="submit" id="button" value="Verzend" name="submit">
            </table>
        </fieldset>
    </form>

</center>
<?php
echo "<br>";
echo "<center><a href='Home.php'><button class='uitlees'><p>Ga terug naar home</p></button></a></center>";
?>
