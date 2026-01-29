<?php get_header(); ?>

  <main class="site-main container">
    <section>
      <header class="page-header">
        <h2 class="page-title">Benvenuto su <?php bloginfo( 'name' ); ?></h2>
        <p class="page-subtitle">
          Questa è la homepage statica. In WordPress potrebbe diventare la <strong>front-page.php</strong>.
        </p> 
      </header>

      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <article class="post-card">
        <h3 class="post-card-title"><?php the_title(); ?></h3>

          <?php the_post_thumbnail(); ?>
        
          <?php the_content(); ?>
          <br>
        <p>
          <a href="<?php echo esc_url( get_permalink( get_option( 'page_for_posts' ) ) ); ?>" class="btn btn-primary">Vai al blog</a>
        </p>
      </article>
      <?php endwhile; endif; ?>

      <h3 style="margin: 1.5rem 0 0.75rem;">Ultimi articoli</h3>

      <?php
      $query = new WP_Query( ['posts_per_page' => 3 ] );
      ?>

      <?php if ( $query->have_posts() ) : ?>
        <ul class="post-list">
          <?php 
          while ( $query->have_posts() ): $query->the_post(); 
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