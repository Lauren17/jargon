<?php 
get_header();    
 
    $food = get_field('article_header');
     $image = $food['header_image'];
    $img_srcset = wp_get_attachment_image_srcset($image, 'large’');
?>

<img data-src="https://res.cloudinary.com/www-jim-hortons/image/upload/w_auto,c_scale/v1561137911/samples/food/spices.jpg" alt="" class="cld-responsive">



 
    <!-- <header>
     <h1><?php echo $food['title']  ?></h1>
     <p><?php echo $food['tagline'] ?></p>
     <img src=<?php echo $food['header_image'] ?> alt="missing stuff">
    </header>
    <main>
        <p>
           the class name is <?php echo $food['title']['class'] ?>
        </p>
    </main> -->
  
    <script>
   // Initialize
var cl = cloudinary.Cloudinary.new({  cloud_name: 'www-jim-hortons' });
// Call
cl.responsive();
 
    </script>


 