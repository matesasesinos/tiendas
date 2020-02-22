   
    <form class="form-inline my-2 my-lg-0" action="/" method="get">
      <input class="form-control mr-sm-2" type="text" value="<?php the_search_query(); ?>" name="s" placeholder="<?php _e('Buscar', 'tiendas')?>" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit"><?php _e('Buscar', 'tiendas')?></button>
    </form>