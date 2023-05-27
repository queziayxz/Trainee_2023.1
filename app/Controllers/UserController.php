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
        $parameters = [
            'nome' => $_POST['name'],
            'email' => $_POST['email'],
            'senha' => $_POST['password'],
        ];
        app::get('database')->edit('users', $_POST['id'], $parameters);

        header('Location: /admin');

    }

    public function delete()
    {
        App::get('database')->delete('users', $_POST['id']);
        header('Location: /admin');
    }
}