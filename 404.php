<?php
get_header();
?>
      <!-- content -->
      <div id="content" class="site-content">
        <div id="primary" class="content-area">
          <main id="main" class="site-main" role="main">

            <div class="container">
              <div class="row">
                <div class="col-md-12">
                  <section class="error-404 not-found">
                    <header class="page-header">
                      <h1 class="page-title">Oops! That page can&rsquo;t be found.</h1>
                    </header><!-- .page-header -->

                    <div class="page-content text-center">
                      <p>It looks like nothing was found at this location. Maybe you can try one of another keyword to search</p>

                      <form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
<label <?php echo $unique_id; ?>>
  <span class="screen-reader-text"><?php echo _x( 'Search for:', 'label', 'getwebsoftware' ); ?></span>
  <input type="search" id="<?php echo $unique_id; ?>" class="search-field" placeholder="<?php echo esc_attr_x( 'Search &hellip;', 'placeholder', 'getwebsoftware' ); ?>" value="<?php echo get_search_query(); ?>" name="s" title="Search for:">
</label>
<input type="submit" class="search-submit" value="Search">
</form><!-- search-form -->

                    </div><!-- .page-content -->
                  </section><!-- .error-404 -->
                </div><!-- .col-md-12-->
              </div><!-- .row -->
            </div><!-- .container -->

          </main><!-- #main -->
        </div><!-- #primary -->
      </div><!-- #content -->

     <?php
	get_footer();
?>