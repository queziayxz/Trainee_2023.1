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
            'image' =>  $_FILES['image'],
            'created_at' => $_POST['created_at'],
            'content' => $_POST['content'],
            'author' => $_POST['author'],
        ];
        App::get('database')->edit('posts',$_POST['id'],$parameters);
        header('location: /posts');
    }

    public function delete()
    {
 
    }

    public function create()
    {
        $arquivo = $_FILES['image']['name'];
        $novoNome = uniqid();
        $pasta = 'public/img/';
        $extencao = strtolower(pathinfo($arquivo, PATHINFO_EXTENSION));
        $deuCerto = move_uploaded_file($_FILES['image']['tmp_name'], $pasta . $novoNome . "." . $extencao);

        $parameters = [
            'title' => $_POST['title'],
            'image' => $pasta . $novoNome . "." . $extencao,
            'created_at' => $_POST['created_at'],
            'content' => $_POST['content'],
            'author' => $_POST['author'],
        ];

        App::get('database')->insert('posts',$parameters);
        header('location: /posts');
    }
        

     public function update()
    {
       
    }
}

?>