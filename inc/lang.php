<?php
//lang
add_action('after_setup_theme', 'matecito_lang_setup');
 

function matecito_lang_setup(){
    load_theme_textdomain('matecito', get_template_directory() . '/languages/');
    
}