<?php get_header(); ?>

  <main class="site-main container">
    <section>
      <header class="page-header">
        <h2 class="page-title">Pagina non trovata</h2>
      </header>

      <div class="page-content">
        <p class="error-code">404</p>
        <p class="error-message">Ops! La pagina che stai cercando non esiste.</p>
        <p>
          Nella versione WordPress, questo diventerà il template
          <strong>404.php</strong>.
        </p>
        <p>
          <a href="<?php echo esc_url(home_url('/')); ?>" class="btn btn-primary">Torna alla homepage</a>
        </p>
      </div>
    </section>

    <?php get_sidebar(); ?>
  </main>

<?php
get_footer();
?>