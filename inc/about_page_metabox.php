<?php
//====================================================ABOUT PAGE===============================================//
function about_metabox_field()
{
	global $post;
	if(!empty($post))
    {
		$pageTemplate = get_post_meta($post->ID, '_wp_page_template', true);
		if($pageTemplate == 'about.php' )
        {
		add_meta_box(
		'about_field_metabox',//id
		'About Page MetaBox',//title
		'show_about_field_metabox',//callback function
		'page',//screeen
		'normal',//context
		'high'
		);
		}
	}
}
add_action('add_meta_boxes','about_metabox_field');
	//==================Add HTML Fields==============//
	function show_about_field_metabox($post)
	{
	wp_nonce_field( 'about_metabox_nonce', 'about_fields_nonce' );
	?>
        <?php
		$about_name_meta=get_post_meta( $post->ID, 'about_name_fields', true );
		$about_image_meta=get_post_meta( $post->ID, 'about_image_fields', true );
		$about_pdf_meta=get_post_meta( $post->ID, 'about_pdf_fields', true );
		?>
        <!----image upload script---->
        <script>
    jQuery(document).ready(function ($) {
      // Instantiates the variable that holds the media library frame.
      var meta_image_frame;
      // Runs when the image button is clicked.
      $('.image-upload').click(function (e) {
        // Get preview pane
        var meta_image_preview = $(this).parent().parent().children('.image-preview');
        // Prevents the default action from occuring.
        e.preventDefault();
        var meta_image = $(this).parent().children('.meta-image');
        // If the frame already exists, re-open it.
        if (meta_image_frame) {
          meta_image_frame.open();
          return;
        }
        // Sets up the media library frame
        meta_image_frame = wp.media.frames.meta_image_frame = wp.media({
          title: meta_image.title,
          button: {
            text: meta_image.button
          }
        });
        // Runs when an image is selected.
        meta_image_frame.on('select', function () {
          // Grabs the attachment selection and creates a JSON representation of the model.
          var media_attachment = meta_image_frame.state().get('selection').first().toJSON();
          // Sends the attachment URL to our custom image input field.
          meta_image.val(media_attachment.url);
          meta_image_preview.children('img').attr('src', media_attachment.url);
        });
        // Opens the media library frame.
        meta_image_frame.open();
      });
    });
  </script>
  <!---end image upload script--->
  <!----pdf upload script---->
        <script>
    jQuery(document).ready(function ($) {
      // Instantiates the variable that holds the media library frame.
      var meta_image_frame;
      // Runs when the image button is clicked.
      $('.resume-upload').click(function (e) {
        // Prevents the default action from occuring.
        e.preventDefault();
        var meta_image = $(this).parent().children('.meta-pdf');
        // If the frame already exists, re-open it.
        if (meta_image_frame) {
          meta_image_frame.open();
          return;
        }
        // Sets up the media library frame
        meta_image_frame = wp.media.frames.meta_image_frame = wp.media({
          title: meta_image.title,
          button: {
            text: meta_image.button
          }
        });
        // Runs when an image is selected.
        meta_image_frame.on('select', function () {
          // Grabs the attachment selection and creates a JSON representation of the model.
          var media_attachment = meta_image_frame.state().get('selection').first().toJSON();
          // Sends the attachment URL to our custom image input field.
          meta_image.val(media_attachment.url);
        });
        // Opens the media library frame.
        meta_image_frame.open();
      });
    });
  </script>
  <!---end pdf upload script--->
  
		<p>
        <div class="form-group">
        <label for="about_user_name">About Page Name</label>
        <br/>
        <input type="text" name="about_user_name" id="about_user_name" value="<?php echo esc_attr( $about_name_meta ); ?>" />
        </div>
        </p>
        
        <p>
        	<div class="form-group">
				<label for="about_page_image">Image Upload</label><br>
				<input type="text" name="about_page_image" id="about_page_image" class="meta-image regular-text" value="<?php echo esc_attr( $about_image_meta ); ?>">
				<input type="button" class="button image-upload" value="Browse">
            </div>
            <div class="image-preview"><img src="<?php echo esc_attr( $about_image_meta ); ?>" style="max-width: 250px;"></div>
        </p>
        <p>
        <div class="form-group">
				<label for="resume_pdf">Resume Upload</label><br>
				<input type="text" name="resume_pdf" id="resume_pdf" class="meta-pdf regular-text" value="<?php echo esc_attr( $about_pdf_meta ); ?>">
				<input type="button" class="button resume-upload" value="Browse">
            </div>
        </p>
        
        <?php
	}
	//=================Save About Metabox value==================//
	function save_about_field_metabox($post_id)
	{
		if( !isset( $_POST['about_fields_nonce'] ) || !wp_verify_nonce( $_POST['about_fields_nonce'],'about_metabox_nonce') ) 
		return;
	
		if ( !current_user_can( 'edit_post', $post_id ))
		return;
		
		//===========save about page name==========//
		if ( isset($_POST['about_user_name']) ) {        
		update_post_meta($post_id, 'about_name_fields', sanitize_text_field( $_POST['about_user_name']));      
	  }
	  
	  //===========save about page image==========//
		if ( isset($_POST['about_page_image']) ) {        
		update_post_meta($post_id, 'about_image_fields', sanitize_text_field( $_POST['about_page_image']));      
	  }
	  //===========save about page pdf==========//
		if ( isset($_POST['resume_pdf']) ) {        
		update_post_meta($post_id, 'about_pdf_fields', sanitize_text_field( $_POST['resume_pdf']));      
	  } 
	   
	   
	}
	add_action('save_post', 'save_about_field_metabox');
	/*about page skills*/
	function skill_custom_post()
	{
		register_post_type('skills',array(
				'labels'=>array(
						'name'=>'Skills',
						'menu_name'=>'Skills Menu',
						'all_items'=>'All Skills',
						'add_new'=>'Add New Skills',
						'add_new_item'=>'Add New Skills'
				),
				'public'=>true,
				'supports'=>array('title','custom_fields','revisions','page-attributes')
		));
	}
	add_action('init','skill_custom_post');
	function skill_metabox()
	{
		add_meta_box(
				'skill_field_metabox',//id
				'Skill MetaBox',//title
				'show_skill_field_metabox',//callback function
				'Skills',//screeen
				'normal',//context
				'high'
				);
	}
	add_action('add_meta_boxes','skill_metabox');
	function show_skill_field_metabox($post)
	{
		wp_nonce_field( 'skills_metabox_nonce', 'skills_fields_nonce' );
		$skill_percent_meta=get_post_meta( $post->ID, 'skill_percent_fields', true );
		$skill_color_code_meta=get_post_meta( $post->ID, 'skill_color_fields', true );
		?>
		<p>
        <div class="form-group">
        <label for="skills_percent">Skills Percent</label>
        <br/>
        <input type="text" class="form-control" name="skills_percent" id="skills_percent" value="<?php echo esc_attr( $skill_percent_meta ); ?>" />
        </div>
        </p>
        
        <p>
        <div class="form-group">
        <label for="skills_color">Skills Color Code</label>
        <br/>
        <input type="text" name="skills_color" id="skills_color" value="<?php echo esc_attr( $skill_color_code_meta ); ?>" />
        </div>
        </p>
        
		<?php
	}
	
	function save_skills_data($post_id)
	{
		if( !isset( $_POST['skills_fields_nonce'] ) || !wp_verify_nonce( $_POST['skills_fields_nonce'],'skills_metabox_nonce') )
			return;
		
		if ( !current_user_can( 'edit_post', $post_id ))
				return;
		//===========save about page name==========//
		if ( isset($_POST['skills_percent']) ) {
		update_post_meta($post_id, 'skill_percent_fields', sanitize_text_field( $_POST['skills_percent']));
		}
				 
		//===========save about page image==========//
		if ( isset($_POST['skills_color']) ) {
		update_post_meta($post_id, 'skill_color_fields', sanitize_text_field( $_POST['skills_color']));
		}
	}
	add_action('save_post', 'save_skills_data');
?>