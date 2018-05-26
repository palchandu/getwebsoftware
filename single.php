<?php
get_header();
?>
      <!-- content -->
      <div id="content" class="site-content">
        <div id="primary" class="content-area">
          <main id="main" class="site-main" role="main">

            <div class="container">
              <div class="row">
               <?php
				if(have_posts())
				{
				?>
                <div class="col-md-8">
               <?php
					while(have_posts())
					{
						the_post();
						setPostViews(get_the_ID());
						wpb_set_post_views(get_the_ID());
						wpb_get_post_views(get_the_ID());
						?>
                        <article class="post format-standard hentry">
                        <header class="entry-header">
                          <div class="heading-title">
                            <h1 class="entry-title"><?= the_title() ?></h1>
                          </div>
                          <div class="entry-meta">
                            <span class="posted-on">
                                Posted on <a href="javascript::void(0)" rel="bookmark"> <time class="entry-date" datetime="2016-05-26"><?php the_time('F jS, Y') ?></time> </a>
                              </span><!-- .posted-on -->
                               <?php
							   global $wpdb;
							   $table=$wpdb->prefix."rating";
							$userid = get_current_user_id();
							$postid = get_the_ID();
							$check_rating = $wpdb->get_row( "SELECT * FROM $table WHERE user_id=$userid AND
				post_id=$postid", ARRAY_A);
							?>
                            <span class="meta-viewer"><?= getPostViews(get_the_ID()) ?></span>
                            <span class="reading-estimation"><?= $post->comment_count ?> Comments</span>
                            <span id="stars-existing" class="reading-estimation starrr" data-rating='<?= $check_rating['rating_value'] ?>'></span>
                           
                            <input type="hidden" id="count-existing" />
                            <input type="hidden" id="userId" value="<?= $userid; ?>"/>
                            <input type="hidden" id="postId" value="<?= $postid; ?>"/>
                          </div><!-- .entry-meta -->
                        </header><!-- .entry-header -->
    
                        <div class="entry-content">
                          <?= the_content() ?>
			
                        </div><!-- .entry-content -->
    
                        <footer class="entry-footer">
                          <span class="cat-links">Posted in <?php the_category(', '); ?></span>
                        </footer><!-- .entry-footer -->
                      </article><!-- .post -->
                        <?php
                        comments_template();
					}
				?>
<p><script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<ins class="adsbygoogle"
     style="display:block; text-align:center;"
     data-ad-layout="in-article"
     data-ad-format="fluid"
     data-ad-client="ca-pub-6903717550956056"
     data-ad-slot="1745765515"></ins>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({});
</script>
</p>
                </div><!-- .col-md-8 -->
                <?php
                
					}
				?>
                <div class="col-md-4">
                  <?php get_sidebar('home-page'); ?>
                </div><!-- .col-md-4 -->
              </div><!-- .row -->
            </div><!-- .container -->

          </main><!-- #main -->
        </div><!-- #primary -->
      </div><!-- #content -->
<?php
get_footer();
?>