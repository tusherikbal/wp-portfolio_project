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
              		  'theme_location'=> 'single_blog_menu',
            			    'menu_id' => 'offcanvas-menu',
           		   ));          ?>
          

        
        </div>
        <!-- ============  Header area =========== -->
        <div class="wecome-header" id="homeee">
          <div class="header-area custom_header_clr">
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
	 

	 
	 
	   <!-- single blog section start -->
		<section class="single-blog single-blog-page">
			<div class="container">
				<div class="row">
					<div class="col-md-4">
						<div class="blog-sidebar wow fadeInLeft">
							
						
							<div class="sidebar-recent-post">

							<h2>Recent Post</h2>

							<?php dynamic_sidebar( 'sidebar-1' ); ?>

						

							</div>
							
						</div>
					</div>
					<div class="col-md-8 wow fadeInRight">
						<div class="blog-details">
						<?php esc_attr(the_post_thumbnail()); ?>
							<h2><?php esc_attr(the_title()); ?>
</h2>
						</div>
						<div class="blog-details-info">
							<div class="blog-details-date">
								<ul>
									<li><i class="fa fa-calendar" aria-hidden="true"></i>
									<?php echo esc_attr(get_the_date()); ?>
								</li>
							<li><i class="fa fa-user" aria-hidden="true"></i>
							<?php the_author_meta('display_name', 1); ?>



									</li>
								</ul>
							</div>
							<div class="blog-details-link">
								<span>Share:</span>
								<ul>
								  <li><a href="#"><i class="fa fa-facebook"></i></a></li>
								  <li><a href="#"><i class="fa fa-twitter"></i></a></li>
								  <li><a href="#"><i class="fa fa-skype"></i></a></li>
								  <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
								</ul>
							</div>
						</div>
						<div class="blog-details-para">
							<?php the_content(); ?>
							
						</div>
						
						<div class="blog-comment-head">
							<h2>Comments</h2>
						</div>
						<div class="row">
							<div class="col-md-12">
								
							</div>
							



						</div>
						<div class="row">
							<div class="col-md-12">
								
								<div class="blog-details-form">

								<?php 
									
									// If comments are open or we have at least one comment, load up the comment template.
								if ( comments_open() || get_comments_number() ) :
									comments_template();
								endif;
									
									?>
								
								
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section><!-- single blog section end -->
		
		
		
		
		


         <!-- ============ footer area ========= -->
         <?php get_footer(); ?>