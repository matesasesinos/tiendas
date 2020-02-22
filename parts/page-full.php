<?php
/* loop basics: https://developer.wordpress.org/themes/template-files-section/page-template-files/ */

?>
<div class="container">
    <div class="row">
        <div class="col-12 mb-3">
            <div class="row">
                <?php
                if (have_posts()) :
                    while (have_posts()) : the_post();
                ?>

                            <a href="<?php echo get_the_permalink() ?>"><?php the_title('<h1 itemprop="title">', '</h1>') ?></a>
                            <div class="tags">
                                <?php the_tags() ?>
                            </div>
                            <div class="meta">
                                <?php the_meta() ?>
                            </div>
                            <div class="cats">
                                <?php the_category(',') ?>
                            </div>
                            <div class="pt-3 pb-3">
                                <a href="<?php echo get_the_permalink() ?>">
                                    <img src="<?php echo get_the_post_thumbnail_url() ?>" alt="<?php echo get_the_title() ?>" class="img-fluid" itemprop="image">
                                </a>
                            </div>
                            <div class="content">
                                <?php the_content(); ?>
                            </div>
                    
                <?php
                    endwhile;
                else :
                    _e('Sorry, no posts matched your criteria.', 'tiendas');
                endif;
                ?>
            </div>
        </div>
    </div>
</div>