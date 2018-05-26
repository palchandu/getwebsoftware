<?php
/*
Template Name:About Page
*/
get_header();
?>
<?php
if(have_posts())
{
	the_post();
	$url =get_post_meta($post->ID,'about_image_fields', true);
	$about_name=get_post_meta( $post->ID, 'about_name_fields', true );
	$about_pdf=get_post_meta( $post->ID, 'about_pdf_fields', true );
?>
      <!-- content -->
      <div id="content" class="site-content">
        <div id="primary" class="content-area">
          <main id="main" class="site-main" role="main">

            <div class="container">
              <div class="row">
                <div class="col-md-8">
                  <article class="page hentry featured-container">
                     <div class="entry-content">
                     <h1 class="entry-title">SKILLS</h1>
                     <?php 
                     $args1=array('posts_per_page' => '-1', 'post_type' => 'Skills' ,'post_status' => 'publish', 'orderby' => 'date', 'order' => 'ASC');
                     $all_skills = new WP_Query( $args1 );
                     if($all_skills->have_posts())
                     {
                     	while($all_skills->have_posts())
                     	{
                     		$all_skills->the_post();
                     		$skill_percent_meta=get_post_meta( $post->ID, 'skill_percent_fields', true );
                     		$skill_color_code_meta=get_post_meta( $post->ID, 'skill_color_fields', true );
                     		?>
                     		  <h2><?php the_title(); ?></h2> 
							  <div class="progress">
							    <div class="<?php echo  $skill_color_code_meta?> progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="<?php echo  $skill_percent_meta?>" aria-valuemin="0" aria-valuemax="100" style="width:<?php echo  $skill_percent_meta?>%">
							      <?php echo  $skill_percent_meta?>%
							    </div>
							  </div>
                     		<?php
                     	}
                     }
                     else 
                     {
                     	echo "No Skill Found.";
                     }
                     ?>
				</div>
             </article><!-- .page -->
                  
                  <article class="page hentry featured-container">
                    <div class="entry-content">
                      <h1 class="entry-title">CURRICULUM VITAE </h1>
                      <embed src="<?= $about_pdf ?>" width="100%" height="2100px" />
                    </div><!-- .entry-content -->
                  </article><!-- .page -->
                  
                </div><!-- .col-md-8 -->
				<div class="col-md-4">
				 <?php
				 	 get_sidebar( 'home-page');
				?>
                </div>
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