<?php 
 get_header();
 get_template_part('template-parts/headers/front-page', 'header');

?>
 <section class="featured-articles">

 <?php
$args = array(  
     'post_type' => 'articles',
     'posts_per_page' => 4, 
     'orderby' => 'rand', 
 );
 $loop = new WP_Query( $args ); 
 $count = 0;
 while ( $loop->have_posts() ) : $loop->the_post(); 
 $class =  array('feature-1', 'feature-2','feature-3', 'feature-4');
 $currentClass = $class[$count];
 $header = get_field('article_header', get_the_ID());
 $title= $header['title'];
 $tagline = $header['tagline'];
 $link = get_the_permalink();
 
 $count++;
 ?>
  <a class="featured-article <?php echo $currentClass; ?>" href="<?php echo $link ?>">
  <h3><?php echo $title;   ?></h3>
      <p><?php echo $tagline; ?></p>
  </a>
 <?php 
  endwhile;
?>
 

 </section>
 
 
<?php get_footer(); ?>