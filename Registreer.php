<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Registreer</title>
</head>
<body>

<h2>Maak een account</h2>

<form action="Registreer_verwerk.php" method="post">
    <label for="Voornaam">Voornaam:</label><br>
    <input type="text" id="Voornaam" name="Voornaam" value="" required><br>
    <label for="Achternaam">Achternaam:</label><br>
    <input type="text" id="Achternaam" name="Achternaam" value="" required><br>
    <label for="Wachtwoord">Wachtwoord:</label><br>
    <input type="password" id="Wachtwoord" name="Wachtwoord" value="" required><br>
    <label for="email">email:</label><br>
    <input type="email" id="email" name="email" value="" required><br>
    <label for="telefoon">telefoon:</label><br>
    <input type="number" id="telefoon" name="telefoon" value="" required><br>
    <label for="adres">adres:</label><br>
    <input type="text" id="adres" name="adres" value="" required><br>
    <input type="submit" name="submit" value="Toevoegen">
</form>
</body>
</html>