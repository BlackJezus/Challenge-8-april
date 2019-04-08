<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <link href="opdracht32.php">
    <title>Opdracht 3</title>
</head>

<body>
    <a href="index.html">HOME</a>
    <h1>Opdracht 3</h1>
    <p>Hier onder staat een HTML-formulier voor nieuwe gebruikers die zich willen inschrijven. Schrijf de code die ervoor zorgt dat een nieuwe gebruiker ook daadwerkelijk in de database terecht komt. Uiteraard kun je bij <a href="opdracht2.php">opdracht 2</a> checken of het gelukt is.</p>
    <h2>Schrijf u in als nieuwe gebruiker:</h2>
    <form action="opdracht32.php" method="post">
        <label>Gebruikersnaam: <input name="username"></label><br>
        <label>E-mail: <input type="email" name="email"></label><br>
        <label>Wachtwoord: <input type="password" name="password"></label><br>
        <input type="submit" name="submit"><br>
    </form>
    <!-- SCHRIJF HIER JE CODE -->
</body>
</html>