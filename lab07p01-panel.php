<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $url = "users_2.json";
    if (file_exists($url)) {
        $users_json = file_get_contents($url);
        $users_array = json_decode($users_json, true);
    }
    else 
        $users_array = array("uzytkownicy" => array());

    echo "<h3>Lista użytkowników:</h3>";
    // echo '<pre>';
    // echo print_r($users_array["uzytkownicy"]);
    // echo '</pre>';
    foreach ($users_array['uzytkownicy'] as $user) {
        echo "<p>Nazwa: " . $user['nazwa'] . "</p>";
    }
    ?>
    <br><br>
    <h3>Dodaj użytkownika:</h3>
    <form action="lab07p01-skrypt_dodajacy.php" method="post">
        <input type="text" name="panel_user" placeholder="Nazwa użytkownika" />
        <br><br>
        <input type="password" name="panel_pass" placeholder="Hasło" />
        <br><br>
        <input type="submit" value="Dodaj użytkownika" />
    </form>
</body>

</html>