<?php
global $getweb_option;
?>
      <!-- site-footer -->
      <footer id="colophon" class="site-footer" role="contentinfo">
        <div class="container">
          <div class="row">
            <div class="col-sm-3">
              <section class="widget widget_tag_cloud">
                <h3 class="widget-title">Tags</h3>
                <div class="tagcloud">
                  <?php
				  $tags = get_tags();
				  foreach ( $tags as $tag ) {
					  ?>
					  <a href="<?= get_tag_link( $tag->term_id ) ?>"><?= $tag->name ?></a>
					  <?php
				  }
				  ?>
                </div>
              </section><!-- .widget_tag_cloud -->
            </div><!-- .col-sm-3 -->

            <div class="col-sm-3">
              <section class="widget widget_recent_entries">
                <h3 class="widget-title">Headline</h3>
                <ul>
                  <?php
				$recent_query = new WP_Query( 'posts_per_page=3' );
				while($recent_query->have_posts()):$recent_query->the_post();?>
				<li>
					<a href="<?= the_permalink() ?>"><?= the_title(); ?></a>
					<span class="post-date"><?php the_time('F jS, Y') ?></span>
				 </li>
				<?php
				endwhile;
				wp_reset_postdata();
				?>
                </ul>
              </section><!-- .widget_recent_entries -->
            </div><!-- .col-sm-3 -->

            <div class="col-sm-6">
              <section class="widget danish_widget_site_info">
                <div class="site-info">
                  <h4 class="site-brand"><?= $getweb_option['website_name'] ?></h4>
                  <p><?= $getweb_option['website_address'] ?> </p>
                  <p><i class="fa fa-envelop"></i> <a href="mailto:<?= $getweb_option['website_help'] ?>?Subject=Enquiry" target="_top"><?= $getweb_option['website_help'] ?></a></p>
                  <p class="muted"><?= $getweb_option['website_copy'] ?></p>
                </div><!-- .site-info -->
              </section><!-- .danish_widget_site_info -->
            </div><!-- .col-sm-6 -->
          </div><!-- .row -->
        </div><!-- .container -->
      </footer><!-- #site-footer -->

      <!-- copyright -->
      <section id="copyright" class="copyright">
        <div class="container">
          <div class="row">
            <div class="col-sm-6 copy-left">
              <!--Copyright © 2016 <a href="http://templateninja.net/"><strong>TemplateNinja</strong></a>. All Right Reserved.-->
            </div><!-- .col-sm-6 -->

            <div class="col-sm-6 copy-right">
              <ul class="social-icon">
                <li><a href="<?= $getweb_option['website_twt'] ?>" target="_blank" class="icon-twitter"><i class="fa fa-twitter"></i></a></li>
                <li><a href="<?= $getweb_option['website_fb'] ?>" target="_blank" class="icon-facebook"><i class="fa fa-facebook-square"></i></a></li>
                <li><a href="<?= $getweb_option['website_ytb'] ?>" target="_blank" class="icon-youtube"><i class="fa fa-youtube"></i></a></li>
                <li><a href="<?= $getweb_option['website_lkd'] ?>" target="_blank" class="icon-instagram"><i class="fa fa-linkedin"></i></a></li>
              </ul>
            </div><!-- .col-sm-6 -->
          </div><!-- .row -->
        </div><!-- .container -->
      </section><!-- #copyright -->

    </div><!-- #page -->
	<?php wp_footer(); ?>
  </body>
</html>