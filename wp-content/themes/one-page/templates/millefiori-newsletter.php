<!--Subscribe Section-->
<section id="subscribe" class="cta-form">
  <div class="container text-center">
    <div class="row">
      <div class="col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3">
        <h1 class="subscribe-heading section-heading fade-animate"><?php echo onepage_get_option('subscribe_header', 'newsletter'); ?></h1>
        <!-- MailChimp Signup Form -->
        <div id="mc_embed_signup">
          <form action="#" method="post" id="subscribe-form" target="_blank" novalidate>
            <div class="input-group input-group-lg form-group">
              <input type="email" name="email" class="form-control" placeholder="Email address..." required data-validation-required-message="Please enter your email address.">
              <p class="help-block text-danger"></p>
              <span class="input-group-btn">
                <button type="submit" name="subscribe" class="btn btn-xl">
                  <i class="fa fa-angle-right" aria-hidden="true"></i>
                </button>
              </span>
            </div>
            <div id="subscribe2-success"></div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>