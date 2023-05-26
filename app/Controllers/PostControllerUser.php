<?php

namespace App\Controllers;

use App\Core\App;
use Exception;

class PostControllerUser
{
    public function index()
    {
        $postagens = App::get('database')->selectAll('posts');

        $tables = [
            'post' => $postagens,
        ];

        $posts = $tables['post'];

        return view('site/lista-posts', compact('posts'));
    }
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
 
    }
}