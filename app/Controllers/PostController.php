<?php

namespace App\Controllers;

use App\Core\App;
use Exception;

class PostController
{

    public function index()
    {
        $postagens = App::get('database')->selectAll('posts');

        $tables = [
            'post' => $postagens,
        ];

        $posts = $tables['post'];

        return view('admin/lista-de-post-adm', compact('posts'));
    }

    public function show()
    {

    }

    public function store()
    {

    }

    public function edit()
    {
        $parameters = [
            'title' => $_POST['title'],
            'arquivo' => $_POST['arquivo'],
            'date' => $_POST['date'],
            'conteudo' => $_POST['conteudo'],
            'author' => $_POST['author'],
        ];
        App::get('database')->edit('posts',$_POST['id'],$parameters);
        header('location: /admin');
    }

    public function delete()
    {
 
    }

    public function create()
    {
        $parameters = [
            'title' => $_POST['title'],
            'image' => $_POST['image'],
            'created_at' => $_POST['created_at'],
            'content' => $_POST['content'],
            'author' => $_POST['author'],
        ];
        // var_dump($parameters);
        App::get('database')->insert('posts',$parameters);
        header('location: /posts');
    } 
     public function update()
    {
       
    }
}

?>