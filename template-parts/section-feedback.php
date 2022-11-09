<div class="section-padding" id="feedback">
            <div class="container">
              <div class="row text-center wow fadeInDown">
                <div class="col-md-6 col-md-offset-3">
                  <div class="section-title">
                    <h2><?php echo esc_attr(get_theme_mod('client_feedback_title')) ?></h2>
                    <p><?php echo esc_attr(get_theme_mod('client_feedback_description')) ?></p>
                  </div>
                </div>
              </div>
              <div class="row wow fadeInDown">
                <div class="col-md-10 col-md-offset-1">
                  <div class="testmonial-active">
                    
                  <?php 
                  $client_says = get_theme_mod('client_testmonial');

                  foreach($client_says as $cilents){
                    ?>

                  <div class="single-testmolial text-center">
                      <div class="author-img">
                        <img src="<?php echo esc_url($cilents['client_img']) ?>" alt="">
                      </div>
                      <div class="testmonial-content">
                        <h4><?php echo esc_attr($cilents['client_name'])  ?></h4>
                        <p><?php echo esc_attr($cilents['client_description']) ?></p>
                        <div class="author-rating">
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                        </div>
                      </div>
                    </div>



                <?php 
                  }
                  
               
                  ?>


                  



                    



                  </div>
                </div>
              </div>
            </div>
          </div>