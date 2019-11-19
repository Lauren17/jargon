<?php 

   if(! function_exists('setup_jargon')){
       // wordpress functionality
       add_theme_support('title_tag');

   }

   add_theme_support("after_setup", "setup_jargon");



 
 
    function jargon_styles () {
        wp_enqueue_style('jargon_reboot', get_template_directory_uri(). '/assets/css/reboot.css');
        wp_enqueue_style('jargon_fonts', "https://fonts.googleapis.com/css?family=Open+Sans&display=swap");
        wp_enqueue_style('jargon_styles', get_stylesheet_uri());
    }

    add_action('wp_enqueue_scripts', 'jargon_styles');

  


?>