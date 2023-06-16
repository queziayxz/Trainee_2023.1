<?php
  require('app/views/includes/Sessao.php')
?>

<!doctype html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Radiator Springs</title>
  <link rel="stylesheet" href="/public/css/dash.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <script src="https://kit.fontawesome.com/31a11ca086.js" crossorigin="anonymous"></script>


</head>

<body class="modificacoes">

  <div class="d-flex" id="wrapper">
     


    <div id="page-content-wrapper">
      <nav class="navbar navbar-expand-lg navbar-light bg-transparent py-4 px-4">
        <div class="d-flex align-items-center">

          <h2 class="fs-2 m-0 fw-bold">Área Administrativa</h2>
        </div>

        <button class="navbar-toggler mt-2" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon navbar-light"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle fw-bold" href="#" id="navbarDropdown" role="button"
                data-bs-toggle="dropdown" aria-expanded="false">
                <i class="fas fa-user me-2 cor-texto"></i>Code Jr.
              </a>
              <ul class="dropdown-menu altera-logout" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item fw-bold" href="/logout">Logout</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </nav>

      <div class="container-fluid px-4 ">

        <div class="row g-3 my-2 justify-content-center" >
          <div class="col-md-3 altera-link">
          <a href="/usuarios/admin">
            <div class="p-3 altera-cor shadow-sm d-flex justify-content-around align-items-center rounded">
              <div>
                <p class="fs-5 fw-bold">Usuários</p>
              </div>
              <i class="fa-solid fa-users fs-1  border rounded-full secondary-bg p-3"></i>
            </div>
          </a> 
        </div>

          <div class="col-md-3 altera-link">
          <a href="/posts"> 
            <div class="p-3 altera-cor shadow-sm d-flex justify-content-around align-items-center rounded">
              <div>
                <p class="fs-5 fw-bold">Posts (usuários)</p>
              </div>
              <i class="fa-solid fa-list fs-1 border rounded-full secondary-bg p-3"></i>
            </div>
          </a> 
          </div>

          <div class="col-md-3 altera-link">
          <a href="/posts/admin">  
            <div class="p-3 altera-cor shadow-sm d-flex justify-content-around align-items-center rounded">
              <div>
                <p class="fs-5 fw-bold">Posts (admin)</p>
              </div>
              <i class="fa-solid fa-list fs-1 border rounded-full secondary-bg p-3"></i>
            </div>
          </a>
        </div>


      </div>
    </div>
  </div>
 
  </div>




  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
    crossorigin="anonymous"></script>
    <script>
      var el = document.getElementById("wrapper");
      var toggleButton = document.getElementById("menu-toggle");

      toggleButton.onclick = function () {
          el.classList.toggle("toggled");
      };
  </script>
</body>

</html>