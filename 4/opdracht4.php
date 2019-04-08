<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <link href="opdracht42.php"
</head>

<body>
    <a href="index.html">HOME</a>
    <h1>Opdracht 4</h1>
    <p>Hier onder staat een HTML-formulier om de gegevens van users aan te passen. Op dit moment kan alleen user 1 gekozen worden. Dat is niet erg, in de volgende opdracht veranderen we dit.</p>
<p>Schrijf de code die ervoor zorgt dat de bestaande gegevens ook daadwerkelijk aangepast worden. Uiteraard kun je bij <a href="opdracht2.php">opdracht 2</a> checken of het gelukt is.</p>
<p><span>Let op:</span> als je hebt lopen rommelen met je database, zou het kunnen dat je geen user hebt met user_id 1. In dat geval volg je eerst de volgende stappen:</p>
<ul>
    <li>Draai in je database de query "TRUNCATE users" om je tabel te resetten</li>
    <li>Vul de database met nieuwe data (bijvoorbeeld met het formulier in opdracht 3)</li>
</ul>
    <h2>Wijzig hier de gegevens van een gebruiker:</h2>
    <form action="opdracht42.php" method="post">
        <label>User id:
            <select id="select_user" name="user_id">
                <option value="1">1</option>
            </select>
        </label><br>
        <label>Gebruikersnaam: <input name="username"></label><br>
        <label>E-mail: <input type="email" name="email"></label><br>
        <label>Wachtwoord: <input type="password" name="password"></label><br>
        <input type="submit" name="submit"><br>
    </form>
    <!-- SCHRIJF HIER JE CODE -->

</body>
</html>