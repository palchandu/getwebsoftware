<?php
get_header();
?>
<?php
$args = array( 'post_type' => 'portfolio', 'posts_per_page' =>-1 );
$all_portfolio = new WP_Query( $args );
if($all_portfolio->have_posts())
{
?>
      <!-- content -->
      <div id="content" class="site-content">
        <div id="primary" class="content-area">
          <main id="main" class="site-main" role="main">
      
            <section id="portfolio" class="portfolio-page">
              <div class="container">
                <div class="row">
                  <div class="col-md-12">
                    <ul class="nav nav-pills portfolio-sort">
                    <li class="active" data-filter="*"><a href="#"> All </a></li>
                    <?php
					$categories = get_categories();
						foreach($categories as $category) {
						  // echo '<div class="col-md-4"><a href="' . get_category_link($category->term_id) . '">' . $category->name . '</a></div>';
						 ?>
                         <li data-filter=".<?= strtolower($category->name) ?>"><a href="#"><?= $category->name ?></a></li>
                         <?php 
						}
					?>
                    </ul>

                    <ul class="list-unstyled container-portfolio wrapper-portfolio isotope">
                    <?php
					while($all_portfolio->have_posts())
					{
						$all_portfolio->the_post();
						$post_id = get_the_ID(); 
						$category_object = get_the_category($post_id);
						$portfolio_url = get_post_meta( $post->ID, 'portfolio-url', true );
						//echo "<pre>";
						//print_r($category_object);
						//echo "</pre>";
					?>
                      <li class="isotope-item
                      <?php
					  foreach($category_object as $cat)
					  {
						  echo strtolower($cat->name)." ";
					  }
					  ?>
                      ">
                        <div class="portfolio-item">
                          <img src="<?php the_post_thumbnail_url('portfolio_img'); ?>" class="img-responsive" alt="danish-portfolio-cover-09">
                          <div class="portfolio-caption">
                            <div class="portfolio-text">
                              <span class="portfolio-meta">
                              </span>
                              <h3><?php the_title(); ?> <span>//</span></h3>
                              <a target="_blank" href="<?=$portfolio_url ?>" class="btn btn-sm btn-danish">View &raquo;</a>
                            </div><!-- .portfolio-text -->
                          </div><!-- .portfolio-caption -->
                        </div><!-- .portfolio-item -->
                      </li><!-- .isotope-item -->
                      <?php
					}
					  ?>
                    </ul><!-- .container-portfolio -->
                  </div><!-- .col-md-12 -->
                </div><!-- .row -->
              </div><!-- .container -->
            </section><!-- #portfolio -->

          </main><!-- #main -->
        </div><!-- #primary -->
      </div><!-- #content -->
<?php
}
?>
<?php
get_footer();
?>