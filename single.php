<?php get_header(); ?>

  <main class="site-main container">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    
    
    <article>
      
      <header class="single-post-header">
        
        <h1 class="single-post-title"><?php the_title(); ?></h1>
        <p class="single-post-meta">
          Pubblicato il <?php the_date(); ?> da <strong><?php the_author(); ?></strong>
          <?php $cats = get_the_category();
          if ( $cats ) : ?>
            in <span class="badge"><?php echo esc_html( $cats[0]->name ); ?></span>
          <?php endif; ?>
        </p>
        <p>Luogo dell'evento: <?php the_field('luogo'); ?></p>
        <p>Data dell'evento: <?php the_field('data_evento'); ?></p>
      </header>

      <div class="single-post-content">
        <?php the_post_thumbnail('medium_large'); ?>
        <?php the_content(); ?>
      </div>
    </article>

    <?php endwhile; endif; ?>

    <?php get_sidebar(); ?>
  </main>

<?php get_footer(); ?>