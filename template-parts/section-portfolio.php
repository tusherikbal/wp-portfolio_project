<div class="section-padding" id="portfolio">
           <div class="container">
             <div class="row text-center wow fadeInDown">
               <div class="col-md-7 col-md-offset-3">
                 <div class="section-title">
                   <h2><?php echo esc_attr(get_theme_mod('portfolio_text_section')); ?></h2>
                   <p><?php echo esc_attr(get_theme_mod('portfolio_description_section')); ?></p>
                 </div>
               </div>
             </div>
             <div class="row text-center wow fadeInDown">
               <div class="col-md-12">

               
                 <div class="portfolio-menu">
                   <ul>
                     <li data-filter="*" class="active">All</li>
                      <?php  
                        $portfolio_menu= get_theme_mod('portfolio_menu_item');

                        foreach($portfolio_menu as $pmenu){
                            ?>

                      <li data-filter=".<?php echo esc_attr($pmenu['portoliio_item_title_menu_top']) ?>" > 
                      <?php echo esc_attr($pmenu['portoliio_item_title_menu_top']) ?>
                      </li>   

                          <?php                      
                            }
                            ?>
   
                   </ul>
                 </div>


               </div>
             </div>


             <div class="row portfolio text-center wow fadeInDown">

               
          <?php 
                $portfolio_item = get_theme_mod('portfolio_item');
                
                foreach ($portfolio_item as $pitems) {
                  ?>

                <div class="col-md-3 col-sm-6 col-xs-12 <?php echo esc_attr($pitems['portoliio_item_title_menu']); ?> "  >
                   <!-- <div class="single-portfolio portfolio-bg-1"> -->

                   <div class="single-portfolio" style="background-image: url(<?php echo esc_url($pitems['portoliio_item_img']); ?>">


                   <div class="portfolio-hover">
                     <a href="<?php echo esc_url($pitems['portoliio_item_img']);  ?>">
                     <i class="fa fa-link"></i></a>
                     <h3><?php echo esc_attr($pitems['portoliio_item_title']); ?></h3>
                   </div>
                  </div>
                </div>

          
          <?php 
                }                    
          ?>   
             
             



            </div>
          </div>

</div>