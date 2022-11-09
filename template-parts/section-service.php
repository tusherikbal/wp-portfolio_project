
<?php 
    $service_bg_img = get_theme_mod('services_bg_image');
  
?>


<div class="section-padding service-area" style="background-image: url(<?php echo $service_bg_img ?>)" id="service">

            <div class="container">
              <div class="row text-center wow fadeInDown">
                <div class="col-md-6 col-md-offset-3">
                  <div class="section-title">
                    <h2><?php echo esc_attr(get_theme_mod('service_text')); ?></h2>
                    <p><?php echo esc_attr(get_theme_mod('services_description')) ?></p>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-10 col-md-offset-1 col-sm-12">
                  <div class="row">

                  <?php 
                    $service_section = get_theme_mod('services_setting');
                    foreach($service_section as $services){
                      ?>

                    <div class="col-md-6 wow fadeInDown">
                      <div class="single-service">
                        <div class="service-icon">
                          <i class="fa <?php echo $services['service_icon'];?>"></i>
                        </div>
                        <h4><?php echo esc_attr($services['service_title']); ?></h4>
                        <p><?php echo esc_attr($services['service_description']); ?></p>
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