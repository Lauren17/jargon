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

<?php  
   if(is_front_page()){
      get_template_part("template-parts/headers/landing", "page");
   }

   if(is_single()){
      get_template_part("template-parts/headers/post", "header");
   }
?>


   

    
 