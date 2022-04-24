<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Zadanie rekrutacyjne</title>
</head>
<body>
    <form onload="autoDate('pesel');" action="add.php"method="POST">
        <input type="text" placeholder="Imie" maxlength="20" id="imie" name="imie">
        <input type="text" placeholder="Nazwisko" maxlength="30" id="nazwisko" name="nazwisko">
        <input type="number" placeholder="Pesel" id="pesel" onkeyup="autoDate('pesel');" name="pesel">
        <input type="date" id="data" name="data_urodzenia">
        <button class="button" onclick="send()" type="submit">Wyślij</button>
    </form>

    <script src="main.js"></script>
</body>
</html>