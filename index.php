<?php
    
spl_autoload_register(function($className){ // самозарежда всичко,
   require_once $className . '.php';              // което ни потр€бва
});

use libs\User;

var_dump(User::fetchAll());

// $user = new User('test2', '1111');
// $user->insert();

// var_dump($user->getId());


?>

<a></a>