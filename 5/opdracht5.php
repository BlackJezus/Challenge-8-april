<?php
include "opdracht53.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Opdracht 5</title>
</head>

<body>
    <a href="index.html">HOME</a>
    <h1>Opdracht 5</h1>
    <p>Deze opdracht is het vervolg op opdracht 4. Als opdracht 4 gelukt is, kun je dus gebruik maken van de code die je daar had, maar we gaan er iets aan toevoegen. Namelijk: we willen in het selectiemenu een specifieke gebruiker kunnen selecteren.</p>
    <p>Zorg er voor dat het selectiemenu de user_id's van alle personen in je database toont, zonder de EDIT functionaliteit te verliezen.</p>
    <h2>Wijzig hier de gegevens van een specifieke gebruiker:</h2>
    <form action="opdracht52.php" method="post">
    <label>User id:
            <select id="select_user" name="user_id">
            <!-- SCHRIJF HIER JE CODE -->
                <?php idOptions();
                ?>
            </select>
        </label><br>
        <label>Gebruikersnaam: <input name="username"></label><br>
        <label>E-mail: <input type="email" name="email"></label><br>
        <label>Wachtwoord: <input type="password" name="password"></label><br>
        <input type="submit" name="submit"><br>
    </form>
    <!-- SCHRIJF HIER JE CODE -->
</body>