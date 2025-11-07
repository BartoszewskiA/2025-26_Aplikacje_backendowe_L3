<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    if(!isset($_POST['nowy_wpis'])) {
        echo "<a href=\"lab04p02.php\">Cofnij się do formularza</a>";
        return;
    }
    $nowy_wpis = trim($_POST['nowy_wpis']);
    if(empty($nowy_wpis)) {
        echo "<a href=\"lab04p02.php\">Wpis nie może być pusty. Cofnij się do formularza</a>";
        return;
    }
    $nazwa_pliku = 'baza.txt';
    if (!is_writable($nazwa_pliku)) {
        echo "Plik nie jest zapisywalny.";
        return;
    }
    file_put_contents($nazwa_pliku, "\n".$nowy_wpis . '{kz}', FILE_APPEND);
    echo "<h3>Dziękujemy za dodanie wpisu:</h3>";
    echo "<p>$nowy_wpis</p>";
    echo "<a href=\"lab04p02.php\">Powrót</a>";
    ?>
</body>
</html>