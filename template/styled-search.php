<div class="search-form">
    
  <form action="/" method="get">
    <h1 class="search-heading"><label class="h1-style" for="search">Search</label></h1>
    <span class="search-text-input">
      <input type="text" name="s" id="search" value="<?php the_search_query(); ?>"
             placeholder="Type your search here..." />
    </span>
    <span class="search-submit">
      <input type="image" alt="Search"
             src="<?php bloginfo( 'template_url' ); ?>/img/search-svg-icon.svg"
             onerror="this.onerror=null;
             this.src='<?php bloginfo( 'template_url' ); ?>/img/search-svg-icon.png'" />
    </span>
    <!--<input type="submit" class="submit" name="submit" id="searchsubmit" value="<?php // esc_attr_e( 'Search', 'shape' ); ?>" />-->
  </form>

</div>