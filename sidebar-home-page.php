<section class="widget widget_search">
<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
<label <?php echo $unique_id; ?>>
  <span class="screen-reader-text"><?php echo _x( 'Search for:', 'label', 'getwebsoftware' ); ?></span>
  <input type="search" id="<?php echo $unique_id; ?>" class="search-field" placeholder="<?php echo esc_attr_x( 'Search &hellip;', 'placeholder', 'getwebsoftware' ); ?>" value="<?php echo get_search_query(); ?>" name="s" title="Search for:">
</label>
<input type="submit" class="search-submit" value="Search">
</form><!-- search-form -->
</section><!-- .widget_search -->
<section class="widget danish_widget_about">
<?php
$options = get_option('theme-options-settings-group'); 
print_r($options);
?>
<div class="about-author-container">
  <img src="<?php echo esc_attr( get_option('abt_img_option') ); ?>" alt="Danish Brown">
  <div class="about-author-info">
    <h2 class="widget-title"><?php echo esc_attr(get_option('abt_name_option')) ?></h2>
    <span class="author-subtitle"><?php echo esc_attr(get_option('abt_designation_option')) ?></span>
    <div class="author-description">
      <p><?php echo substr(esc_attr(get_option('abt_text_option')),0,119) ?></p>
      <a href="<?php echo esc_attr(get_option('abt_page_option')) ?>" class="more-link"><span class="moretext">More biography</span></a>
    </div><!-- .author-description -->
    <div class="author-footer">
      <div class="author-social">
        <a href="<?php echo esc_attr(get_option('abt_fb_option')) ?>" target="_blank"><i class="fa fa-facebook"></i></a>
        <a href="<?php echo esc_attr(get_option('abt_twt_option')) ?>" target="_blank"><i class="fa fa-twitter"></i></a>
        <a href="<?php echo esc_attr(get_option('abt_lkin_option')) ?>" target="_blank"><i class="fa fa-linkedin"></i></a>
        <a href="<?php echo esc_attr(get_option('abt_youtube_option')) ?>" target="_blank"><i class="fa fa-youtube"></i></a>
        <a href="<?php echo esc_attr(get_option('abt_github_option')) ?>" target="_blank"><i class="fa fa-github" aria-hidden="true"></i></a>
      </div><!-- .author-social -->
    </div><!-- .author-footer -->
  </div><!-- .about-author-info -->
</div><!-- .about-author-container -->
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- sidebar -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-6903717550956056"
     data-ad-slot="6218173623"
     data-ad-format="auto"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>

</section><!-- .danish_widget_about -->
<section class="widget danish_widget_popular_entries">
<h2 class="widget-title">Popular Posts</h2>
<ul>
<?php 
$popularpost = new WP_Query( array( 'posts_per_page' => 4, 'meta_key' => 'wpb_post_views_count', 'orderby' => 'meta_value_num', 'order' => 'DESC'  ) );
while ( $popularpost->have_posts() ) 
{
 $popularpost->the_post();
 ?>
 <li>
    <div class="popular-entry-container">
      <div class="entry-image">
      <?php
	  if(has_post_thumbnail())
		{
		  the_post_thumbnail('sidebar_img');
		}
		else
		{
	    ?>
           <img style="height:80px;" src="https://dummyimage.com/80x53/cccccc/0011ff.gif&text=GetWebSoftware" class="img-responsive"/>
        <?php
	    }
	 ?>
      </div><!-- .entry-image -->
      <div class="entry-content">
        <h4 class="entry-title">
          <a href="<?= the_permalink() ?>" rel="bookmark"><?= the_title() ?></a>
        </h4>
        <span class="entry-category"><?php the_category(', '); ?></span>
        <span class="entry-datetime"><?php the_time('F jS, Y') ?></span>
      </div><!-- .entry-content -->
    </div><!-- .popular-entry-container -->
  </li>
 <?php
}
?>
</ul>
</section><!-- .danish_widget_popular_entries -->
<section class="widget widget_recent_entries">    
<h2 class="widget-title">Recent Posts</h2>
<ul>
<?php
$recent_query = new WP_Query( 'posts_per_page=5' );
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
<section class="widget widget_categories">
<h2 class="widget-title">Categories</h2>
<ul>
<?php
$categories = get_categories( array(
    'orderby' => 'name',
    'parent'  => 0
) );
 
foreach ( $categories as $category ) {
	?>
    <li><a href="<?= get_category_link( $category->term_id ) ?>"><?= $category->name?></a></li>
    <?php
}
?>
</ul>
</section><!-- .widget_categories -->
<section class="widget widget_recent_comments">
<h2 class="widget-title">Recent Comments</h2>
<?php bg_recent_comments(); ?>
</section><!-- .widget_recent_comments -->
<section class="widget widget_tag_cloud">
<h2 class="widget-title">Tags</h2>
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
<?php
if(!dynamic_sidebar('getweb_sidebar'))
{
	echo "No Found";
}
?>
</section><!-- .widget_tag_cloud -->