# <img src="./assets/images/wordpress-water-mark.png" width="100" align="center"> WordPressCategory Templates

## Post Template

We have worked with mostly single based content till now. In order to completed this lesson you will have to build some content provided to you in the post content file.
Create

1. 3 html posts assign each to the category html
1. 3 css posts assign each to the category css
1. 3 javascript posts assign each to the category javascript

## Adding Thumbnail Support
```php
 if (!function_exists('jargon_setup')) {
    // wordpress functionality
    function jargon_setup()
    {
      add_theme_support('title_tag');
      add_theme_support('post-thumbnails');
      register_nav_menus(array('jargon-site' => __( 'Jargon Site Navigation' )));

    }
}

add_action('after_setup_theme', "jargon_setup");
add_filter('use_block_editor_for_post', '__return_false', 10);
```

## Category Template
category-css.php
category.php ----if test category------load template

```php 
<?php
if (have_posts()):
    while (have_posts()):
        the_post();
        echo "each item";
    endwhile; // end while
endif; // end if
?>

```
