<!--Quote Section-->
<section id="quote" <?php echo onepage_get_option('onepage_quote_bg_image') ?
    'style="background-image: url(' . onepage_get_option('onepage_quote_bg_image', '') . ')"' : ''; ?>>
  <div class="bg-filter"></div>
  <div class="container" data-type="content">
    <div class="row">
      <div class="col-md-12">
        <h5><?php echo onepage_get_option('onepage_quote_header', 'Inspiration of the day'); ?></h5>
        <div class="quote-separator"></div>
        <blockquote><?php echo onepage_get_option('onepage_quote_content', '
            "If the sight of the blue skies fills you with joy, if a blade of grass
          springing up in the
          fields has power to move you, if the simple things of nature have a message that you understand,
          rejoice, for your soul is alive."'); ?>
          <footer class="quote-footer"><?php echo onepage_get_option('onepage_quote_footer', 'Eleonora Duse'); ?></footer>
        </blockquote>
      </div>
    </div>
  </div>
</section>