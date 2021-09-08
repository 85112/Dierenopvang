<!DOCTYPE html>
<html lang="en">
<header>
    <title>Login</title>
</header>

<body>
<h2>LOGIN</h2>
<form method="post" action="Inlog_eigenaar_verwerk.php">
    <table border="0">
        <tr>
            <td>Gebruikernaam</td>
            <td><input type="text" name="Voornaam" required></td>
        </tr>
        <tr>
            <td>Wachtwoord</td>
            <td><input type="password" name="Wachtwoord" required></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="Login" value="LOGIN"></td>
        </tr>
    </table>
</form>

<a href="Home.php">Terug naar de home pagina.</a>
<a href="Registreer.php">Geen account? Registreer</a>

</body>
</html>