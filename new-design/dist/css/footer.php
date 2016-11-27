<?php
  global $etg_options;
  $footer_se_show = $etg_options['footer_se_show'];

if ($footer_se_show == true) {
?>
<div class="footer-area-container">
  <div class="container">
    <div class="row">
      <div class="col-lg-3">
        <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer Sidebar 1') ) : ?>
          <!-- static content goes here if sidebar is inactive -->
        <?php endif; ?>
      </div>
      <div class="col-lg-3">
        <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer Sidebar 2') ) : ?>
          <!-- static content goes here if sidebar is inactive -->
        <?php endif; ?>
      </div>
      <div class="col-lg-3">
        <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer Sidebar 3') ) : ?>
          <!-- static content goes here if sidebar is inactive -->
        <?php endif; ?>
      </div>
      <div class="col-lg-3">
        <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer Sidebar 4') ) : ?>
          <!-- static content goes here if sidebar is inactive -->
        <?php endif; ?>
      </div>
    </div>
  </div>
</div>
<?php } ?>
<div class="footer-holder">
  <div class="container">
    <footer class="site-footer">
      <div class="row">
        <div class="col-lg-12">

        <p>&copy; Copyright  <?php echo date("Y") ;  ?><?php echo esc_html($etg_options['footer-text']); ?></p>
        </div>
      </div>
    </footer>
  </div>
</div>


  <?php  $theme_layout_style = $etg_options['theme-layout-style']; ?>
  <?php if ($theme_layout_style == '2') { ?>
   </div>
  <?php }  ?>

  <?php wp_footer(); ?>
  <script>
      $(function () {
        $("#slides-home").slidesjs({
          width: 1920,
          height: 500,
          play: {
            active: false,
            // [boolean] Generate the play and stop buttons.
            // You cannot use your own buttons. Sorry.
            effect: "fade",
            // [string] Can be either "slide" or "fade".
            interval: 7000,
            // [number] Time spent on each slide in milliseconds.
            auto: true,
            // [boolean] Start playing the slideshow on load.
            swap: false,
            // [boolean] show/hide stop and play buttons
            pauseOnHover: false,
            // [boolean] pause a playing slideshow on hover
            restartDelay: 100
            // [number] restart delay on inactive slideshow
          },
          effect: {
            slide: {
              speed: 2000
            }
          }
        });
      });
    </script>
  </body>
</html>
