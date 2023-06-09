<?php
    
    require('app/views/includes/Sessao.php');
?>

<!DOCTYPE html>

<html lang="pt-br">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, inital-scale=1.0">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
        <link rel="stylesheet" href="/public/css/navbar_footer.css" />
        <link rel="stylesheet" href="../../../public/css/listaPost.css">
        <link href="https://fonts.googleapis.com/css?family=Montserrat:100,400" rel="stylesheet">
        <link rel="shortcut icon" href="../../../public/assets/logo_blog.jpg">

        <title>Posts - Radiator Springs Gazette</title>
    </head>

    <body>

        <?php require('app/views/includes/NavBar.php'); ?>

        <div class="principal">
            <div class="search-box">
                <input class="search-text" type="text" placeholder="Pesquisar">
                <a class="search-button" href="#">
                    <ion-icon name="search"></ion-icon>
                </a>
            </div>

            <div class="main">
            <?php foreach($posts as $post): ?>
                <div class="miniatura">
                    <img class="link-img" src="/<?= $post->image?>" alt="Imagem do Post">
                    <div class="miniatura-text">
                        <h1><?php echo $post->title?></h1>
                        <h2><?php echo substr($post->content, 0, 120) . "...";?></h2>
                        <div class="button">
                            <form method="post" action="posts/postIndividual">
                                <input type="hidden" name="id" value="<?php echo $post->id?>">
                                <a href=""><button type="submit" class="ler" title="Ler Post Completo">Ler Post Completo</button></a>  
                            </form>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
            </div>
        </div>

        <div class = "botao">
            <a href="#top"><i class="fa-solid fa-circle-arrow-up"></i></a>
        </div>

        <?php require('app/views/includes/Footer.php'); ?>
        
    </body>

    <script src="https://kit.fontawesome.com/f9c72cff41.js" crossorigin="anonymous"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
    crossorigin="anonymous"></script>

</html>