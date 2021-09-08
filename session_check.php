<?php

if (!isset($_SESSION['Voornaam'])) {
    header("location:Inlog.php");

} else {
    echo "<h3>Welkom, " . $_SESSION['Voornaam'] . "</h3>";

    if ($_SESSION['Level'] < 1) {
        echo "<p>U heeft geen rechten om deze pagina te bekijken.</p>";
        echo "<p><a href='Home.html'>Ga terug</p>";
        exit();
    }
}
