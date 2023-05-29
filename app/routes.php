<?php

use App\Controllers\PostController;
use App\Controllers\UserController;

// Rotas do Adm
$router->get('usuarios', 'UserController@index'); // Index do usuario
$router->get('posts/admin', 'PostController@index'); // Index do post
$router->post('posts/delete', 'PostController@delete'); // Deletar post

// Rotas do usuario
$router->get('home', 'PostController@landingPage'); // Landing Page
$router->get('posts', 'PostController@listaPosts'); // Lista de posts do usuario
$router->post('posts/postIndividual', 'PostController@postIndividual'); // Post individual
?>