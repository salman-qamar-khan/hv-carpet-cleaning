

 <section class="footer">

<div class="container">

  <div class="col-sm-6">

<?php dynamic_sidebar('footer-1'); ?>

</div>

<div class="col-sm-6 set-footer-pad">

      <ul class="footer-nav footer-right ">

         <?php

           wp_nav_menu( array(

           'theme_location' => 'footer-menu',

            'items_wrap' => '%3$s',

               'container' => '',

                 'menu_class' => '') );

                   ?>

      </ul>

  </div>

</div>

</section>

   <!-- - - - - - - - - - - -  - - - - - -  -->

   <!-- - - - - - - - - - - -  - - - - - -  -->

   <!-- - - - - - - - - - - -  - - - - - -  -->

<?php wp_footer();?>

</body>

</html>