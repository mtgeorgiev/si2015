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
        <?php if ($user->getId()):?>
            Здравей, <?= $user->getName()?>
            <a class="button" id="logout" href="logout.php">Излез</a>
        <?php else: ?>
            <a class="button" id="register" href="register.php">Регистрирай се</a>
            <a class="button" href="login.php">Влез</a>
        <?php endif?>
    </body>
</html>
