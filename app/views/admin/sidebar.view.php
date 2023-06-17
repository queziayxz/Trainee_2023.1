<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/public/css/sidebar.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/31a11ca086.js" crossorigin="anonymous"></script>
    <title>Radiator Springs</title>
</head>

<body class="estilos">
    <div class="d-flex" style="height: 100%; width: 100%;" id="wrapper">
        <!-- Sidebar -->
        <div class="sidebar" id="sidebar-wrapper">
            <div class="sidebar-heading text-center py-4 fs-4 fw-bold text-uppercase border-bottom">Início</div>
            <div class="list-group list-group-flush">
                <a href="/" class="list-group-item list-group-item-action bg-transparent fw-bold"><i
                    class="fas fa-home me-2"></i>Home</a>
                <a href="/posts/admin" class="list-group-item list-group-item-action bg-transparent fw-bold"><i
                    class="fas fa-list me-2"></i>Lista de Posts (Admin)</a>
                <a href="/posts" class="list-group-item list-group-item-action bg-transparent fw-bold"><i
                        class="fas fa-list me-2"></i>Lista de Posts (Usuários)</a>
                <a href="/usuarios/admin" class="list-group-item list-group-item-action bg-transparent  fw-bold"><i
                    class="fas fa-user me-2"></i>Lista de Usuários</a>
                <a href="#" class="list-group-item list-group-item-action bg-transparent fw-bold"><i
                    class="fas fa-power-off me-2" ></i>Logout</a>
            </div>
        </div>
        <div id="page-content-wrapper">
            <nav class="navbar navbar-expand-lg navbar-light bg-transparent py-4 px-4">
                <div class="d-flex align-items-center">
                    <i class="fas fa-align-left fs-4 me-3" id="menu-toggle"></i>
                </div>
            </nav>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        var el = document.getElementById("wrapper");
        var toggleButton = document.getElementById("menu-toggle");

        toggleButton.onclick = function () {
            el.classList.toggle("toggled");
        };
    </script>
</body>

</html>