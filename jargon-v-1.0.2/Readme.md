# <img src="./assets/images/wordpress-water-mark.png" width="100" align="center"> WordPress Enqueuing Styles

## The functions.php
The functions.php file is the heart of your wordpress site. The file is basically instructions to the WordPress engine on how you want you theme/site to run. What features you want turned on or off.

You can customize your functions.php file to suit the use case for any WordPress site/app. Today you  will be adding css functionality to your site the WordPress way. Wordpress doesn’t expect you to link your css as you're accustomed to. Remember WordPress is a dynamic page generator so how could you add a link. We’ll that's taken care of you via the WordPress functionality called enqueuing.

1. Open the functions.php file
1. If you don’t have a functions.php file create on in the root folder.
1. add the following php code snippet and upload your folder.
1. Make sure you write it exactly as written.
1. Once you have the code written upload your theme.
1. Make sure to switch the theme to the new version .
1. From the  Appearance menu in the dashboard select  Themes.
1. Activate the current theme.

```php
<?php echo "functions php file working"; ?>
```

## Theme Setup Script
Now that you functions php file is working you can start to create the functionality you want your site to have. This is done in WordPress by using what is called a WordPress Hook. We are going to use after_theme_setup. This hook is called immediately after your theme is loaded by the WordPress engine. Copy the code below to your functions.php file. Remove the echo statement that you previously added. Ensure your code is between the opening and closing <?php code tags ?>
```php
<?php

 if(! function_exists('setup_jargon')){
     // wordpress functionality
     add_theme_support('title_tag');
 }

 add_action("after_setup_theme", "setup_jargon");

?>

```

## Enqueuing Styles

Open the functions.php file. Remove the line of code you just added and add the code below. The code below runs or own custom startup function where we can add_them_support for functionality that already exists in WordPres.

To proper way to add styles and script to you theme is to [enqueue them](https://developer.wordpress.org/themes/basics/including-css-javascript/)

For a more in depth explanation of the role of the functions.php file visit the [WordPress Theme Developers Handbook](https://codex.wordpress.org/Functions_File_Explained)

### loading the style.css file
```php
function jargon_styles () {
   wp_enqueue_style('jargon_styles', get_stylesheet_uri());
   wp_enqueue_style('jargon_reboot', get_template_directory_uri(). '/assets/css/reboot.css');
  }

  add_action('wp_enqueue_scripts', 'jargon_styles');
```
### loading a reboot or reset from a direcotry

```php
function jargon_styles () {
      wp_enqueue_style('jargon_styles', get_stylesheet_uri());
         wp_enqueue_style('jargon_reboot', get_template_directory_uri(). '/assets/css/reboot.css');   }

  add_action('wp_enqueue_scripts', 'jargon_styles');
```

### loading an external css files 
```php
function jargon_styles () {
   wp_enqueue_style('jargon_styles', get_stylesheet_uri());
   wp_enqueue_style('jargon_reboot', get_template_directory_uri(). '/assets/css/reboot.css');  
    wp_enqueue_style('jargon_fonts', "https://fonts.googleapis.com/css?family=Open+Sans&display=swap");
}

  add_action('wp_enqueue_scripts', 'jargon_styles');
```





