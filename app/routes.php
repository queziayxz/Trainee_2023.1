<?php


use App\Controllers\PostController;


$router->get('posts/admin', 'PostController@index');
$router->get('posts', 'PostController@listaPosts');
$router->post('posts/postIndividual', 'PostController@postIndividual');
$router->get('home', 'PostController@landingPage');
$router ->post('posts/create', 'PostController@create');
$router ->post('posts/edit', 'PostController@edit');
?>


