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
  
    }

    public function delete()
    {
 
    }

    public function create()
    {
        $parameters = [
            'title' => $_POST['title'],
            'content' => $_POST['content'],
            'image' => $_POST['image'],
            'created_at' => $_POST['created_at'],
            'author' => $_POST['author'],
        ];
        App::get('radiator_springs')->insert('posts',$parameters);
        header('location: /admin/lista-de-post-adm.html');
    } 
     public function update()
    {
        $parameters = [
            'title' => $_POST['title'],
            'content' => $_POST['content'],
            'image' => $_POST['image'],
            'created_at' => $_POST['created_at'],
            'author' => $_POST['author'],
        ];
        App::get('radiator_springs')->edit($_POST['id'],'posts',$parameters);
        header('location: /admin/lista-de-post-adm.html');
    }
}

?>