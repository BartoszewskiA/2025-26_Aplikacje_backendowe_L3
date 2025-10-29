<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    //Sprawdzam, czy dane z formularza zostały przesłane
    if (!isset($_POST['a']) || !isset($_POST['b']) || !isset($_POST['c'])) {
        echo '<a href="lab03p01_a.html">cofnij się do formularza</a>';
        exit();
    }
    $a = $_POST['a'];
    $b = $_POST['b'];
    $c = $_POST['c'];
    //sprawdzamm czy dane są numeryczne
    if (!is_numeric($a) || !is_numeric($b) || !is_numeric($c)) {
        echo "brak danych";
        exit();
    }

    $delta = $b * $b - 4 * $a * $c;
    echo "delta=" . round($delta, 3) . "<br>";
    if ($delta > 0) {
        $x1 = (-$b - sqrt($delta)) / (2 * $a);
        $x2 = (-$b + sqrt($delta)) / (2 * $a);
        echo "x1=" . round($x1, 3) . "<br>";
        echo "x2=" . round($x2, 3) . "<br>";
    } elseif ($delta == 0) {
        $x0 = (-$b) / (2 * $a);
        echo "x0=" . round($x0, 3) . "<br>";
    } else {
        echo "Brak rozwiązań<br>";
    }

    ?>

</body>

</html>