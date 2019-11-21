     <?php  get_header(); ?>
      <aside class="card">
         <header class="card-header">
            <h2>Index Template File</h2>
         </header>
         <div class="card-body">
            <h3>Enqueuing Styles</h3>
            <p>
            Adding scripts and styles to WordPress is a fairly simple process.   Essentially, you will create a function that will enqueue all of your scripts and styles. When enqueuing a script or stylesheet, WordPress creates a handle and path to find your file and any dependencies it may have (like jQuery) and then you will use a hook that will insert your scripts and stylesheets.
            </p>
         </div>
         <footer>
            <a href="https://developer.wordpress.org/themes/basics/including-css-javascript/">find out more</a>
         </footer>
      </aside>
  
     <?php  get_footer(); ?>
