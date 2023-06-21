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
        $page = 1;

        if(isset($_GET['pagina']) && !empty($_GET['pagina'])){
            $page = intval($_GET['pagina']);

            if($page <= 0){
                return redirect('usuarios/admin');
            }
        }

        $itensPagina = 10;
        $inicio = $itensPagina * $page - $itensPagina;
        $rows_count = App::get('database')->countAll('users');

        if($inicio > $rows_count)
        {
            return redirect('usuarios/admin');
        }

        $usuarios = App::get('database')->selectAll('users', $inicio, $itensPagina);

        $tables = [
            'usuarios' => $usuarios,
        ];

        $users = $tables['usuarios'];

        $total_pages = ceil($rows_count/$itensPagina);

        return view('admin/lista-de-usuarios-adm',compact('users','page','total_pages'));
    }

    // Paginação
    public function view()
    {
        
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
        
        // $caminho = $_SERVER['PATH_INFO'];

        $email = $_POST["email"];
        $password = $_POST["password"];

        $logged = App::get('database')->login('users', $email, $password);
        // $ehRotaLogin = stripos($caminho, 'login');
        
        if (!empty($logged)) {
            
            
            $_SESSION['logado'] = true;
            $_SESSION['email'] = $email;
            $_SESSION['password'] = $password;
            header('Location: /dashboard');
        } else { 
            unset($_SESSION['email']);
            unset($_SESSION['password']);
            unset($_SESSION['logado']);
            $erro = [

                'erro' => "Usuário ou senha incorretos",
            ] ;
            
            return view('site/login', $erro);
        } 
    }

    public function logout()
    {
        session_start();
        unset($_SESSION['email']);
        unset($_SESSION['password']);
        unset($_SESSION['logado']);
        header('Location: /');
    }

    public function dashboard ()
    {
        return view('admin/dashboard');
    }
   
}