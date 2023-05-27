<?php

namespace App\Controllers;

use App\Core\App;
use Exception;

class UserController
{

    public function index()
    {
        $usuarios = App::get('database')->selectAll('users');

        $tables = [
            'usuarios' => $usuarios,
        ];

        $users = $tables['usuarios'];

        return view('admin/lista-de-usuarios-adm', compact('users'));
    }

    public function viewr()
    {
        $usuarios = App::get('database')->selectAll('users');

        $tables = [
            'usuarios' => $usuarios,
        ];

        $users = $tables['usuarios'];

        return view('admin/lista-de-usuarios-adm', compact('users'));
    }

    public function show()
    {

    }

    public function create()
    {
        $parameters = [
            'name' => $_POST['name'],
            'email' => $_POST['email'],
            'password' => $_POST['password'],
        ];
        //var_dump($parameters);
        App::get('database')->insert('users', $parameters);

        header('Location: /usuarios');
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