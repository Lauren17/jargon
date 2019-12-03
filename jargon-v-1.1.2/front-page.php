<?php 
 get_header();
 get_template_part('template-parts/headers/front-page', 'header');

?>
 <section class="front-page-section">

     <header class="section-header">
       <p class="focus-on">focus on</p>
        <h2 class="section-title">Featured Articles</h2>
        <div class="heading-underline"></div>
     </header>

     <div class="featured-articles">
     
      <a class="feature-article feature-1" href="http://some-wordpress-url/articles/now-and-then/">
      <h3>Flexbox vs Grid</h3>
          <p>making better use of layout systems</p>
      </a>

      </div>
  </section>
 
 
<?php get_footer(); ?>