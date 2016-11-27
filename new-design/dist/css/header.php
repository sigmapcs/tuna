<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
    <?php
    	global $etg_options;
  		$favicon = $etg_options['favicon']['url'];
  		if ($favicon ) { ?>
			<link rel="shortcut icon" type="image/png" href="<?php echo esc_url( $favicon ); ?>" />
      <?php } ?>
  <!-- <link rel="stylesheet" href="http://tunabranding.mx/new/wp-content/themes/grand/css/styles-slides.css"> -->
  <title><?php wp_title('', true, 'right'); ?></title>
  <?php wp_head(); ?>
  <!-- <script type="text/javascript", src="http://tunabranding.mx/new/wp-content/themes/grand/js/jquery.slides-1.js"></script> -->
  </head>
  <body <?php body_class(); ?>>

  <?php  $theme_layout_style = $etg_options['theme-layout-style']; ?>
  <?php if ($theme_layout_style == '2') { ?>
   <div class="boxed-layout">
  <?php }  ?>
  <?php  $headers_layout = $etg_options['headers_layout'];
         $sticky_header = $etg_options['sticky_header'];
  ?>
  <?php if ($headers_layout == 'header3') { ?>
  <div class="overlay-content-wrap"></div>
  <header class="site-header">
    <div class="header-inner <?php if ($sticky_header == true) { echo 'have-scroll'; } ?>  ">
          <div class="header-table header-three col-md-12">
            <div class="brand">
              <a href="<?php echo home_url(); ?>">
              <?php
              global $etg_options;
              $logo =  $etg_options['logo']['url'];
              if ($logo ) { ?>
                <img src="<?php echo esc_url($logo); ?>"  alt="logo"/>
              <?php } else { ?>
              <h5><?php bloginfo('name');?></h5>
              <?php } ?>
              </a>
            </div>

            <?php if ( has_nav_menu( 'primary' ) ) : // Check if there's a menu assigned to the 'primary' location. ?>
            <nav id="nav-wrap" class="main-nav">
              <div class="nav-button-holder">
                <button class="nav-button ">
                  <span>Menu</span>
                </button>
              </div>
              <div class="menu-content">
                <h3><?php _e( 'Menu', 'energeticthemes' ); ?></h3>
                <?php etcode_grand_theme_primary_menu(); ?>
              </div>
            </nav><!-- #menu-primary -->
            <?php endif; // End check for menu. ?>
        </div>
    </div>
  </header>
  <?php } else { ?>
  <header class="site-header">
    <div class="header-inner <?php if ( $headers_layout == 'header1' && $sticky_header == true ) { echo 'have-scroll'; } ?>">
      <div class="container">
        <div class="row">

          <div class="<?php if ($headers_layout == 'header2') { echo "home-two-header";} else { echo "header-table"; } ?> col-md-12">
            <div class="brand">
              <a href="<?php echo home_url(); ?>">
              <?php
              global $etg_options;
              $logo =  $etg_options['logo']['url'];
              if ($logo ) { ?>
                <img src="<?php echo esc_url($logo); ?>"  alt="logo"/>
              <?php } else { ?>
              <h5><?php bloginfo('name');?></h5>
              <?php } ?>
              </a>
            </div>

            <?php if ( has_nav_menu( 'primary' ) ) : // Check if there's a menu assigned to the 'primary' location. ?>
            <nav id="nav-wrap" class="main-nav">
              <div id="mobnav-btn"> </div>
              <?php etcode_grand_theme_primary_menu(); ?>
            </nav><!-- #menu-primary -->
            <?php endif; // End check for menu. ?>
        </div>
      </div>
    </div>
  </div>
  </header>
    <?php }  ?>
