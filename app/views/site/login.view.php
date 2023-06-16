<!DOCTYPE html>
<head>
  
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../public/css/Pagina_Login.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,200;0,300;0,400;1,100;1,200;1,300&display=swap" rel="stylesheet">
    <title>Login/Registro</title>
</head>
<body>
    <?php   
    ?>
    <section>
        <div class="area-login">
            <div class="login">
                <div class="imagem-login">
                    <img src="../../../public/assets/logo2.jpg">
                </div>




                <form method="post" action="/login">
                    <input type="email" name="email"  placeholder="Email do Usuario" autofocus>
                    <input type="password" name="password"  placeholder="Sua senha" autofocus>
                    <p style="color: #9c1111">
                     <?php 
                        if(isset($_POST['confirmado'])){
                        echo $erro;
                        } 
                     ?> 
                    </p>
                    <input type="submit" name="confirmado"  value="entrar">
                    


                </form>
                
            </div>
        </div>

    </section>
    
</body>
</html>