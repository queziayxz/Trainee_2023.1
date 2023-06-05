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
    public function listaPosts()
    {
        $postagens = App::get('database')->selectAll('posts');

        $tables = [
            'post' => $postagens,
        ];

        $posts = $tables['post'];

        return view('site/lista-posts', compact('posts'));
    }
    public function postIndividual()
    {
        $id = $_POST['id'];
        $postagens = App::get('database')->selectPost($id, 'posts');

        $tables = [
            'post' => $postagens,
        ];

        $posts = $tables['post'];

        return view('site/post-individual', compact('posts'));
    }
    public function landingPage()
    {
       
        $postagens = App::get('database')->selectUltimosPosts('posts');

        $tables = [
            'post' => $postagens,
        ];

        $posts = $tables['post'];

        return view('site/landingPage', compact('posts'));
    }





    public function show()
    {
        $pesquisa = $mysqli->real_escape_string($_GET['buscapost']);
        App::get('database')->busca($pesquisa);
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
        header('location: /posts/admin');

    }

    public function store()
    {

    }

    public function edit()
    {
        if($_FILES['image']['name'] === ''){
            $parameters = [
                'title' => $_POST['title'],
                // 'image' =>  $pasta . $novoNome . "." . $extencao,
                'created_at' => $_POST['created_at'],
                'content' => $_POST['content'],
                'author' => $_POST['author'],
            ];
            App::get('database')->edit('posts',$_POST['id'],$parameters);
            header('location: /posts/admin');
        }
        else{
            $arquivo = $_FILES['image']['name'];
            $novoNome = uniqid();
            $pasta = 'public/img/';
            $extencao = strtolower(pathinfo($arquivo, PATHINFO_EXTENSION));
            $deuCerto = move_uploaded_file($_FILES['image']['tmp_name'], $pasta . $novoNome . "." . $extencao);
    
            $parameters = [
                'title' => $_POST['title'],
                'image' =>  $pasta . $novoNome . "." . $extencao,
                'created_at' => $_POST['created_at'],
                'content' => $_POST['content'],
                'author' => $_POST['author'],
            ];
            App::get('database')->edit('posts',$_POST['id'],$parameters);
            header('location: /posts/admin');
        }

    }

    public function update()
    {

    }

    public function delete()
    {

    }
}

