<div class="section-padding contact-me" id="contact">
            <div class="container">
              <div class="row text-center wow fadeInDown">
                <div class="col-md-6 col-md-offset-3">
                  <div class="section-title">
                    <h2><?php echo esc_attr(get_theme_mod('contactform_section_title')) ?></h2>
                    <p><?php echo esc_attr(get_theme_mod('contactform_section_description')) ?></p>
                  </div>
                </div>
              </div>
              <div class="row wow fadeInDown">
                <div class="col-md-8 col-md-offset-2">
                  <div class="contact-form">
                    <form action="index.html">
                      <div class="row">
                        
                      <!-- <div class="col-md-6">
                          <input type="text" placeholder="Full Name">
                        </div>
                        <div class="col-md-6">
                          <input type="email" placeholder="Email">
                        </div>
                      </div>
                      <textarea name="message" id="message" cols="30" rows="10" placeholder="Your Message"></textarea>
                      <input type="submit" value="Send"> -->


                      <?php  
                      
                      echo do_shortcode( '[contact-form-7 id="6" title="Contact form 1"]' );

                      ?>


                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>