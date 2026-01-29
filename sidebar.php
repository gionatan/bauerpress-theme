<?php
/**
* Template per la sidebar
*/
?>
<aside class="sidebar">

 <?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
   <?php dynamic_sidebar( 'sidebar-1' ); ?>
 <?php else : ?>


   <section class="sidebar-section">
     <h3>Chi siamo</h3>
     <p>Un blog di prova usato per esercitarsi con i temi WordPress.</p>
   </section>

   <section class="sidebar-section">
     <h3>Categorie</h3>
     <ul>
       <?php wp_list_categories( array(
         'title_li' => '',
       ) ); ?>
     </ul>
   </section>

   <section class="sidebar-section">
     <h3>Articoli recenti</h3>
     <ul>
       <?php
       $recent = new WP_Query( array(
         'posts_per_page' => 5,
       ) );
       if ( $recent->have_posts() ) :
         while ( $recent->have_posts() ) : $recent->the_post(); ?>
           <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
         <?php endwhile;
         wp_reset_postdata();
       endif;
       ?>
     </ul>
   </section>

   <section class="sidebar-section">
     <h3>Cerca</h3>
     <?php get_search_form(); ?>
   </section>

 <?php endif; ?>

</aside>