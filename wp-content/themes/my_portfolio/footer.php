<footer>
	
  <?php wp_nav_menu( array(
         'theme_location'  => 'footer_nav', //one of the menu areas from functions.php (has to be spelled the same.)
         'container'     => 'nav', //div or nav
         'container_class' => 'fnav cf', 
         'fallback_cb'     => '',//prevent ugly list of pages
         'menu_class'    => 'fmenu cf'
      ) ); ?>

</footer>

<?php 
//must call wp_footer right before </body> for JS and plugins to run!
wp_footer();  ?>

</body>
    
</html>