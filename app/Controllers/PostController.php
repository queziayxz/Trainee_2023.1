<?php

namespace App\Controllers;

use App\Core\App;
use Exception;

class PostController
{
    public function show()
    {

    }

    public function create()
    {
 
    }

    public function store()
    {

    }

    public function edit()
    {
  
    }

    public function update()
    {
        
    }

    public function delete()
    {
        $id = $_POST['id'];

        App::get('database')->delete('posts', $id);
        header('Location: /posts');
    }
}