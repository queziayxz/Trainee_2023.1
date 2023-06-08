<nav aria-label="Navegação de páginas">
  <ul class="pagination">

    <li class="page-item">
      <a class="page-link" href="?pagina=<?= $page > 1 ? $page - 1 : 1 ?>" aria-label="Anterior">
        <span aria-hidden="true">&laquo;</span>
      </a>
    </li>

    <?php for($page_number = 1; $page_number <= $total_pages; $page_number++) : ?>
        <li class="page-item <?= $page_number == $page ? "active" : "" ?>"><a class="page-link" href="?pagina=<?= $page_number ?>"><?= $page_number ?></a></li>
    <?php endfor ?>

    <li class="page-item">
      <a class="page-link" href="?pagina=<?= $page < $total_pages ? $page + 1 : $total_pages ?>" aria-label="Próximo">
        <span aria-hidden="true">&raquo;</span>
      </a>
    </li>

  </ul>
</nav>