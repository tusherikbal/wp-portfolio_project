<!-- ============ footer area ========= -->
<div class="footer-area">
            <div class="container">
              <div class="row">
                <div class="col-sm-6">
                  <p>&copy; <?php echo esc_attr(get_theme_mod('footer_copyright_section')) ?></p>
                </div>
                <div class="col-sm-6">
                  <div class="social-media text-right">
                    <a href="<?php echo esc_url(get_theme_mod('footer_fb_social_link')) ?>"><i class="fa fa-facebook"></i></a>
                    <a href="<?php echo esc_url(get_theme_mod('footer_tw_social_link')) ?>"><i class="fa fa-twitter"></i></a>
                    <a href="<?php echo esc_url(get_theme_mod('footer_insta_social_link')) ?>"><i class="fa fa-behance"></i></a>
                    <a href="<?php echo esc_url(get_theme_mod('footer_google_link')) ?>"><i class="fa fa-dribbble"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <?php wp_footer(); ?>
          <!-- ============ Scroll to top area ========= -->
          <a href="" class="scroll-to-top"><i class="fa fa-angle-up"></i></a>
       
    </body>
</html>