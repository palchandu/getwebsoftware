<?php get_header();?>
<?php
$s=get_search_query();
$args=array('s'=>$s);
$the_query=new WP_Query($args);
?>
      <!-- content -->
      <div id="content" class="site-content">
        <div id="primary" class="content-area">
          <main id="main" class="site-main" role="main">

            <div class="container">
              <div class="row">
                <div class="col-md-8">
                  <header class="page-header">
                    <h1 class="page-title">Search results for: <?= get_query_var('s')?></h1>
                  </header>
				<?php
				if($the_query->have_posts())
				{
				?>
                  <div class="row entry-container">
                    <div class="col-md-12">
                    <?php
					while($the_query->have_posts())
					{
						$the_query->the_post();
					?>
                      <article class="post format-standard hentry entry-list">
                        <div class="row">
                          <div class="col-sm-6">
                            <?= the_post_thumbnail('thumbnail-search',array('class'=>'img-responsive')) ?>
                          </div><!-- .col-sm-6 -->
                          <div class="col-sm-6">
                            <div class="entry-list-title">
                              <h6 class="entry-cat"><?php the_category(', '); ?> </h6>
                              <h2 class="entry-title"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
                            </div><!-- .entry-list-title -->

                            <div class="entry-meta">
                              <span class="posted-on">Posted on <a href="javascript::void(0)" rel="bookmark"><time class="entry-date published updated" datetime="2016-05-09"><?php the_time('F jS, Y') ?></time></a></span>
                              <span class="byline"> by <span class="author vcard"><a class="url fn n" href="javascript::void(0)"><?php the_author() ?></a></span></span>
                            </div><!-- .entry-meta -->
                            
                            <div class="entry-summary">
                              <p>
                              <a href="<?php the_permalink() ?>" class="more-link">
                            <span class="moretext">Continue reading</span> <span class="screen-reader-text"><?= the_title() ?></span>
                          </a><!-- .more-link -->
                              </p>
                            </div><!-- .entry-summary -->
                          </div><!-- .col-# -->
                        </div><!-- .entry-list -->
                      </article><!-- .post -->
                      <?php
					}
					wp_reset_postdata(); 
					  ?>
                      <!-- navigation -->
                      <nav class="navigation pagination" role="navigation">
                        <h2 class="screen-reader-text">Posts navigation</h2>
                        <div class="nav-links">
                        <?php the_posts_pagination(); ?>
                          
                      </nav><!-- .navigation -->

                    </div><!-- .col-md-12 -->
                  </div><!-- .entry-container -->
                  <?php
				}
				
				  ?>
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