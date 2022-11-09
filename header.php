<!DOCTYPE html>
<html lang="en">
    <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- website title -->
      <title>Welcome | Myfolio</title>
      
      <?php wp_head(); ?>

   


    </head>


    <body <?php body_class(); ?> >
        <!-- ================  Preloder area Start ================ -->
     
        <!-- ============  off canvase body shade =========== -->
        <div class="off-canvas-menu-shade"></div>
        <!-- ==============  off canvase Manu =============== -->
        <div class="off-canvas-menu">
          <span class="menu-close"><i class="fa fa-close"></i></span>
          
          <?php 
           			   wp_nav_menu(array(
              		  'theme_location'=> 'primary-menu',
            			    'menu_id' => 'offcanvas-menu',
           		   ));          ?>
          

        
        </div>
        <!-- ============  Header area =========== -->
        <div class="wecome-header" id="homeee">
          <div class="header-area">
             <div class="container">
              <div class="row">
                <div class="col-sm-2">
                  <span class="menu-trigger"><i class="fa fa-bars"></i></span>
                </div>
                 <div class="col-sm-10 text-right">
                   <div class="mainmanu">
                    


                     <?php 
           			   wp_nav_menu(array(
              		  'theme_location'=> 'primary-menu',
            			    'menu_id' => 'navigation',
           		   ));          ?>

                   </div>
                 </div>
               </div>
             </div>
          </div>
        </div>