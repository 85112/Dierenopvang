<?php
session_start();
require "session_check.php";
require "config.php";

$DierId = $_GET['id'];

$opdracht = "SELECT * FROM dieren WHERE ID = "  . $DierId;
$result = mysqli_query($mysqli, $opdracht);
$data = mysqli_fetch_array($result);
$naam = $data['Naam'];
$soort = $data['Soort'];

$Eigenaar = $_SESSION['Voornaam'];

 //maak de query
    $query = "INSERT INTO Geadopteerde_dieren(`Naam_dier`, `Diersoort`, `Eigenaar`) VALUES('$naam', '$soort', '$Eigenaar') ";

    //vang het resultaat op
    $resultaat = mysqli_query($mysqli, $query);

    //als het resultaat uit 0 rijen bestaat
    if (mysqli_num_rows($resultaat) ==0)

$opdracht2 = "DELETE FROM dieren WHERE ID = " . $DierId;
if (mysqli_query($mysqli, $opdracht2)){
    echo "<h1>" . $data['Naam'] . " is geadopteerd </h1>";
}
?>