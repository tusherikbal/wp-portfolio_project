<div class="section-padding my-blog" id="blog">
            <div class="container">
            <div class="row text-center wow fadeInDown">


          
            
            <div class="col-md-6 col-md-offset-3">
            <div class="section-title">
              <h2>latest blog post</h2>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod tempor incididunt labore dolore aliqua eiusmod tempor incididunt labore</p>
            </div>
          </div>

              </div>


              <div class="row wow fadeInDown">

              <?php 
            $args = array(
              'post_type' => 'post',
              'posts_per_page' => 3,
            );

            $query = new WP_Query($args);
            while ($query -> have_posts()) {
            $query-> the_post();
            ?>

                <div class="col-md-4 col-sm-6">
                  <div class="single-blog">
                  <a class="blog-bg" style="background-image: url(<?php echo esc_attr(get_the_post_thumbnail_url()); ?> ) ">
                  
                  </a>
                    <!-- <a href="blog-details.html" class="blog-bg blog-bg-1"></a> -->
                    <a href="<?php  esc_attr(the_permalink()); ?>"><h4><?php esc_attr(the_title()); ?></h4></a>

             
                    <p><?php esc_attr(the_excerpt()); ?></p>
                  </div>
                </div>

                <?php 
            }
          wp_reset_postdata();
          ?>

               


              </div>
            </div>
          </div>