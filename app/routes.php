<?php

use AppController\UserController;


$router->get('usuarios', 'UserController@index');
$router->post('usuarios/create', 'UserController@create');
?>