<?php 
/*
 * Template Name:Video Post
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
                  <div class="page-title"><h2>TUTORIALS</h2></div>
                </div><!-- .col-md-12 -->
              </div><!-- .row -->

              <div class="row">
                <div class="col-md-8 page-default">
                  <article class="post format-standard hentry">
			
                    <div class="post-container">
			
                      <div class="post-content">
                        <ul class="nav nav-tabs">
                    <li class="active"><a data-toggle="tab" href="#sectionA">PHP</a></li>
                    <li><a data-toggle="tab" href="#sectionB">MySql</a></li>
                    <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">Frontend Language <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a data-toggle="tab" href="#dropdown1">HTML</a></li>
                            <li><a data-toggle="tab" href="#dropdown2">CSS</a></li>
                            <li><a data-toggle="tab" href="#dropdown3">Jquery</a></li>
                            
                        </ul>
                    </li>
                </ul>
                <div class="tab-content">
                    <div id="sectionA" class="tab-pane fade in active">
                    	<h2 class="text-center"><u>PHP Tutorials</u></h2>
                                <div class="panel-group" id="accordion">
                                <?php
                                $args = array( 'post_type' => 'php_tutorials');
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
                                    echo "No PHP TUTORIALS FOUND.";
                                }
                                 ?>
                                </div>
                    </div>
                    <div id="sectionB" class="tab-pane fade">
                    	<h2 class="text-center"><u>MySql Tutorials</u></h2>
                      	<div class="panel-group" id="accordion">
                                <?php
                                $args = array( 'post_type' => 'mysql_tutorials');
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
                                    echo "No MYSQL TUTORIALS FOUND.";
                                }
                                 ?>
                                </div>
                    </div>
                    <div id="dropdown1" class="tab-pane fade">
                    <h2 class="text-center"><u>HTML Tutorials</u></h2>
                        <div class="panel-group" id="accordion">
                                <?php
                                $args = array( 'post_type' => 'html_tutorials');
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
                                    echo "No HTML TUTORIALS FOUND.";
                                }
                                 ?>
                                </div>
                    </div>
                    <div id="dropdown2" class="tab-pane fade">
                    <h2 class="text-center"><u>CSS Tutorials</u></h2>
                        <div class="panel-group" id="accordion">
                                <?php
                                $args = array( 'post_type' => 'css_tutorials');
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
                                    echo "No CSS TUTORIALS FOUND.";
                                }
                                 ?>
                                </div>
                         </div>
                         <div id="dropdown3" class="tab-pane fade">
                            <h2 class="text-center"><u>Jquery Tutorials</u></h2>
                                <div class="panel-group" id="accordion">
                                <?php
                                $args = array( 'post_type' => 'juery_tutorials');
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
                                    echo "No JQUERY TUTORIALS FOUND.";
                                }
                                 ?>
                                </div>
                           </div>
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