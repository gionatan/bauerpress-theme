<?php get_header(); ?>

  <main class="site-main container">
    <section>
      <header class="page-header">
        <h2 class="page-title">
        <?php if (is_category()): ?>  
        Categoria: <?php echo single_cat_title(); ?>

        <p class="page-subtitle">
          <?php if ( category_description() ) : ?>
              <?php echo category_description(); ?>
          <?php else : ?>
            Elenco degli articoli appartenenti alla categoria "<?php echo single_cat_title(); ?>".
          <?php endif; ?>
        </p>
        <?php else: ?>
          <?php the_archive_title(); ?>
        <?php endif; ?>
        </h2>
        
      </header>

      <?php if (have_posts()): ?>
      <ul class="post-list">
        <?php
        while (have_posts()): the_post();
          get_template_part('partials/post');
        endwhile;
        ?>
      </ul>
    <?php else: ?>
      <p>Spiacenti, non ci sono post</p>
    <?php endif; ?>
    </section>

    <?php get_sidebar(); ?>
  </main>

<?php get_footer(); ?>