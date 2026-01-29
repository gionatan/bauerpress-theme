<?php get_header(); ?>

  <main class="site-main container">
    <section>
      <header class="page-header">
        <h2 class="page-title">Blog</h2>
        <p class="page-subtitle">
          Qui verrà mostrato l'elenco degli articoli (template <strong>home.php</strong> in WordPress).
        </p>
      </header>

      <?php if (have_posts()): ?>
        <ul class="post-list">

          <?php 
          while ( have_posts() ) : the_post(); 
            get_template_part('partials/post');
          endwhile; 
          ?>
        </ul>
      <?php else : ?>
        <p>Nessun articolo pubblicato.</p>
      <?php endif; ?>
    </section>

    <?php get_sidebar(); ?>
  </main>

<?php get_footer(); ?>
