<!-- Team Section -->
<section id="team" class="visible-over">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h4 class="section-name fade-animate">Our team<i class="fa fa-minus" aria-hidden="true"></i></h4>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-12 col-md-4">
        <h1 class="team-heading section-heading fade-animate "><?php echo onepage_get_option('onepage_team_title', 'meet the magicians'); ?></h1>
          <p class="team-text"><?php echo onepage_get_option('onepage_team_content', '
          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis
          dolorem
          culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae.
          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt
          minus dignissimos. Est blanditiis dolorem culpa incidunt minus dignissimos.
          <br><br>Officia expedita beatae cupiditate, maiores nostrum, repudiandae, reiciendis
          facere nemo!
          Lorem ipsum dolor sit amet, consectetur adipisicing.'); ?></p>
      </div>
      <div class="col-sm-12 col-md-7 col-md-offset-1 team-image-cell">
        <div>
          <div class="col-xs-6">
            <div class="team-cell team-cell1" <?php echo onepage_get_option('onepage_team1_image') ?
                'style="background-image: url(' . onepage_get_option('onepage_team1_image', '') . ')"' : 'false'; ?>></div>
            <h5><?php echo onepage_get_option('onepage_team1_name', 'Jane Doe'); ?></h5>
            <h6><?php echo onepage_get_option('onepage_team1_job', 'Decorator'); ?></h6>
          </div>
          <div class="col-xs-6">
              <div class="team-cell team-cell2" <?php echo onepage_get_option('onepage_team2_image') ?
                  'style="background-image: url(' . onepage_get_option('onepage_team2_image', '') . ')"' : 'false'; ?>></div>
            <h5><?php echo onepage_get_option('onepage_team2_name', 'Elena Sotta'); ?></h5>
            <h6><?php echo onepage_get_option('onepage_team2_job', 'Floral designer'); ?></h6>
          </div>
          <div class="col-xs-6">
              <div class="team-cell team-cell3" <?php echo onepage_get_option('onepage_team3_image') ?
                  'style="background-image: url(' . onepage_get_option('onepage_team3_image', '') . ')"' : 'false'; ?>></div>
            <h5><?php echo onepage_get_option('onepage_team3_name', 'Veronica Pierce'); ?></h5>
            <h6><?php echo onepage_get_option('onepage_team3_job', 'Florist'); ?></h6>
          </div>
          <div class="col-xs-6">
              <div class="team-cell team-cell4" <?php echo onepage_get_option('onepage_team4_image') ?
                  'style="background-image: url(' . onepage_get_option('onepage_team4_image', '') . ')"' : 'false'; ?>></div>
            <h5><?php echo onepage_get_option('onepage_team4_name', 'John Doe'); ?></h5>
            <h6><?php echo onepage_get_option('onepage_team4_job', 'Marketing specialist'); ?></h6>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>