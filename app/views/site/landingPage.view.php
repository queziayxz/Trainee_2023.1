<!DOCTYPE html>
<html lang="pt">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <style>
      @import url("https://fonts.googleapis.com/css2?family=Montserrat:wght@100;400&display=swap");
    </style>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="../../../public/css/landingP.css" />
    <link rel="stylesheet" href="/public/css/navbar_footer.css" />
    <link rel="shortcut icon" href="../../../public/assets/logo_blog.jpg">

    <title>Radiator Springs</title>

  </head>
  <body>
     <?php /*   
    //session_start();
    $caminho = $_SERVER['PATH_INFO'];

    $ehRotaLogin = stripos($caminho, 'login');

    if(!isset($_SESSION['logado']) && !$ehRotaLogin === false);
    {
      unset($_SESSION['email']);
      unset($_SESSION['password']);
     // header('Location: /home');
      exit();
    }
    //$logado = $_SESSION['email'];
   */ ?> 

    <main>

      <?php require('app/views/includes/NavBar.php'); ?>

      <section id="intro">
        <div id="imgIntro">
          <img src="../../../public/assets/logo2.jpg" alt="imagem principal" />
        </div>
        <div id="pIntro">
          <p>
            As animações têm o poder de nos levar a mundos mágicos e
            encantadores, despertando nossa imaginação e fazendo-nos sentir
            emoções que muitas vezes não conseguimos explicar. <br />
            Neste blog, vamos explorar o mundo das animações e tudo o que o
            torna tão especial. Vamos discutir as últimas novidades em filmes de
            animação, as trilhas sonoras que nos fazem cantar e dançar, os
            personagens que amamos e odiamos, além de curiosidades e teorias que
            tornam esses filmes ainda mais fascinantes.
          </p>
        </div>
        <h2 id="h2intro">Confira abaixo nossos ultimos posts</h2>
      </section>

      <div class="cor"></div>
      <?php foreach($posts as $post): ?>
      <section class="posts">
        <div class="imgPost">
          <img src="/<?= $post->image?>" alt="Imagem do post" />
        </div>

        <div class="pPost">
          <h2><?php echo $post->title?></h2>
          <p>
          <?php echo substr($post->content, 0, 200) . "...";?>
          </p>

          <div class="button">
      <form method="post" action="posts/postIndividual">
          <input type="hidden" name="id" value="<?php echo $post->id?>">
          <a href=""><button type="submit" class="ler" title="Ler Post Completo">Ler Post Completo</button></a>  
      </form>
  </div>

        </div>

      </section>

      <div class="cor"></div>
      <?php endforeach; ?>

      <h2 id="small">Acesse nosso Facebook</h2>
      <div id="rs">
        <a href="#" target="_blank">
          <img src="../../../public/assets/logo-facebook.jpg" alt="face"
        /></a>
        <!-- <a href="#" target="_blank">
          <img src="../../../public/assets/img/logo-instagram.jpg" alt="insta"
        /></a>
        <a href="#" target="_blank">
          <img src="../../../public/assets/img/logo-twitter.jpg" alt="twitter"
        /></a>
        <a href="#" target="_blank">
          <img src="../../../public/assets/img/logo-youtube.jpg" alt="yt"
        /></a> -->
      </div>

      <?php require('app/views/includes/Footer.php'); ?>

    </main>

  </body>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
  crossorigin="anonymous"></script>
  <script src="https://kit.fontawesome.com/31a11ca086.js" crossorigin="anonymous"></script>

</html>
