<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="profile" href="http://gmpg.org/xfn/11">
		<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
			<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
		<?php endif; ?>
		<?php wp_head(); ?>
    </head>
    <body id="page-top" <?php body_class( 'index' ); ?>>
        <!-- Header Content -->
        <header>
          <nav id="mainNav" class="navbar navbar-default navbar-custom navbar-fixed-top">
            <div class="container">
              <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                  <span class="sr-only">Toggle navigation</span>
                  <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand navbar-brand2 page-scroll" href="#page-top">
                  <img class="img-responsive img-centered" src="<?php echo onepage_get_option('onepage_header_logo', ONEPAGE_DIR_URI . 'assets/images/img/logo1.png'); ?>" alt="Logo">
                </a>
              </div>
              <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <div>
                  <ul class="nav navbar-nav">
                    <li class="hidden">
                      <a href="#page-top"></a>
                    </li>
                    <li>
                      <a class="page-scroll" href="#blog">Latest Project</a>
                    </li>
                    <li>
                      <a class="page-scroll" href="#about">Our story</a>
                    </li>
                    <li>
                      <a class="page-scroll" href="#team">Our Team</a>
                    </li>
                    <li class="logo">
                      <a class="navbar-brand page-scroll" href="#page-top">
                        <img class="img-responsive img-centered" src="<?php echo onepage_get_option('onepage_header_logo', ONEPAGE_DIR_URI . 'assets/images/img/logo1.png'); ?>" alt="">
                      </a>
                    </li>
                    <li>
                      <a class="page-scroll" href="#services">Services</a>
                    </li>
                    <li>
                      <a class="page-scroll" href="#portfolio">Portfolio</a>
                    </li>
                    <li>
                      <a class="page-scroll" href="#contact">Contact</a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </nav>

          <div id="myCarousel" class="carousel slide carousel-fade" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
              <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
              <li data-target="#myCarousel" data-slide-to="1"></li>
              <li data-target="#myCarousel" data-slide-to="2"></li>
              <li data-target="#myCarousel" data-slide-to="3"></li>
            </ol>
            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
              <div class="item carusel1 active" <?php echo onepage_get_option('onepage_slide1_image') ?
                  'style="background-image: url(' . onepage_get_option('onepage_slide1_image', '') . ')"' : ''; ?>></div>
              <div class="item carusel2" <?php echo onepage_get_option('onepage_slide2_image') ?
                  'style="background-image: url(' . onepage_get_option('onepage_slide2_image', '') . ')"' : ''; ?>></div>
              <div class="item carusel3" <?php echo onepage_get_option('onepage_slide3_image') ?
                  'style="background-image: url(' . onepage_get_option('onepage_slide3_image', '') . ')"' : ''; ?>></div>
              <div class="item carusel4" <?php echo onepage_get_option('onepage_slide4_image') ?
                  'style="background-image: url(' . onepage_get_option('onepage_slide4_image', '') . ')"' : ''; ?>></div>
            </div>
          </div>
        </header>
        <!-- /Header Content -->

