<?php

    if($_SESSION['logado'] == false)
    {
        unset($_SESSION['email']);
        unset($_SESSION['password']);  
        header('Location: /visuLog');
    }
?>