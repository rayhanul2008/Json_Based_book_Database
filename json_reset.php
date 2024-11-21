<?php
    $json = file_get_contents('users.json');
    $userJson = json_decode($json, true);
    $user = $_GET['userName'];
    $password = $_GET['password'];
    if(array_key_exists($user, $userJson) && $userJson[$user] == $password) {
        echo "Welcome " . $user . "!";
    } else {
        echo "Wrong username or password!";
    }
?>

