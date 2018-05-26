<?php
/*Custom Metabox For Portfolio Page*/
function portfolio_metabox() {
    add_meta_box( 
        'portfolio_extra_fields_metabox', 
        __( 'Portfolio MetaBox', 'portfolio_fields'), 
        'portfolio_extra_fields_metabox_callback', 
        'portfolio', 
        'normal', 
        'default'
    );
}
add_action( 'add_meta_boxes', 'portfolio_metabox' );
function portfolio_extra_fields_metabox_callback( $post ) { 

    wp_nonce_field( 'portfolio_metabox_nonce', 'portfolio_fields_nonce' ); ?>

  <?php         
    $portfolio_url = get_post_meta( $post->ID, 'portfolio-url', true );
  ?>

  <p>   
    <label for="portfolio_link"><?php _e('URL', 'portfolio_fields' ); ?></label><br/>    
    <input type="text" class="widefat kvkoolitusDate" name="portfolio_link" value="<?php echo esc_attr( $portfolio_url ); ?>" />
  </p>

<?php 
}
function portfolio_save_meta( $post_id ) {

  if( !isset( $_POST['portfolio_fields_nonce'] ) || !wp_verify_nonce( $_POST['portfolio_fields_nonce'],'portfolio_metabox_nonce') ) 
    return;

  if ( !current_user_can( 'edit_post', $post_id ))
    return;

  if ( isset($_POST['portfolio_link']) ) {        
    update_post_meta($post_id, 'portfolio-url', sanitize_text_field( $_POST['portfolio_link']));      
  }  

}
add_action('save_post', 'portfolio_save_meta');

/*End of metabox setup*/

function get_web_software_custom_post()
{
	register_post_type('portfolio',array(
	'labels'=>array(
	'name'=>'Portfolio',
	'menu_name'=>'Portfolio Menu',
	'all_items'=>'All Portfolio',
	'add_new'=>'Add New Portfolio',
	'add_new_item'=>'Add New Portfolio Item'
	),
	'public'=>true,
	'supports'=>array('title','custom_post','revisions','page-attributes','thumbnail'),
	 'taxonomies'          => array('portfolio_category', 'category' ),
	));
}
add_action('init','get_web_software_custom_post');
?>