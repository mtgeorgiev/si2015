<?php

require_once "../libs/Init.php";
Init::_init(true);

use libs\User;

$postData = json_decode(file_get_contents("php://input"), true);

$user = new User('', $postData['password']);
$user->setEmail($postData['email']);

$exists = $user->load();

if ($exists)
{
    $_SESSION['id'] = $user->getId();
    echo json_encode(['success' => true]);
}
else
{
    echo json_encode(['success' => false]);
}


