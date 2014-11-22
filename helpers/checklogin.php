<?php

$username = $_POST ["username"];
$password = $_POST ["password"];

if($user->validate($username, $password)) {
    $session->register($username, $password);
    echo "success";
} else {
    echo "failure";
}

?>
