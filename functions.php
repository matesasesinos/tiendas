<?php

/* styles and scripts */
function theme_styles()
{
    wp_enqueue_style('tiendas-style', get_stylesheet_uri(), array());
    wp_enqueue_style('bs-css', get_template_directory_uri() . '/css/bootstrap.css', array());
    wp_enqueue_style('fa-css', get_template_directory_uri() . '/fontawesome/css/all.min.css', array());
    wp_enqueue_style('slick-css', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css', array());
    wp_enqueue_style('jucss', 'https://code.jquery.com/ui/1.12.0/themes/smoothness/jquery-ui.css');
    wp_enqueue_style('fix-ge', get_template_directory_uri() . '/css/custom.css', array());
}


function theme_scripts()
{
    wp_enqueue_script('slick-js', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js', true);
    wp_enqueue_script('form-validate', 'https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js', true);
    wp_enqueue_script('form-validate-es', 'https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/localization/messages_es.min.js', true);
    wp_enqueue_script('jquery-ui', 'http://ajax.googleapis.com/ajax/libs/jqueryui/1.12.0/jquery-ui.min.js', array('jquery'), '1.12.0');
    wp_enqueue_script('bs-js', get_stylesheet_directory_uri() . '/js/bootstrap.min.js', true);
    wp_enqueue_script('custom-js', get_stylesheet_directory_uri() . '/js/custom.js', true);
    wp_enqueue_script('gs-captcha', 'https://www.google.com/recaptcha/api.js');
}

add_action('wp_enqueue_scripts', 'theme_styles');
add_action('wp_enqueue_scripts', 'theme_scripts');

/* includes */
require_once(get_template_directory() . '/customizer.php');
require_once(get_template_directory() . '/inc/setup.php');
require_once(get_template_directory() . '/inc/menus.php');
require_once(get_template_directory() . '/inc/lang.php');
require_once(get_template_directory() . '/inc/pagination.php');
require_once(get_template_directory() . '/inc/sidebars.php');
/* custom logo */
function custom_logo(){
    $custom_logo_id = get_theme_mod('custom_logo');
    $image = wp_get_attachment_image_src($custom_logo_id, 'full');
    if($image[0]){
        echo '<img src="'.$image[0].'" alt="'.bloginfo().'" class="img-fluid">';
    } else {
        echo bloginfo();
    }
}