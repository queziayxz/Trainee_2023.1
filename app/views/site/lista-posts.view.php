<!DOCTYPE html>

<html lang="pt-br">

    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="../../../public/css/listaPost.css">
        <link href="https://fonts.googleapis.com/css?family=Montserrat:100,400" rel="stylesheet">
        <script type="text/javascript" src="../../../public/js/index.js"></script>
        <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
        <meta name="viewport" content="width=device-width, inital-scale=1.0">

        <title>Posts - Radiator Springs Gazette</title>
        <link rel="shortcut icon" href="../../../public/assets/logo_blog.jpg">
    </head>

    <body>
        <div class="principal">
            <div class="search-box">
               <form action="" method="GET">
                <!-- <label for="busca"  placeholder="Buscar por titulo do post"></label> -->
                <input type="text" name="buscapost" id="buscapost" placeholder="Nome do Post">
                <button type="submit">Buscar</button>
               </form>
            </div>

            <div class="main">
            <?php foreach($posts as $post): ?>
                <div class="miniatura">

                        <img class="link-img" src="<?= $post->image?>">
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
    </body>

    <script src="https://kit.fontawesome.com/f9c72cff41.js" crossorigin="anonymous"></script>

</html>