<?php 
/*
 * Template Name:Post Need
*/
get_header();
?>
      <!-- content -->
     <div id="content" class="site-content">
        <div id="primary" class="content-area">
          <main id="main" class="site-main" role="main">

            <div class="container">
              <div class="row">
                <div class="col-md-8">
                  <div class="page-title"><h2>Fill Out Form To Send Your Need</h2></div>
                </div><!-- .col-md-12 -->
              </div><!-- .row -->

              <div class="row">
                <div class="col-md-8 page-default">
                  <article class="post format-standard hentry">
                    <div class="post-container">
                      <div class="post-content">
               
                       <?php echo do_shortcode('[contact-form-7 id="161" title="FILL OUT FORM TO ADD YOUR NEED"]'); ?>
                      </div><!-- .post-content -->
                    </div><!-- .post-container -->
                  </article><!-- .post -->
                </div><!-- .col-md-8 -->
                <div class="col-md-4">
				 <?php
				 	 get_sidebar( 'home-page');
					?>
                </div><!-- .col-md-4 -->
              </div><!-- .row -->
            </div><!-- .container -->

          </main><!-- #main -->
        </div><!-- #primary -->
      </div><!-- #content -->
<?php 
get_footer();
?>