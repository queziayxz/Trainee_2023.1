<?php
    session_start();
    var_dump($_SESSION);

    if($_SESSION['logado'] == false)
    {
        unset($_SESSION['email']);
        unset($_SESSION['password']);  
        header('Location: /visuLog');
    }
?>