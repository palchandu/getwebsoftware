<?php
get_header();
?>
      <!-- content -->
      <div id="content" class="site-content">
        <div id="primary" class="content-area">
          <main id="main" class="site-main" role="main">

            <div class="container">
              <div class="row">
                <div class="col-md-8 page-default">
                <?php
				if(have_posts())
				{
					while(have_posts())
					{
						the_post();
						?>
                        <article class="post format-standard hentry">
                        <div class="post-container">
                          <div class="post-content">
                          <?php
						  if(has_post_thumbnail())
						  {
							  the_post_thumbnail();
						  }
						  else
						  {
							  ?>
                              <img src="https://dummyimage.com/1200x400/cccccc/0011ff.gif&text=GetWebSoftware" class="img-responsive"/>
                              <?php
						  }
						  ?>
                            
                            <div class="heading-title heading-small">
                              <span class="post-meta-cat"><?php the_category(', '); ?></span>
                              <h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?= the_title() ?></a></h2>
                            </div><!-- .heading-small -->
                              
                            <div class="post-meta">
                              <span class="posted-on">
                                Posted on <a href="javascript::void(0)" rel="bookmark"> <time class="entry-date" datetime="2016-05-26"><?php the_time('F jS, Y') ?></time> </a>
                              </span><!-- .posted-on -->
                              <span class="byline">
                                by <span class="author vcard"><a class="url fn n" href="javascript::void(0)"><?php the_author() ?></a></span>
                              </span><!-- .byline -->
                            </div><!-- .post-meta -->
                            <p>
                            <?= the_excerpt() ?>
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
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
                             <a href="<?php the_permalink() ?>" class="more-link">
                            <span class="moretext">Continue reading</span> <span class="screen-reader-text"><?= the_title() ?></span>
                          </a><!-- .more-link -->
                          </div><!-- .post-content -->
                        </div><!-- .post-container -->
                      </article><!-- .post -->
                        <?php
					}
				}
				else
				{
					echo "NO Post Found.";
				}
				?>
                  <!--<nav class="navigation posts-navigation" role="navigation">
                    <h2 class="screen-reader-text">Posts navigation</h2>
                    <div class="nav-links">
                      <div class="nav-previous"><a href="#">Older posts</a></div>
                      <div class="nav-next"><a href="#">Newer posts</a></div>
                    </div>
                  </nav> navigation -->
                  <div class="navigation posts-navigation" role="navigation">
                  	<div class="nav-links">
                     	<div class="nav-previous"><?php previous_posts_link('Newer posts') ?></div>
                     	<div class="nav-next"><?php next_posts_link('Older posts ','') ?></div>
                    </div>
                  </div>
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