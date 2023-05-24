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