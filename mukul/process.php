<?php
// $users = [
//     'asif' => 'asif1234',
//     'sanjoy' => 'sanjoy1234',
//     'rayhan' => 'ramInfinity',
// ];

$json = file_get_contents('users.json');
$users = json_decode($json, true);

//echo json_encode($users);

$user = $_REQUEST['userName'];
$password = $_REQUEST['password'];

if(array_key_exists($user, $users) && $users[$user] == $password) {
    echo "Welcome " . $user . "!";
} else {
    echo "Wrong username or password!";
}

?>
