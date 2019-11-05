# <img src="./assets/images/wordpress-water-mark.png" width="100" align="center"> WordPress Custom Post Types

## functions.php   
initial setup of your theme
```php
if ( ! function_exists( 'jargon_setup' ) ) :
       
       function jargon_setup(){
           echo "Iam the function";
           add_theme_support( 'title-tag' );
       } 
endif;

  add_action( 'after_setup_theme', 'jargon_setup' );
```

## functions.php file
switch to the old post editor.
```php
  add_filter('use_block_editor_for_post', '__return_false', 10);
```

## Custom Post Type UI
 

```php
//function creates a custom post type of movies
function create_post_type_movies()
{
    // creates label names for the post type in the dashboard the post panel and in the toolbar.
 
}
// Change default "Enter Title Here" text 
// for admin area based on CPT
add_action('admin_head', 'hide_wp_title_input');
function hide_wp_title_input()
{
    $screen = get_current_screen();
    if ($screen->id != 'food') {
        return;
    }
    ?>
    <style type="text/css">
      #post-body-content {
        display: none;
      }
    </style>
  <?php
}

// you'll want to rename your  function
// XXX => name of your post type
function save_post_type_post($post_id) {
    $post_type = get_post_type($post_id);
    if ($post_type != 'XXX') {
        return;
    }

    // add the name of the filed that contains the 
    // title YYYYYY = name of the group that contains the
    // title
    $header = get_field('YYYYYYY');
    //ZZZZ ===> name of field for the title
    $post_title = $header['ZZZ'];
    $post_name = sanitize_title($post_title);
    $post = array(
        'ID' => $post_id,
        'post_name' => $post_name,
        'post_title' => $post_title
    );
    wp_update_post($post);
}

add_action('acf/save_post', 'save_post_type_post'); 

```

## Advanced Custom Field Repeater Field
```php
<?php get_header(); 
// ACF Group
$header = get_field('bike_header');
 
?>
 <header >
    <h1><?php echo $header['title']; ?></h1>
    <p><?php echo $header['tagline'];  ?></p>
    <p> <?php $header['header_image']; ?>  </p>
    
 </header>

 <main>
    <?php  
    // ask the repeater field if it has any rows in it.....
       if( have_rows('paragraph') ):
         while ( have_rows('paragraph') ) : the_row();
    ?>
    <div>
       <p><?php  the_sub_field('paragraph_copy');  ?></p>
       <?php   
        if(get_sub_field('image') !== ""){?>
         <img src="<?php the_sub_field('image'); ?>" alt="">
       <?php }   ?>

     
    </div>
       <?php endwhile; endif;  ?>
 </main>


<?php get_footer(); ?>
```
 