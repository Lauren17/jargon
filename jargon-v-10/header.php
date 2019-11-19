<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php wp_head();?>
</head>


<body <?php body_class(); ?>>

<nav class="site-nav">
       <ul class="icon-view">
   
       <li class="jargon">
       <a class="home-link"  href="<?php bloginfo('url'); ?>">
 
        <img class="mobile-menu-icon" src="<?php echo get_template_directory_uri() . '/assets/icons/logo.svg'; ?>" alt="jargon company logo">
        argon
       </a>
       </li> 
   
       <li class="list-view-container">
            <?php wp_nav_menu(array('menu' => 'categories menu', 'menu_class'=> 'list-view',));?>
       </li>
             
    
         
       <li id="mobile-menu-button" class="mobile-menu" >         
        <img class="mobile-menu-icon" src="<?php echo get_template_directory_uri() . '/assets/icons/bars.svg'; ?>" alt="mobile menu icon"> 
       </li>

      
        <li class="login">
        <a  class="login-button" href="http://jimf.dmitstudent.ca/dmit2032/section-one/wp-login">login</a>
       </li>
       
       </ul>
</nav>

<aside id="mobile-menu-items" class="mobile-menu-items ">
     <p> This Is Where You Will Add Your Navigation for the drop down menu</p>
     <?php wp_nav_menu(array('menu'=>'categories menu')); ?>
</aside>

   

    
 