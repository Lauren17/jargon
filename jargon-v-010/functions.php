<?php
 
if (!function_exists('jargon_setup')) {
    // wordpress functionality
    function jargon_setup()
    {
      add_theme_support('title_tag');
      register_nav_menus(array('jargon-site' => __( 'Jargon Site Navigation' )));
    }
}

add_action('after_setup_theme', "jargon_setup");
add_filter('use_block_editor_for_post', '__return_false', 10);

function jargon_styles()
{
    wp_enqueue_style('jargon-reboot', get_template_directory_uri() . '/assets/css/reboot.css');
    wp_enqueue_style('jargon-fonts', "https://fonts.googleapis.com/css?family=Montserrat:400,700|PT+Sans:400,700|Roboto:400,700&display=swap");
    wp_enqueue_style('jargon-style', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'jargon_styles');
 
function jargon_scripts () {
    wp_enqueue_script("jargon-mobile-menu",  get_template_directory_uri() . "/js/mobile-menu.js");
}

add_action('wp_enqueue_scripts', 'jargon_scripts');



 


?>
