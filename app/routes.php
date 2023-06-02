<?php


use App\Controllers\PostController;
use AppController\UserController;

$router->get('posts/admin', 'PostController@index');
$router->get('posts', 'PostController@listaPosts');
$router->post('posts/postIndividual', 'PostController@postIndividual');
$router->get('home', 'PostController@landingPage');
$router ->post('posts/create', 'PostController@create');
$router ->post('posts/edit', 'PostController@edit');

$router->get('usuarios/admin', 'UserController@index');
$router->post('usuarios/create', 'UserController@create');
?>


