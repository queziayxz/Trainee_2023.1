<?php

namespace App\Controllers;

use App\Core\App;
use Exception;



//session_start();
   /* if (!isset($_SESSION['logado'])) {
        header('Location: /login');
    }*/

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
        $parameters = [
            'name' => $_POST['name'],
            'email' => $_POST['email'],
            'password' => $_POST['password'],
        ];
        //var_dump($parameters);
        App::get('database')->insert('users', $parameters);

        header('Location: /usuarios/admin');
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
            'name' => $_POST['name'],
            'email' => $_POST['email'],
            'password' => $_POST['password'],
        ];
        app::get('database')->edit('users', $_POST['id'], $parameters);

        header('Location: /usuarios/admin');

    }

    public function delete()
    {
        App::get('database')->delete('users', $_POST['id']);
        header('Location: /usuarios/admin');
    }
    public function viewLogin()
    {

        return view('site/login');
    }
    public function loginFeito()
    {
        $caminho = $_SERVER['PATH_INFO'];

        $email = $_POST["email"];
        $password = $_POST["password"];

        $logged = App::get('database')->login('users', $email, $password);
        $ehRotaLogin = stripos($caminho, 'login');

        if($logged && $ehRotaLogin){
            header('Location: /home');
            $_SESSION['logado'] = true;
            $_SESSION['email'] = $email;
            $_SESSION['password'] = $password;
            session_start();
        } else { 
            unset($_SESSION['email']);
            unset($_SESSION['password']);
            $erro = [

                'erro' => "Usuário ou senha incorretos",
            ] ;
            return view('site/login', $erro);
        }

    }
   
}