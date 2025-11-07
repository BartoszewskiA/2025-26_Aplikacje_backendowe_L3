<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h2>lista wpisów</h2>
    <?php
    $nazwa_pliku = 'baza.txt';
    if (!file_exists($nazwa_pliku) || !is_readable($nazwa_pliku)) {
        return;
    }
    $zawartosc_pliku = file_get_contents($nazwa_pliku);
    $wpisy = explode('{kz}', $zawartosc_pliku);
    // echo "<pre>";
    // print_r($wpisy);
    // echo "</pre>";
    foreach ($wpisy as $wpis) {
        if (!empty(trim($wpis))) {
            echo "<p>$wpis</p><hr>";
        }
    }
    ?>

    <form action="lab04p02_dodawanie.php" method="post">
        <label for="nowy_wpis">Nowy wpis:</label><br>
        <textarea name="nowy_wpis" id="nowy_wpis" rows="4" cols="50" required></textarea><br><br>
        <input type="submit" value="Dodaj wpis">
    </form>
</body>

</html>