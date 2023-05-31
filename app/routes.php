<?php

use App\Controllers\UserController;
use App\Core\Router;

$router->get('usuarios/admin', 'UserController@index');
$router->post('usuarios/delete','UserController@delete');
$router->post('usuarios/update','UserController@update');

?>