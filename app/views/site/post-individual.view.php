<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;400&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="/public/css/navbar_footer.css" />
    <link rel="stylesheet" href="../../../public/css/styles.css">
    <link rel="shortcut icon" href="../../../public/assets/logo_blog.jpg">

    <title>Post - individual</title>
</head>
<body>

    <div class = "meio">

    <?php require('app/views/includes/NavBar.php'); ?>

    <?php foreach($posts as $post): ?>
        <div class="post">
            <h1><?php echo $post->title?></h1>
            <br>
            <h3></h3>
        </div>
        <div class ="post-img">
            <img src="/public/img/postt.jpg" alt = "Imagem Post">
        </div>
        <div class="descricao">
            <p><?php echo $post->content?>
            </p>
        </div>
        <div class = "data">
            <h6><?php echo date('d/m/Y', strtotime($post->created_at))?></h6>
        </div>
        <?php endforeach; ?>

        <?php require('app/views/includes/Footer.php'); ?>

    </div>
    <div class = "botao">
        <a href="#top"><i class="fa-solid fa-circle-arrow-up"></i></a>
    </div>

</body>

    <script src="https://kit.fontawesome.com/f9c72cff41.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
    crossorigin="anonymous"></script>

</html>