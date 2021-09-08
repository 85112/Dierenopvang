<?php
// database logingegevens
$db_hostname = 'localhost'; //of '127.0.0.1'
$db_username = '85112_wesley';
$db_password = '@00Kwht9';
$db_database = '85112_UNIVERS2';

// maak de database-verbinding
$mysqli = mysqli_connect($db_hostname, $db_username, $db_password, $db_database);

// als de verbinding niet gemaakt kan worden: geef een foutmelding
if (!$mysqli) {
    echo "FOUT: geen connectie naar database. <br>";
    echo "Errno: ".mysqli_connect_error(). "<br/>";
    echo "Error: ".mysqli_connect_error(). "<br/>";
    exit;
}