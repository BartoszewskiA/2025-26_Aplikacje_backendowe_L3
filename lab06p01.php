<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    if (isset($_POST['user_post'])) {
        $_SESSION['user_session'] = $_POST['user_post'];
    }
    ?>



    <?php
    if (isset($_SESSION['user_session'])) {
        $user = $_SESSION['user_session'];
        if (empty(trim($user))) $user = "Gość";
        echo "<h3>Witaj $user</h3>";
        echo '<br>';
        echo '<form action="lab06p01-wyloguj.php" method="post">';
        echo '<input type="hidden" name="wyloguj" value="yes"/>';
        echo '<input type="submit" value="Wylogu się"/>';
        echo '</form>';
    } else {
        echo '<form action="" method="post">';
        echo '<input type="text" name="user_post"/>';
        echo '<br><br>';
        echo '<input type="submit" value="Zaloguj się"/>';
        echo '</form>';
    }
    ?>
</body>

</html>