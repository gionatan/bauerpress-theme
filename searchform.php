<?php
/**
* Template del form di ricerca
*/
?>
<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
 <input
   type="search"
   name="s"
   value="<?php echo esc_attr( get_search_query() ); ?>"
   placeholder="Cerca nel sito..."
 >
 
 <button type="submit">Cerca</button>
</form>