<div class="section-padding" id="skill">
            <div class="container">
              <div class="row wow fadeInDown">
                <div class="col-md-5">
                  <img src="<?php echo esc_url(get_theme_mod('skill_img')) ?>" alt="">
                </div>
                <div class="col-md-6 col-md-offset-1">
                  <h2>Professional Skills</h2>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit  eiusmod tempor incididunt ut labore et dolore magna aliqua. Enim minim veniam quis nostrud exercitation ullamco laboris nisi aliquip exea commodo consequat.</p>


                  <div class="my-progress-bar">

                  <?php  

                      $skill_part = get_theme_mod('skill_settings');
                      foreach( $skill_part as $skill){
                        ?>
                       

                  <h4><?php echo esc_attr($skill['skill_name']); ?></h4>
                    <div class="progress">
                      <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="<?php echo $skill['Skillnumber']; ?>" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $skill['Skillnumber']; ?>%">
                        <span class="sr-only">90% Complete (warning)</span>
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