<?php


use App\Controllers\PostControllerAdm;


$router->get('posts/admin', 'PostController@index');
$router->get('posts', 'PostController@listaPosts');
?>


