<?php

namespace App\Controllers;

use App\Core\App;
use Exception;

class UserController
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
        App::get('database')->delete('usuarios', $_POST['id']);
        header('Location: /admin');
    }
}