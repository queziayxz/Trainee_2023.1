<?php

use App\Controllers\UserController;
use App\Core\Router;

$router->post('admin/delete','UserController@delete');
$router->post('admin/update','UserController@update');

?>