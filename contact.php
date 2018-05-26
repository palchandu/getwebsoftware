<?php
get_header();
/*
Template Name:Contact
*/
?>
      <!-- content -->
      <?php
	  if(have_posts())
	  {
		  the_post();
	  ?>
      <div id="content" class="site-content">
        <div id="primary" class="content-area">
          <main id="main" class="site-main" role="main">
            <!-- map -->
            <?=
			the_content()
			?>
            <div class="container">
              <div class="row">
                <div class="col-sm-3">
                  <h3>Address</h3>
                  <address>
                    <strong>Chandra Prakash Pal</strong><br>
                    Near Post Office, Raj Nagar,Gurgaon,Sector-10A, Haryana<br>
                    <a href="mailto:help@getwebsoftware.com?subject=Enquiry">help@getwebsoftware.com</a><br>
                  </address>
                </div><!-- .col-sm-3 -->

                <div class="col-sm-9">
                  <h3>Send Message</h3>
                  <p>If you wanna like to contact me, please fill the form bellow.</p>
                  <?php echo do_shortcode('[contact-form-7 id="198" title="Send Message"]'); ?>
                </div><!-- .col-sm-9 -->
              </div><!-- .row -->
            </div><!-- .container -->

          </main><!-- #main -->
        </div><!-- #primary -->
      </div><!-- #content -->
	<?php
	  }
	?>
   <?php
   get_footer();
   ?>