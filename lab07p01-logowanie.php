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
        $user = $_POST['user_post'];
        $pass = $_POST['pass_post'];
        $users_json = file_get_contents("users_2.json");
        $users_array = json_decode($users_json, true);
        //    echo "<pre>";
        //    echo print_r($users_array['uzytkownicy']);
        //    echo "</pre>";
        $flaga = false;
        foreach ($users_array['uzytkownicy'] as $uzytkownik)
            if ($uzytkownik['nazwa'] == $user && $uzytkownik['haslo'] == crc32($pass)) {
                $flaga = true;
                break;
            }
        if ($flaga) {
            $_SESSION['user_session'] = $user;
        } else
            echo "<h3>Nieprawidłowy użytkownik lub hasło</h3>";
    }
    ?>



    <?php
    if (isset($_SESSION['user_session'])) {
        $user = $_SESSION['user_session'];
        if (empty(trim($user))) $user = "Gość";
        echo "<h3>Witaj $user</h3>";
        echo '<br>';
        echo '<form action="lab06p02-wyloguj.php" method="post">';
        echo '<input type="hidden" name="wyloguj" value="yes"/>';
        echo '<input type="submit" value="Wylogu się"/>';
        echo '</form>';
    } else {
        echo '<form action="" method="post">';
        echo '<input type="text" name="user_post"/>';
        echo '<br><br>';
        echo '<input type="password" name="pass_post"/>';
        echo '<br><br>';
        echo '<input type="submit" value="Zaloguj się"/>';
        echo '</form>';
    }
    ?>
</body>

</html>