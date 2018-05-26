<?php
get_header();
?>
      <!-- content -->
      <div id="content" class="site-content">
        <div id="primary" class="content-area">
          <main id="main" class="site-main" role="main">

            <div class="container">
              <div class="row">
                <div class="col-md-8">
                <?php
				if(have_posts()):
				?>
                  <header class="page-header">
                    <h1 class="page-title">Category: <?= single_cat_title('', false) ?></h1>
                    <div class="taxonomy-description">
                    </div>
                  </header>

                  <div class="row container-post">
                  <?php while(have_posts()): the_post(); ?>
                    <div class="col-sm-6 col-xs-12">
                      <article class="post format-standard hentry">
                        <div class="post-container">
                          <div class="post-content">
                            <?= the_post_thumbnail() ?>
                            <div class="heading-title heading-small">
                              <span class="post-meta-cat"><?php the_category(', '); ?></span>
                              <h2><a href="<?= the_permalink() ?>" rel="bookmark"><?= the_title() ?></a></h2>
                            </div><!-- .heading-title -->
                            <div class="post-meta">
                              <span class="posted-on">Posted on <a href="javascript::void(0)" rel="bookmark"><time class="entry-date" datetime="2016-05-09"><?php the_time('F jS, Y') ?></time></a></span>
                              <span class="byline"> by <span class="author vcard"><a class="url fn n" href="#"><?= the_author() ?></a></span></span>
                            </div><!-- .post-meta -->
                            <p> <?= the_excerpt() ?> <a href="<?= the_permalink() ?>" class="more-link"><span class="moretext">Continue reading</span> <span class="screen-reader-text"><?= the_title() ?></span></a>
                            </p>
                          </div><!-- .post-content -->
                        </div>
                      </article><!-- #post-## -->
                    </div><!-- .col-sm-6 -->
                    <?php endwhile; ?>
                    <!-- navigation -->
                    
                    <div class="col-sm-12">
                      <nav class="navigation pagination" role="navigation">
                        <h2 class="screen-reader-text">Posts navigation</h2>
                        <div class="nav-links">
                          <?php the_posts_pagination( array(
						'prev_text' => __( 'Back', 'textdomain' ),
						'next_text' => __( 'Next', 'textdomain' ),
					) ); ?>
                        </div><!-- .nav-links -->
                      </nav><!-- .navigation -->
                    </div><!-- .col-sm-12 -->

                  </div><!-- .container-post -->
                  <?php endif; ?>
                </div><!-- .col-md-8 -->

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