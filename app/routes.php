<?php

use AppController\UserController;


$router->get('usuarios', 'UserController@index');
$router->post('usuarios/create', 'UserController@create');
$router->post('usuarios/viewr', 'UserController@viewr')
?>