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
        App::get('database')->delete('posts', $_POST['id']);
        header('Location: /admin');
    }
}