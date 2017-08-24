<!-- Services Section -->
<section id="services" class="visible-over">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h4 class="section-name fade-animate">Services<i class="fa fa-minus" aria-hidden="true"></i></h4>
      </div>
    </div>
    <div class="row pos-r">
      <div class="service-image-container col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-0">
        <div class="service-image1" <?php echo onepage_get_option('onepage_service_image1') ?
            'style="background-image: url(' . onepage_get_option('onepage_service_image1', '') . ')"' : 'false'; ?>></div>
        <div class="service-image2" <?php echo onepage_get_option('onepage_service_image2') ?
            'style="background-image: url(' . onepage_get_option('onepage_service_image2', '') . ')"' : 'false'; ?>></div>
      </div>
      <div class="col-sm-12 col-md-6 right">
        <div>
          <div class="col-sm-6 col-md-12 service-info">
            <i class="fa <?php echo onepage_get_option('service_element1_image', 'fa-camera-retro'); ?> fa-3x pull-left service-icon" aria-hidden="true"></i>
            <div class="service-cell">
              <h4 class="service-heading fade-animate"><?php echo onepage_get_option('service_element1_header', 'Event floral arrangements'); ?></h4>
              <div class="service-separator"></div>
              <p class="service-text fade-animate"><?php echo onepage_get_option('service_element1_content', '
                  Weddings, celebrations, parties - we can decorate and make your event
                more beautiful and unforgetable with special floral arrangements and decorations.'); ?></p>
            </div>
          </div>
          <div class="col-sm-6 col-md-12 service-info">
            <i class="fa <?php echo onepage_get_option('service_element2_image', 'fa-globe'); ?> fa-3x pull-left service-icon" aria-hidden="true"></i>
            <div class="service-cell">
              <h4 class="service-heading fade-animate"><?php echo onepage_get_option('service_element2_header', 'Flower deliveries'); ?></h4>
              <div class="service-separator"></div>
              <p class="service-text fade-animate"><?php echo onepage_get_option('service_element2_content', '
                  You can have the delivery at your choosen place any day of the week,
                from monday to sunday, from 9 AM to 6 PM, with punctuality and responsibility'); ?></p>
            </div>
          </div>
          <div class="col-sm-6 col-md-12 service-info">
            <i class="fa <?php echo onepage_get_option('service_element3_image', 'fa-gift'); ?> fa-3x pull-left service-icon" aria-hidden="true"></i>
            <div class="service-cell">
              <h4 class="service-heading fade-animate"><?php echo onepage_get_option('service_element3_header', 'Special occasion bouquets'); ?></h4>
              <div class="service-separator"></div>
              <p class="service-text fade-animate"><?php echo onepage_get_option('service_element3_content', '
                  We will help you make someone\'s birthday, graduation, celebration
                and any day more bright and beatiful with a special flower bouquet and personal note.'); ?></p>
            </div>
          </div>
          <div class="col-sm-6 col-md-12 service-info">
            <i class="fa <?php echo onepage_get_option('service_element4_image', 'fa-pagelines'); ?> fa-3x pull-left service-icon" aria-hidden="true"></i>
            <div class="service-cell">
              <h4 class="service-heading fade-animate"><?php echo onepage_get_option('service_element4_header', 'Fresh flowers directly from farms'); ?></h4>
              <div class="service-separator"></div>
              <p class="service-text fade-animate"><?php echo onepage_get_option('service_element4_content', '
                  We partnered with the best flower farms in the country, in order to
                make sure the flowers you get are the freshest, eco-friendly, organic flowers possible.'); ?></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
