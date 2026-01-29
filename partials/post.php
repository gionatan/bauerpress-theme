<li class="post-card">
    <h3 class="post-card-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
    <p class="post-card-meta">Pubblicato il <?php the_date(); ?> 
    <?php $cats = get_the_category();
    if ( $cats ) : ?>
    in <span class="badge"><?php echo esc_html( $cats[0]->name ); ?></span>
    <?php endif; ?>
    </p>
    <p class="post-card-excerpt">
    <?php echo esc_html( wp_trim_words( get_the_excerpt(), 25 ) ); ?>
    </p>
    <a href="<?php the_permalink(); ?>" class="btn btn-primary">Leggi tutto</a>
</li>