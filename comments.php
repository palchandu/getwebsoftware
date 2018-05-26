<?php if (!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php'==basename($_SERVER['SCRIPT_FILENAME'])): ?>
<?php die('please do not load this page directly,thanks!'); ?>
<?php endif; ?>
<?php if (!empty($post->post_password)): ?>
<?php if($_COOKIE['wp-postpass'.COOKIEHASH]!=$post->password):?>
<p>password protected post.please enter valid password to view comments!</p>
<?php endif;?>
<?php endif; ?>
<?php if ($comments):?>
  <?php foreach ($comments as $comment): ?>
  <?php if ($comment->comment_approved='0'): ?>
  <p>Your comment is undergoing moderation</p>
   <?php endif;?>
<div id="comment-<?php comment_ID(); ?>" class="entry-author-bio" style="margin: 10px;">
   <div class="author-bio-avatar">
   <?php $defaule=array('class'=>'avatar avatar-80 photo'); ?>
	<?php echo get_avatar( $comment, 80, $defaule); ?>
   </div><!-- .author-bio-avatar -->
   <div class="author-bio-description">
       <h4><a href="javascript::void(0)" rel="author"><?php comment_author_link()?></a><br/><small>on <?php comment_date() ?></small></h4>
       
      <p><?php comment_text() ?></p>
   </div><!-- .author-bio-description -->
</div><!-- .entry-author-bio -->
  <?php endforeach; ?>
<?php else: ?>
<p>Be The First To Comment</p>
<?php endif;?>

<?php if (comments_open()):?>
<div id="comments" class="comments-area">
<div id="respond" class="comment-respond">
<?php if (get_option('comment_registration') && !$user_ID): ?>
<p>you must be logged in to cooment on this article</p>
<?php else :?>
<h3 id="reply-title" class="comment-reply-title">Leave a Reply <small><a rel="nofollow" id="cancel-comment-reply-link" href="#respond">Cancel reply</a></small></h3>
<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform" class="form-horizontal comment-form">
<?php if($user_ID): ?>
<p>Logged in as <a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a></p>
<?php else : ?>
<div class="form-group">
<div class="col-sm-4">
    <input type="text" name="author" id="author" value="<?php echo $comment_author; ?>" class="form-control" placeholder="*Name :" aria-required="true">
</div>
<div class="col-sm-4">
   <input type="email" name="email" id="email" value="<?php $comment_author_email; ?>" class="form-control" placeholder="*Email :" aria-required="true">
</div>
<div class="col-sm-4">
 <input type="url" name="url" id="url" value="<?php $comment_author_url; ?>" class="form-control" placeholder="Website :">
</div>
</div>
<?php endif;?>
<div class="form-group">
   <div class="col-sm-12">
     <textarea id="comment" class="form-control" rows="6" name="comment" aria-required="true" placeholder=" Your Message : "></textarea>
  </div>
</div>
<p class="form-submit">
<input name="submit" type="submit" id="submit" class="btn btn-danish btn-lg btn-block" value="Submit">
<input type="hidden" name="comment_post_ID" value="<?php echo $id; ?>" id="comment_post_ID">
</p>
<?php do_action('comment_form',$post->ID) ?>
</form><!-- #commentform -->
</div><!-- #respond -->
</div><!-- #comments -->
<?php endif; ?>

<?php else: ?>
<p>comments currently losed</p>
<?php endif; ?>
