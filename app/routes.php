<?php


use App\Controllers\PostControllerAdm;


$router->get('posts/admin', 'PostControllerAdm@index');
$router->get('posts', 'PostControllerUser@index');
?>


