# <img src="./assets/images/wordpress-water-mark.png" width="100" align="center"> WordPress Enqueuing Styles

## Creating A functions.php

1. create a new theme folder from your last version.
1. open the style.css and update the meta data to reflect your changes.
1. next in your theme directory create a file called functions.php
1. add the following php code snippet and upload your folder to

```php
 <?php echo "functions php file working"; ?>
```

1. Upload your theme directory to your WP themes folder.
1. Navigate to your wordpress site
1. Login to the dashboard
1. Go to the themes panel
1. Select your new theme and make it the active theme.
1. You should see the text echoed out on the landing page.

## Enqueuing Styles & Scripts

Open the functions.php file. Remove the line of code you just added and add the code below. The code below runs or own custom startup function where we can add_them_support for functionality that already exists in WordPres.

To proper way to add styles and script to you theme is to [enqueue them](https://developer.wordpress.org/themes/basics/including-css-javascript/)

For a more indepth explination of the role of the functions.php file visit the [WordPress Theme Developers Handbook](https://codex.wordpress.org/Functions_File_Explained)

```php
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

```
