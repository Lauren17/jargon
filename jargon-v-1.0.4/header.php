<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Jargoon</title>
    <?php wp_head();?>
</head>
<body>

<nav class="site-nav">
       <ul class="icon-view">
       <li>Jargon</li> 
       <li >
        place link to your menu icon here
       </li>
       </ul>
       <ul class="list-view">
          <li>link to post</li>
          <li>link to post</li>
          <li>link to post</li>
       </ul>
</nav>


<?php  
   if(is_front_page()){
      get_template_part("template-parts/headers/landing", "page");
   }

   if(is_single()){
      get_template_part("template-parts/headers/post", "header");
   }
?>


   

    
 