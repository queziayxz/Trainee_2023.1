<?php

use App\Controllers\UserController;
use App\Controllers\PostController;

$router->post('admin/delete', 'PostController@delete');
$router->get('usuarios', 'UserController@index');

?>