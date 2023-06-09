<?php

namespace App\Controllers;

use App\Core\App;
use Exception;

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

        $itensPagina = 2;
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
}