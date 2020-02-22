<?php
/* loop basics: https://developer.wordpress.org/themes/basics/the-loop/ */
?>
<div class="container">
    <div class="row">
        <div class="col-8">
            <div class="row">
                <?php
                if (have_posts()) :
                    while (have_posts()) : the_post();
                ?>

                        <div class="col-12 mb-3 border-bottom">
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
                                <?php the_excerpt(); ?>
                            </div>
                        </div>
                    
                <?php
                    endwhile;
                else :
                    _e('Sorry, no posts matched your criteria.', 'tiendas');
                endif;
                ?>
            </div>
        </div>
        <div class="col-md-4 col-12">
            <?php if (is_active_sidebar('sidebar-main')) { ?>
                <?php dynamic_sidebar('sidebar-main'); ?>
            <?php } ?>
        </div>
    </div>
</div>