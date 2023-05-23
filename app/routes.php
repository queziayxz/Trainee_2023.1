<?php

use App\Controllers\UserController;
use App\Controllers\PostController;

$router->post('admin/delete', 'UserController@delete');

?>