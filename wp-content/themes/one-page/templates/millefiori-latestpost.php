<section id="blog" class="visible-over">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 col-md-12">
        <h4 class="section-name fade-animate">Latest project<i class="fa fa-minus" aria-hidden="true"></i></h4>
      </div>
    </div>
    <div class="row pos-r">
      <div class="col-sm-12 col-md-6 blog-image-cell">
        <div class="blog-image" <?php echo onepage_get_option('onepage_latestpost_image') ?
            'style="background-image: url(' . onepage_get_option('onepage_latestpost_image', '') . ')"' : 'false'; ?>></div>
      </div>
      <div class="col-sm-12 col-md-6">
        <div>
          <h1 class="section-heading fade-animate"><?php echo onepage_get_option('onepage_latestpost_heading', 'the enchanted forest'); ?></h1>
          <h4 class="blog-title"><?php echo onepage_get_option('onepage_latestpost_date', 'may 2017'); ?></h4>
          <p class="blog-text">
              <?php echo onepage_get_option('onepage_latestpost_content', '
              We launched three years ago and loved it every second. At the time
            I was just a man with an ideea but 2 weeks later I was a man with a plan. We jumped on this
            adventure and learned a lot along the way. Two days after launching we had our first client. In
            what we do, being creative is crucial. And we love the moments when we have to make our brain
            work and produce new, crazy, beautiful ideas.'); ?></p>
          <a href="<?php echo esc_url(onepage_get_option('onepage_latestpost_link', '#portfolioModal1')); ?>" data-toggle="modal" class="page-scroll btn btn-xl fade-animate ">Find more</a>
        </div>
      </div>
    </div>
  </div>
</section>