window.addEventListener('load', e=>{
   let isOpen = false;
    const mobileMenuButton = document.querySelector("#mobile-menu-button");
    const mobileMenu = document.querySelector("#mobile-menu-items");
     mobileMenu.style.display = "none";


   //handle click event on icon
   mobileMenuButton.addEventListener("click", function(e){
         

          if(isOpen){
           isOpen = false;
           mobileMenu.style.display = 'none'
          }else{
              mobileMenu.style.display = "block";
             isOpen = true
          }
   })

   window.addEventListener('resize', function(e){
 
       if(window.innerWidth >= 600){
         mobileMenu.style.display = "none";
       }
   })
   
})