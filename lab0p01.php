<!DOCTYPE html>
<html lang="en">
    <?php 
    $osoby = array("John Doe", "Jane Smith", "Alice Johnson");
    ?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css"
          href="styl.css">
</head>
<body>
    <?php
    // for($i=0; $i<count($osoby); $i++) {

    //     echo "<div>";
    //     echo "<h2>Wizytówka</h2>";
    //     echo "<p>Imię i nazwisko: $osoby[$i]</p>";
    //     echo "</div>";
    // }

    foreach($osoby as $osoba) {

        echo "<div>";
        echo "<h2>Wizytówka</h2>";
        echo "<p>Imię i nazwisko: $osoba</p>";
        echo "</div>";
    }

    ?>
</body>
</html>