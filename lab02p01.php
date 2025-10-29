<!DOCTYPE html>
<html lang="en">

<?php 
$ile = 323;
$tab = array();
for($i=0; $i<$ile; $i++)
{
    $tab[] = mt_rand(1, 100);
}
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
    $kolumny = 20;
    $wiersze = ceil($ile / $kolumny);
    echo "<table>\n";
    for($i=0; $i<$wiersze; $i++){
        echo "<tr>\n";
        for($j=0; $j<$kolumny; $j++){
              $index = $i * $kolumny + $j;
           echo "<td>";
           if($index < $ile)
            echo $tab[$index];
           echo "</td>";       
        }
        echo "</tr>\n";
    }
    echo "</table>\n";
    ?>
    
</body>
</html> 