<?php

namespace App\Controllers;

use App\Core\App;
use Exception;

//session_start();
   /* if (!isset($_SESSION['logado'])) {
        header('Location: /login');
    }*/

class PostController
{
    public function index()
    {
        $page = 1;

        if(isset($_GET['pagina']) && !empty($_GET['pagina'])){
            $page = intval($_GET['pagina']);

            if($page <= 0){
                return redirect('posts/admin');
            }
        }

        $itensPagina = 10;
        $inicio = $itensPagina * $page - $itensPagina;
        $rows_count = App::get('database')->countAll('posts');

        if($inicio > $rows_count)
        {
            return redirect('posts/admin');
        }

        $postagens = App::get('database')->selectAll('posts', $inicio, $itensPagina);

        $tables = [
            'post' => $postagens,
        ];

        $posts = $tables['post'];

        $total_pages = ceil($rows_count/$itensPagina);

        return view('admin/lista-de-post-adm', compact('posts','page','total_pages'));
    }

    public function listaPosts()
    {
        $page = 1;

        if(isset($_GET['pagina']) && !empty($_GET['pagina'])){
            $page = intval($_GET['pagina']);

            if($page <= 0){
                return redirect('posts/admin');
            }
        }

        $itensPagina = 6;
        $inicio = $itensPagina * $page - $itensPagina;
        $rows_count = App::get('database')->countAll('posts');

        if($inicio > $rows_count)
        {
            return redirect('posts/admin');
        }


        $postagens = App::get('database')->selectAll('posts', $inicio, $itensPagina);

        $tables = [
            'post' => $postagens,
        ];

        $posts = $tables['post'];

        $total_pages = ceil($rows_count/$itensPagina);

        return view('site/lista-posts', compact('posts','page','total_pages'));
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
       
        $pesquisa = filter_input(INPUT_GET,'buscapost');
        $posts = App::get('database')->busca($pesquisa); 
        return view("site/lista-posts",compact('posts'));
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
        $id = $_POST['id'];

        App::get('database')->delete('posts', $id);
        header('Location: /posts/admin');
    }
}