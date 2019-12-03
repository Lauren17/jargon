# <img src="./assets/images/wordpress-water-mark.png" width="100" align="center"> WordPress WPQuery()

## Using WPQuery

WP_Query is a class used in WordPress that provides for writing custom query's to database. If your familuar with the structured query language 'sql' WP_Query is WordPress's way of allowing you to write you own query's to get the content from the database that you want. WP_Query is a powerful tool and as a WordPress developer you should take the time to use it in your work and explore the many parameters of the argument you pass to WP_Query that will allow you wo write complex and advance queries.  

 


## Example Hard Coded HTML for Custom Articles.
For example lets say we have featured articles on the front-page.php. However we want to randomize the display. Each time the end user comes to the site we do not want to show the same featured article. Below is an example of the markup for a featured article. The content is wrapped in a link element and the peramalink is hard coded into using the href attribute. What we would like to do is to use wordpress to randomize the article displayed and not just the now-and-then article shown below.

```html
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
```

## WP_Query.
The are many ways to use WP_Query. I am going to break it up into two parts. First we will create an argument array. The argument  array is a list of what you want to retrieve from the database. Examine the php code below.

#### Using WP_Query to Display Random Articles
<dl>
 <dt style="margin-left: 3rem; font-weight:bold;">$args</dt>
 <dd style="margin-bottom:0.5rem"> This is the array we want to build to ask the question of the database. Here we are asking for the articles post type and we want 4 of them picked randomly from all articles.</dd>

 <dt style="margin-left: 3rem;">$results</dt>
 <dd style="margin-bottom:0.5rem">if the WP_Query($args) finds content to match your query it will return a list of results.</dd>

<dt style="margin-left: 3rem; font-weight:bold;">WordPress Loop</dt>
 <dd style="margin-bottom:0.5rem">Using the wordpress loop we cycle through the $results which are individual post and extract the data we want.</dd>
 <dt style="margin-left: 3rem; font-weight:bold;">$header</dt>
 <dd style="margin-bottom:0.5rem">The Articles post is a custom post make with the custom post type UI plugin. So first you have to retrieve the data from the field name article_header along with the post id (get_the_ID())</dd>
  <dt style="margin-left: 3rem; font-weight:bold;">$title</dt>
 <dd style="margin-bottom:0.5rem">Now you can extract the title from the $header array which you will use to buld the markup</dd>
 <dt style="margin-left: 3rem; font-weight:bold;">$tagline</dt>
 <dd style="margin-bottom:0.5rem">Again extract the tagline text from the $header array which you will also inject into the markup</dd>
</dl>
 

```php

<?php  
  // arguments array
  $args = array(  
     'post_type' => 'articles',
     'posts_per_page' => 4, 
     'orderby' => 'rand', 
 );

 // the result of your query
 $results = new WP_Query( $args ); 

 // the wordpress loop using the array returned.
 
 while ( $results->have_posts() ) : $results->the_post(); 
 $header = get_field('article_header', get_the_ID());
 $title= $header['title'];
 $tagline = $header['tagline'];
 $link = get_the_permalink();
 
 
 ?>
  // Markup Used For A Single Article
  <a class="feature-article <?php echo $currentClass; ?>" href="<?php echo $link ?>">
  <h3><?php echo $title;   ?></h3>
      <p><?php echo $tagline; ?></p>
  </a>
 <?php 
  endwhile;
?>

```


## Styling Random Posts
There are many ways to style your post but if each post has a uniques style then crate an array of style class names you want to add to the markup. I am going to use the example above but this time I am going to add and array. The array has four classes in it that change the background color.

#### Using WP_Query to Add Unique Classes
<dl>
 <dt style="margin-left: 3rem; font-weight:bold;">$class</dt>
 <dd style="margin-bottom:0.5rem"> This is an array of four different classes that will be added to the anchor element</dd>
 <dt style="margin-left: 3rem; font-weight:bold;">$count</dt>
 <dd style="margin-bottom:0.5rem"> This is counter variable used to access the current count value from the array. So in the begining the count is zero so we grab the class in the first index position which will be feature-1</dd>
 <dt style="margin-left: 3rem; font-weight:bold;">$currentClass</dt>
 <dd style="margin-bottom:0.5rem">This variable contains the name of the class that will be added to the anchor element</dd>
 <dt style="margin-left: 3rem; font-weight:bold;">Markup</dt>
 <dd style="margin-bottom:0.5rem">Not that the anchor element is given a class attribute with the value of #currentClass. Now each article displayed will have its own custom class</dd>
</dl>

```php
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
  <a class="feature-article <?php echo $currentClass; ?>" href="<?php echo $link ?>">
  <h3><?php echo $title;   ?></h3>
      <p><?php echo $tagline; ?></p>
  </a>
 <?php 
  endwhile;
?>

```
 
 