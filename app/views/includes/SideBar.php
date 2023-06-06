<div class="d-flex" id="wrapper">
    <!-- Sidebar -->
    <div class="sidebar" id="sidebar-wrapper">
        <div class="sidebar-heading text-center py-4 fs-4 text-uppercase border-bottom">Início</div>
        <div class="list-group list-group-flush">
            <a href="/home" class="list-group-item list-group-item-action bg-transparent"><i
                class="fas fa-home me-2"></i>Home</a>
            <a href="/posts/admin" class="list-group-item list-group-item-action bg-transparent"><i
                class="fas fa-list me-2"></i>Lista de Posts (Admin)</a>
            <a href="/posts" class="list-group-item list-group-item-action bg-transparent"><i
                class="fas fa-list me-2"></i>Lista de Posts (Usuários)</a>
            <a href="/usuarios/admin" class="list-group-item list-group-item-action bg-transparent "><i
                class="fas fa-user me-2"></i>Lista de Usuários</a>
            <a href="/login" class="list-group-item list-group-item-action bg-transparent"><i
                class="fas fa-power-off me-2"></i>Logout</a>
        </div>
    </div>
    <div id="page-content-wrapper">
        <nav class="navbar navbar-expand-lg navbar-light bg-transparent py-4 px-3">
            <div class="d-flex align-items-center">
                <i class="fas fa-align-left fs-4 me-3" id="menu-toggle"></i>
            </div>
        </nav>
    </div>
</div>

<script>
    var el = document.getElementById("wrapper");
    var toggleButton = document.getElementById("menu-toggle");

    toggleButton.onclick = function () {
        el.classList.toggle("toggled");
    };
</script>