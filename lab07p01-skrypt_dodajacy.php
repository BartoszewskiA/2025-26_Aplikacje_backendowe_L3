<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    if (
        isset($_POST['panel_user']) && isset($_POST['panel_pass'])
        && !empty(trim($_POST['panel_user'])) && !empty(trim($_POST['panel_pass']))
    ) {
        $new_user = trim($_POST['panel_user']);
        $new_pass = trim($_POST['panel_pass']);
        $new_user_array = array(
            "nazwa" => $new_user,
            "haslo" => crc32($new_pass)
            // "haslo" => password_hash($new_pass, PASSWORD_BCRYPT)
        );
        //pobranie pliku json
        if (file_exists($url)) {
            $users_json = file_get_contents($url);
            $users_array = json_decode($users_json, true);
        } else
            $users_array = array("uzytkownicy" => array());
        //modyfikacja tablicy
        $users_array['uzytkownicy'][] = $new_user_array;
        //zapis do pliku json
        $nowa_users_json = json_encode($users_array, JSON_PRETTY_PRINT);
        file_put_contents('users_2.json', $nowa_users_json);

        echo "<p>Dodano użytkownika $new_user. Powrót do <a href='lab07p01-panel.php'>panelu</a></p>";
    }
    else {
        echo "<p>Nie podano wszystkich danych użytkownika. Powrót do <a href='lab07p01-panel.php'>panelu</a></p>";
    }
    ?>

</body>

</html>