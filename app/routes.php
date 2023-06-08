<?php

use App\Controllers\PostController;
use App\Controllers\UserController;

$router->get('posts/admin', 'PostController@index');
$router->get('posts', 'PostController@listaPosts');
$router->post('posts/postIndividual', 'PostController@postIndividual');
$router->get('home', 'PostController@landingPage');
$router ->post('posts/create', 'PostController@create');
$router ->post('posts/edit', 'PostController@edit');
$router->post('posts/delete', 'PostController@delete');

$router->get('usuarios/admin', 'UserController@index');
$router->post('usuarios/create', 'UserController@create');
$router->post('usuarios/delete','UserController@delete');
$router->post('usuarios/update','UserController@update');

$router->get('login','UserController@viewLogin');
$router->post('login','UserController@loginFeito');
?>
