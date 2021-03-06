<header class="banner">
   <div >

    <nav class="navbar navbar-default" role="navigation">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="container">
        <div class="row">


          <div class="navbar-header col-md-4">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <a class="navbar-brand" href="<?php bloginfo('url'); ?>">
               <img class="img-responsive" src="<?= get_template_directory_uri(); ?>/dist/images/mpd-logo.png" />
            </a>
          </div>
          <div class="col-md-8 headerRight">
            <div class="row">
              <div class="col-md-12">



                <div class="button"><i class="fa fa-mobile"></i> <a href="tel:1-404-418-6684">Call (404) 418-6684</a></div>
                <div class="button"><i class="fa fa-calendar"></i> <a href="mailto:info@morningsidepediatricdentistry.com">Schedule Appointment</a></div>

              </div>

              <div class="col-md-12">


                <?php
            wp_nav_menu( array(
                'menu'              => 'primary',
                'theme_location'    => 'primary',
                'depth'             => 2,
                'container'         => 'div',
                'container_class'   => 'collapse navbar-collapse navbar-ex1-collapse',
                'menu_class'        => 'nav navbar-nav',
                'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                'walker'            => new wp_bootstrap_navwalker())
            );
        ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </nav>
</div>
  <img id="kids" class="hidden-xs hidden-sm" src="<?= get_template_directory_uri(); ?>/dist/images/kids.png" />
</header>