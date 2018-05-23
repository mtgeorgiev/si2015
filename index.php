<?php

require_once "libs/Init.php";
Init::_init();

use libs\User;

// var_dump(User::fetchAll());

// $user = new User('test2', '1111');
// $user->insert();

// var_dump($user->getId());

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Начало</title>
    </head>
    <body>
        <a class="button" id="register" href="register.php">Регистрирай се</a>
        <a class="button" href="login.php">Влез</a>
    </body>
</html>
