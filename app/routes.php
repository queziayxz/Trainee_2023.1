<?php

use AppController\UserController;


$router->get('usuarios/admin', 'UserController@index');
$router->post('usuarios/create', 'UserController@create');
?>