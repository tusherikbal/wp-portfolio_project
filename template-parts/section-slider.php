<?php 
  $bgimg = get_theme_mod('image_setting_id');
 

?>



<div class="slide-area" style="background-image: url(<?php echo esc_url($bgimg['url']) ?>)">

<div class="slide-area" >
           <div class="slide-area-overlay pdt-100">
            <div class="slide-active">
              
            
          <?php   
          
          $sliderrr = get_theme_mod('slider_setting');
          // echo '<pre>';
          //  print_r($sliderrr);
          // echo '</pre>';

          foreach ($sliderrr as $slides) {
            ?>

              <div class="single-slide">
                <div class="container">
                  <div class="row">
                    <div class="col-sm-7">
                      <h1><?php echo $slides['slider_h_text']; ?></h1>

                      <h3><?php echo $slides['slider_sub_text']; ?></h3>

                      <p><?php echo $slides['slider_p_text']; ?></p>

                      <a href="#" class="boxed-btn"><?php echo $slides['slider_btn_text_2']; ?></a>

                      <a href="#" class="borderd-btn"><?php echo $slides['slider_btn_text_1']; ?></a>
                    </div>

                    <div class="col-sm-5">
                      <img class="hero-absulate-img" src="<?php echo $slides ['slider_img'] ?>" alt="">
                    </div>
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