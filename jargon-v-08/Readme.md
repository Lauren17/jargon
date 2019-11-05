# <img src="./assets/images/wordpress-water-mark.png" width="100" align="center"> WordPress Adding Menus

## WordPress Menus

It's really quite simple to add menus to your pages in wordpress. Since we're building a site that we would pass off to a client we are going to create the menus systems for them so they can add and remove the items they want. There are several ways to go about this but we will start with a single menu for all pages the main jargon site nav

## Jargon Main Site Nav

To create a menu in wordpress you first have to register the menu in your functions.php file. Before you start there are a few things we need to do to test our menu to see that it works. Login to your test sites dashboard.

```text
1. create three posts with the following titles and  add some random text content
- angular.
- view.
- react.
```

```text
 2. Go to the Appearance tab of the dashboard. Notice that you do not see that the menus option is available. We are going to enable this by using the wordpress function register_nav_menu()
```

---

## Adding Support for Menus

Add the following line of code to your functions.php file inside your sites setup function.

```php
// place the code inside your sites setup function
register_nav_menus('jargon-site' => __( 'Jargon Site Navigation' ));


// your setup function should look like the following example
if ( ! function_exists( 'jargon_setup' ) ) :
       function jargon_setup(){
           add_theme_support( 'title-tag' );
         register_nav_menus('jargon-site' => __( 'Jargon Site Navigation' ));
       }
endif;

```

1. Go back to your sites dashboard and click on the Appearance option in the sidebar.
1. You should see the Menus option available to you now.
1. Select the menu option to view the Menu Panel.

---

## Menu Panel

If you go to the menu panel you should see a default menu built by wordpress. It will have a link to the home page and usually a default page. Let's delete this menu. Note that wordpress will build a new default menu Menu 1. Wordpress will create this menu as long as there are pages. Go to your pages section and remove all pages from the test site.... When you return to the Menu Panel you will see that there is no default menu created for you. Let's go back and create three pages.

```text
1. create three posts with the following titles and  add some random text content
2. Name the menu pages menu
- css.
- html.
- javascript.
```

When you return to the menu panel you will see all your pages added to the menu by WordPress default behaviour. Once you have done that you will see a panel under the menu structure called Menu Settings. You should now see the name of the menu option you gave your register_nav_menu() method. We will see later how to associate a menu that we create with the menu we registered but first let's take a look at wordpress's default behaviour.

The next step is to add your menu to the header.php template as that is where we want our page navigation to go.

---

## Adding Menu to the Header.php Template

To add a menu to any template you just use the function wp_nav_menu(). This function takes an array of parameters that you set depending on the use case for your menu. Below you will see an example of all of the parameters available. We are now going to add these name value pairs to the header.php file to see what each one brings to the party.

[wp_nav_menu()](https://developer.wordpress.org/reference/functions/wp_nav_menu/)

```php
// listing of properties for wp_nav_menu()
<?php $defaults = array(
    'theme_location'  => 'Name used in your register menu from functions php file',
    'menu'            => 'Name of the menu in the menu panel',
    'container'       => 'containing element',
    'container_class' => 'container class name',
    'container_id'    => 'container class id name',
    'menu_class'      => 'menu class name',
    'menu_id'         => 'menu id name',
    'echo'            =>  'boolean value true means simply display the result the menu of false return it and use it with PHP',
    'fallback_cb'     => 'custom callback function you can call when the menu is not found by default it uses wp_page_menu()',
    'before'          => 'used to define what can go before and after link item <a>',
    'after'           => 'to prepend ane element after insertion ',
    'link_before'     => 'same as before and after except the items placed inside the <a>',
    'link_after'      => 'same as before and after except the items placed inside the <a>',
    'items_wrap'      => 'how markup is generated for menu ex: <ul id=\"%1$s\" class=\"%2$s\">%3$s</ul>',
    'depth'           => 'used to tell the function if you want child menus to be displayed or not',
    'walker'          => 'This is a walker object which can be used to manipulate how the entire function works'
);
?>
```

Add the wp_nav_menu() function to the navigation element in your front page.php file. Upload your file and take a look at the front page.php file. You should see the menu with the links Home css html and javascript. Once again with no setting wordpress will take the default menu and use it as it needs to add something when the function is called. If there was nothing in the menu in the menu panel then nothing would showup.

```php

<nav class="site-nav">
       <ul class="icon-view">
       <li>
       <a class="home-link"  href="<?php bloginfo('url'); ?>">
        <img class="mobile-menu-icon" src="http://jimf.dmitstudent.ca/dmit2032/section-one/wp-content/uploads/2019/10/logo-3.svg" alt="jargon company logo">
        argon
       </a>
       </li>

       <?php
        $defaults = array();
        wp_nav_menu( $defaults );
        ?>



       <li >
        <a class="login-button" href="http://jimf.dmitstudent.ca/dmit2032/section-one/wp-login">login</a>
       </li>

       </ul>
</nav>

```

---

## Use Your Dev Tools

Right mouse click on the menu on the front page template and inspect the classes that were added by default and the elements to. You may want to make a listing of these for your records just so you know what wordpress will do for class and id naming of your menus. You will be of course making this menu responsive so if your going to use custom javascript, a plugin or a jquery menu system you will know what classes to style.
