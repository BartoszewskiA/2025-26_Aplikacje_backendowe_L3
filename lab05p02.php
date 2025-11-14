<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    if (isset($_COOKIE['odwiedziny'])) {
        $cookie_tab = explode(';', $_COOKIE['odwiedziny']);
        $ile = $cookie_tab[1];
    } else
        $ile = 0;


    $ile++;
    $tab[] = time();
    $tab[] = $ile;
    $string = implode(';', $tab);
    setcookie('odwiedziny', $string, time() + 30 * 24 * 60 * 60);


    if (isset($_COOKIE['odwiedziny'])) {
        $cookie_tab = explode(';', $_COOKIE['odwiedziny']);

        echo ("<p>Tę stronę odwiedziłeś $cookie_tab[1] razy. Ostatnio ");
        echo (date('d.m.Y, H:i:s', $cookie_tab[0]) . "</p>");
    } else {
        echo ("<p>Jesteś tu pierwszy raz (od miesiąca)</p>");
    }
    ?>
</body>

</html>