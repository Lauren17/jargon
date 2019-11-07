# <img src="./assets/images/wordpress-water-mark.png" width="100" align="center"> WordPress Simple Movbile Menu

## JavaScript
This is a very simple mobile menu. It has two states on and off. The state change is triggered by a javascript click event on the mobile menu icon. The Javascript writes an inline style on the drop down menu that sets the style property display to either block or none.

To add this menu to your project start by:
1. Open your template directory in VSCode
1. Create a folder called js
1. Add a file to this folder called mobile-menu.js
1. To this file add the following Javascript code.

```js
window.addEventListener('load', e=>{
   let isOpen = false;
    const mobileMenuButton = document.querySelector("#mobile-menu-button");
    const mobileMenu = document.querySelector("#mobile-menu-items");
     mobileMenu.style.display = "none";

   //remove this when script is working
     console.log("Mobile Menu Script Is Loaded")
   mobileMenuButton.addEventListener("click", function(e){
         

          if(isOpen){
           isOpen = false;
           mobileMenu.style.display = 'none'
          }else{
              mobileMenu.style.display = "block";
             isOpen = true
          }
   })
   
})

```

## Enqueuing Scripts

The next step is loading the Javascript file into WordPress. We are going to use the same technique used to load CSS files enqueuing. Open your functions.php file and add the following php code just underneath the function that loads your CSS files.

```php
function jargon_scripts () {
    wp_enqueue_script("jargon-mobile-menu",  get_template_directory_uri() . "/js/mobile-menu.js");
}

add_action('wp_enqueue_scripts', 'jargon_scripts');
```
Upload your functions.php file. Go to your browsers developer tools and open the console tab. You should see the text Mobile Menu Script Is Loaded. If you see this message everything is good and your ready to move on with building the mobile menu. You can't move on till you see the message Mobile Menu Script Is Loaded. 


---

## Building The Drop Down Menu

Now you have to build a container that will hold the items of the drop down menu. Inside the header.php file add the following php code. Make sure and create the Pages Menu first before adding the following code. The name Pages Menu must match up with the menu you are trying to embed.


```php
<aside id="mobile-menu-items" class="mobile-menu-items hide-menu">
     <p> This Is Where You Will Add Your Navigation for the drop down menu</p>
     <?php wp_nav_menu(array('menu'=>'Pages Menu')); ?>
</aside>

```

## Creating the Naviation Elements
Now after the body element in the header.php file copy and paste the php code for the small and large viewport menus. 
 
```php
<nav class="site-nav">
       <ul class="icon-view">
   
       <li class="jargon">
       <a class="home-link"  href="<?php bloginfo('url'); ?>">
        // switch out the image url to your jargon or site logo
        <img class="mobile-menu-icon" src="http://jimf.dmitstudent.ca/dmit2032/section-two/wp-content/uploads/2019/10/logo-3.svg" alt="jargon company logo">
        argon
       </a>
       </li> 
        // switch out the Pages Menu with your large viewport menu
        // if you change the menu_class to something other than list-view
        // then you will have to change the css in order to get this example to work.

       <li class="list-view-container">
            <?php wp_nav_menu(array('menu' => 'Pages Menu', 'menu_class'=> 'list-view',));?>
       </li>
             
    
         // switch out the img src to the src of your mobile menu icon.
       <li id="mobile-menu-button" class="mobile-menu" >         
        <img class="mobile-menu-icon" src="http://jimf.dmitstudent.ca/dmit2032/section-two/wp-content/uploads/2019/10/bars.svg" alt="mobile menu icon"> 
       </li>

         // switch out the href to the path to your sites login page.
        <li class="login">
        <a  class="login-button" href="http://jimf.dmitstudent.ca/dmit2032/section-one/wp-login">login</a>
       </li>
       
       </ul>
</nav>

```

---

## Adding The CSS

To get this to work you now have to add the CSS to your style sheet. Below is a copy of the css used in the example. The drop down menu list is not styled. This will be up to you.

```css
.site-nav {
  position: fixed;
  top:0;
  left:0;
  width: 100%;
  z-index: 101;
  box-shadow: 0 0 5px 0 grey;
  padding: 0.5rem 1rem;
  position: relative;
  color: #bfbfbf;
}

.icon-view {
  display: flex;
  justify-content: space-between;
  align-items: center;
  list-style-type: none;
}
a.home-link {
  text-decoration: none;
  color: rgb(173, 172, 172);
  font-weight: 700;
}
.mobile-menu-icon {
  width: 1.5rem;
  vertical-align: middle;
}

.login {
 display: none;
}
.list-view-container{
  display:none;
}
.login-button {
  box-shadow: 0 0 5px 0 grey;
  padding: 0.5rem 1rem;
  font-size: 0.6825rem;
  background: transparent;
  color: #444444;
  border: none;
  border-radius: 6px;
  text-decoration: none;
}


/* 
---------------------------------------------------------------------------------------
MOBILE MENU STYLES
-------------------------------------------------------------------------------------
*/
#mobile-menu-items{
  width:100%;
  height:65vh;
  
}

.mobile-menu-items{
  width: 100%;
  background: rgb(236, 236, 236);
  border-bottom: 1px solid rgb(230, 230, 230);
  box-shadow: 0 0 5px 0 rgb(223, 223, 223);
  padding: 2rem 1rem;
  z-index: 100;
}
 
 /* 
---------------------------------------------------------------------------------------
Break Point Styles Switch between drop down menu and  list of links
-------------------------------------------------------------------------------------
*/

@media (min-width: 600px){
  .mobile-menu{
    display:none;
  }
  .login{
    display: block;
  }
.list-view-container{
  display:block;
}
.list-view{
  display:flex;
  justify-content: center;
}
.menu-item{
  margin: 0 3rem;
}
.menu-item a{
 text-decoration: none;
  color:#444;
}
.menu-item a:hover{
  color:tomato;
}
}

```

## Thats It!
You now should have a base to build the jargon site menu.
 