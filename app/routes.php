<?php
use App\Controllers\PostController;

$router ->post('posts/create', 'PostController@create');
$router ->post('posts/edit', 'PostController@edit');
$router->get('posts', 'PostController@index');
?>
