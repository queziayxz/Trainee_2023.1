<?php

use App\Controllers\PostController;
use App\Controllers\UserController;

// Rotas do Admin
$router->get('usuarios/admin', 'UserController@index'); // Lista de Usuários
$router->post('usuarios/create', 'UserController@create');
$router->post('usuarios/update','UserController@update');
$router->post('usuarios/delete','UserController@delete');

$router->get('posts/admin', 'PostController@index'); // Lista de Posts
$router->post('posts/create', 'PostController@create');
$router->post('posts/edit', 'PostController@edit');
$router->post('posts/delete', 'PostController@delete');

// Rotas do Usuário
$router->get('home', 'PostController@landingPage');
$router->get('posts', 'PostController@listaPosts');
$router->post('posts/postIndividual', 'PostController@postIndividual');
?>
