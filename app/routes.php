<?php

use App\Controllers\UserController;
use App\Core\Router;

$router->post('admin/update','UserController@update');

?>