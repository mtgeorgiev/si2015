<?php

require_once "libs/Init.php";
Init::_init();

use libs\User;

$user = new User("");
if (isset($_SESSION['id']) && $_SESSION['id'])
{
    $user->setId($_SESSION['id']);
    $user->load();
}

$response = [
    'a' => 5,
    'b' => 'pet',
    'data' => $_POST,
    'message' => 'Мерси',
    'logged_user' => $user->getName(),
];

echo json_encode($response);
