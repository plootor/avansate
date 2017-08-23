<!-- Contact Section -->
<section id="contact">
  <div class="bg-filter"></div>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h4 class="section-name fade-animate">Contact<i class="fa fa-minus" aria-hidden="true"></i></h4>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-10 col-sm-offset-1 col-md-6 col-md-offset-3">
        <h1 class="contact-heading section-heading fade-animate delay4">say hello</h1>
        <form name="sentMessage" id="contactForm" novalidate>
          <div class="row">
            <div class="form-group col-md-12">
              <input type="text" class="form-control" placeholder="Name *" id="name" required data-validation-required-message="Please enter your name.">
              <p class="help-block text-danger"></p>
            </div>
            <div class="form-group col-md-12">
              <input type="email" class="form-control" placeholder="Email *" id="email" required data-validation-required-message="Please enter your email address.">
              <p class="help-block text-danger"></p>
            </div>
            <div class="form-group col-md-12">
              <input type="text" class="form-control" placeholder="Subject *" id="subject" required data-validation-required-message="Please enter the subject.">
              <p class="help-block text-danger"></p>
            </div>
            <div class="clearfix"></div>
            <div class="form-group col-md-12">
              <textarea class="form-control" placeholder="Message *" id="message" required data-validation-required-message="Please enter a message."></textarea>
              <p class="help-block text-danger"></p>
            </div>
            <div class="col-md-12 text-center fade-animate">
              <div id="success"></div>
              <button type="submit" class="btn btn-xl">Send message</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>