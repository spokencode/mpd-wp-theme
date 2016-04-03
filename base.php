<?php

use Roots\Sage\Setup;
use Roots\Sage\Wrapper;

?>

   <!doctype html>
   <html <?php language_attributes(); ?>>
   <?php get_template_part('templates/head'); ?>

   <body <?php body_class(); ?>>
      <div id="fb-root"></div>
      <script>
         (function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s);
            js.id = id;
            js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.5&appId=229310529771";
            fjs.parentNode.insertBefore(js, fjs);
         }(document, 'script', 'facebook-jssdk'));
      </script>
      <!--[if IE]>
      <div class="alert alert-warning">
        <?php _e('You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.', 'sage'); ?>
      </div>
    <![endif]-->
      <?php
      do_action('get_header');
      get_template_part('templates/header');
    ?>



         <div class="bg-container">
            <div class="row bg-cols">
               <div class="white col-sm-12 col-md-9 col-lg-8">
               </div>
               <div class="grey col-sm-12 col-md-3 col-lg-4">
               </div>
            </div>
         </div>

         <div class="wrap" role="document">
            <div class="content row">
               <div>
                  <main class="main">
                     <?php include Wrapper\template_path(); ?>
                  </main>

                  <!-- /.main -->
               </div>

            </div>
            <!-- /.content -->
         </div>
         <!-- /.wrap -->

         <?php
      do_action('get_footer');
      get_template_part('templates/footer');
      wp_footer();
    ?>
   </body>

   </html>