<?php

use App\Controllers\UserController;
use App\Controllers\PostController;

$router->post('posts/delete', 'PostController@delete');
$router->get('usuarios', 'UserController@index');
$router->get('posts', 'PostController@index');

?>