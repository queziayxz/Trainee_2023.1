<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post-individual</title>
    <link rel="stylesheet" href="../../../public/css/styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;400&display=swap" rel="stylesheet">
</head>
<body>
    <div class = "meio">
    <?php foreach($posts as $post): ?>
        <div class="post">
            <h1><?php echo $post->title?></h1>
            <br>
            <h3></h3>
        </div>
        <div class ="post-img">
            <img src="<?= $post->image?>" alt = "Imagem Post">
        </div>
        <div class="descricao">
            <p><?php echo $post->content?>
            </p>
        </div>
        <div class = "data">
            <h6><?php echo date('d/m/Y', strtotime($post->created_at))?></h6>
        </div>
        <?php endforeach; ?>
    </div>
    <div class = "botao">
        <a href="#top"><i class="fa-solid fa-circle-arrow-up"></i></a>
    </div>

    <script src="https://kit.fontawesome.com/f9c72cff41.js" crossorigin="anonymous"></script>
    
</body>
</html>