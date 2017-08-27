<footer class="footer-block visible-over">
  <div class="container">
    <div class="row">
      <div class="col-md-4">
        <img class="img-responsive img-centered" src="<?php echo onepage_get_option('onepage_footer_logo') ?
            onepage_get_option('onepage_footer_logo') : ONEPAGE_DIR_URI . 'assets/images/img/logo2.png'; ?>" alt="logo">
      </div>
      <div class="col-md-3 col-md-offset-1 address">
        <p><i class="fa fa-globe fa-1x" aria-hidden="true"></i>
            <?php echo onepage_get_option('onepage_footer_address', '121 Sunrise Blvd, 3290, Melbourne, Australia'); ?></p>
        <p><i class="fa fa-phone" aria-hidden="true"></i>
            <?php echo onepage_get_option('onapage_footer_phone', '+687 234 789 123'); ?></p>
        <p><i class="fa fa-envelope" aria-hidden="true"></i>
            <?php echo onepage_get_option('onepage_footer_email', 'millefiori@gmail.com'); ?></p>
      </div>
      <div class="col-md-3 col-md-offset-1">
        <ul class="list-inline social-buttons">
          <li>
              <a target="_blank" href="<?php echo onepage_get_option('onepage_footer_social1', '#'); ?>">
                  <i class="fa <?php echo onepage_get_option('onepage_footer_social1thumb', 'fa-twitter'); ?>"></i>
              </a>
          </li>
          <li>
              <a target="_blank" href="<?php echo onepage_get_option('onepage_footer_social2', '#'); ?>">
                  <i class="fa <?php echo onepage_get_option('onepage_footer_social2thumb', 'fa-youtube'); ?>"></i>
              </a>
          </li>
          <li>
              <a target="_blank" href="<?php echo onepage_get_option('onepage_footer_social3', '#'); ?>">
                  <i class="fa <?php echo onepage_get_option('onepage_footer_social3thumb', 'fa-facebook'); ?>"></i>
              </a>
          </li>
          <li>
              <a target="_blank" href="<?php echo onepage_get_option('onepage_footer_social4', '#'); ?>">
                  <i class="fa <?php echo onepage_get_option('onepage_footer_social4thumb', 'fa-instagram'); ?>"></i>
              </a>
          </li>
          <li>
              <a target="_blank" href="<?php echo onepage_get_option('onepage_footer_social5', '#'); ?>">
                  <i class="fa <?php echo onepage_get_option('onepage_footer_social5thumb', 'fa-linkedin'); ?>"></i>
              </a>
          </li>
        </ul>
      </div>
    </div>
  </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>