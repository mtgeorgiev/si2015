<?php

// automatically loads classes
spl_autoload_register(function($className){
   require_once $className . '.php';
});

use libs\User;

var_dump(User::fetchAll());

// $user = new User('test2', '1111');
// $user->insert();

// var_dump($user->getId());


?>

<a></a>