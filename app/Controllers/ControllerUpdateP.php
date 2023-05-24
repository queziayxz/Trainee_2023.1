<?php

namespace App\Controllers;

use App\Core\App;
use Exception;

class UserController
{

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
        header('location: /admin/lista-de-post-adm.html');
    }

    public function delete()
    {
 
    }

    public function create()
    {
        $parameters = [
            'title' => $_POST['title'],
            'arquivo' => $_POST['arquivo'],
            'date' => $_POST['date'],
            'conteudo' => $_POST['conteudo'],
            'author' => $_POST['author'],
        ];
        App::get('database')->insert('posts',$parameters);
        header('location: /admin/lista-de-post-adm.html');
    } 
     public function update()
    {
       
    }
}

?>