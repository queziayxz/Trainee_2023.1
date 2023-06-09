<header>
    <div class="container" id="nav-container">
      <nav class="navbar navbar-expand-lg navbar-dark">
        <a href="/home" class="navbar-brand">
          <img id="logo" src="/public/assets/logo_blog.jpg" alt="Logo Radiator Springs RS">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
          <div class="navbar-nav">
            <ul class="navbar-nav">
              <li class="nav-item ">
                <a class="nav-link fw-bold " href="/home">Home</a>
              </li>
              <li class="nav-item" >
                <a class="nav-link fw-bold" href="/posts">Nossos posts</a>
              </li>
              <li class="nav-item">
                <?php
                  if(isset($_SESSION['logado']))
                echo "<a class='nav-link fw-bold' href='/logout'>Logout</a>";
                  else
                echo "<a class='nav-link fw-bold' href='/visuLog'>Login</a>";
                ?>
              </li>
              <li class="nav-item" >
                <?php
                if(isset($_SESSION['logado']) && $_SESSION['type'] == 1  ) 
                  echo "<a class='nav-link fw-bold' href='/dashboard'>Dashboard</a>";
                ?>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </div>
  </header>