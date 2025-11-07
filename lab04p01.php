<!doctype html>
<html>

<head>
    <meta charset="UTF-8" />
    <title></title>
</head>

<body>
    <?php
    if (!isset($_GET['a']) || !isset($_GET['b']) || !isset($_GET['c']))
    {
    echo "<form action=\"\" method=\"get\">";
    echo '<label for="a">a:</label>';
    echo '<input type="number" name="a" required placeholder="a"/>';
    echo '<br/><br/>';
    echo '<label for="b">b:</label>';
    echo '<input type="number" name="b" required placeholder="b"/>';
    echo '<br/><br/>';
    echo '<label for="c">c:</label>';
    echo '<input type="number" name="c" required placeholder="c"/>';
    echo '<br/><br/>';
    echo '<input type="submit" value="Oblicz" />';
    echo '</form>';
    }
    ?>



    <?php
    if (!isset($_GET['a']) || !isset($_GET['b']) || !isset($_GET['c'])) {
        return;
    }
    $a = $_GET['a'];
    $b = $_GET['b'];
    $c = $_GET['c'];
    if (is_numeric($a) && is_numeric($b) && is_numeric($c)) {
        echo "Średnia = " . ($a + $b + $c) / 3;
    }
    ?>
</body>

</html>