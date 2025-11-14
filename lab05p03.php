<?php
$znaleziono = false;
for ($i = 1; $i <= 4; $i++) { // sprawdzasz, które bannery już wyświetlano
    if (!isset($_COOKIE['banner' . $i])) {
        $tab[] = $i;
        $znaleziono = true;
    }
}
// jeżeli nie wyświetlano, włączasz do tabeli wszystkie.
if (!($znaleziono)) {
    for ($i = 1; $i <= 4; $i++) {
        $tab[] = $i;
        setcookie("banner".$i);
    }
}

    $nr = $tab[rand(0, count($tab)-1)];
    setcookie("banner" . $nr, "1", time() + 86400);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>`
    <?php
    $nr = rand(1, 4);
    echo "<img src=\"banery\\rysunek" . $nr . ".png\" alt=\"baner 01\"/>";
    ?>
</body>

</html>