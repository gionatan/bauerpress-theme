<?php get_header(); ?>

  <main class="site-main container">
    <section>
      <header class="page-header">
        <h2 class="page-title">Risultati ricerca per: "<?php echo esc_html( get_search_query() ); ?>"</h2>
        <p class="page-subtitle">
          In WordPress userai <strong>get_search_query()</strong> e il template <strong>search.php</strong>.
        </p>
      </header>

      <?php get_search_form(); ?>

      <?php if ( have_posts() ) : ?>
        <ul class="post-list">
          <?php while ( have_posts() ) : the_post(); ?>
            <li class="post-card">
              <h3 class="post-card-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
              <p class="post-card-meta">Pubblicato il <?php the_date(); ?></p>
              <p class="post-card-excerpt"><?php echo esc_html( wp_trim_words( get_the_excerpt(), 25 ) ); ?></p>
              <a href="<?php the_permalink(); ?>" class="btn btn-primary">Leggi tutto</a>
            </li>
          <?php endwhile; ?>
        </ul>
      <?php else : ?>
        <p>Nessun risultato trovato, prova con altre parole chiave.</p>
      <?php endif; ?>
    </section>

    <?php get_sidebar(); ?>
  </main>

<?php get_footer(); ?>