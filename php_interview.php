<?php 
/*
 * Template Name:PHP Interview
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
                  <div class="page-title"><h2>PHP INTERVIEW QUESTIONS/ANSWERS</h2></div>
                </div><!-- .col-md-12 -->
              </div><!-- .row -->

              <div class="row">
                <div class="col-md-8 page-default">
                  <article class="post format-standard hentry">
                    <div class="post-container">
                      <div class="post-content">
               			<div class="panel-group" id="accordion">
                        <?php
						$args = array( 'post_type' => 'php_interview', 'posts_per_page' =>-1 );
						$all_questioons = new WP_Query( $args );
						if($all_questioons->have_posts())
						{
							$i=1;
						while($all_questioons->have_posts())
						{
							$all_questioons->the_post();
							$id = get_the_ID();
						?>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse<?php echo $id ?>"><span class="glyphicon glyphicon-plus"></span><?php  the_title(); ?></a>
                                    </h4>
                                </div>
                                <div id="collapse<?php echo $id ?>" class="panel-collapse collapse <?php if($i==1){ echo "in";} ?>">
                                    <div class="panel-body">
                                        <p><?php the_content(); ?></p>
                                    </div>
                                </div>
				<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<ins class="adsbygoogle"
     style="display:block"
     data-ad-format="fluid"
     data-ad-layout-key="-gw-c+2p-30-2w"
     data-ad-client="ca-pub-6903717550956056"
     data-ad-slot="3675770763"></ins>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({});
</script>
                            </div>
                         <?php
						 $i++;
						}
						}
						else
						{
							echo "No Questions/Answers Founds.";
						}
						 ?>
                        </div>
            
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