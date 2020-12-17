<?php
function getPostViews($postID, $is_single = true){
   global $post;
   if(!$postID) $postID = $post->ID;
    $count_key = 'post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if(!$is_single){
        return '<span class="svl_show_count_only">'.$count.' Views</span>';
    }
    $nonce = wp_create_nonce('devvn_count_post');
    if($count == "0"){
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
        return '<span class="svl_post_view_count" data-id="'.$postID.'" data-nonce="'.$nonce.'">0 View</span>';
    }
    return '<span class="svl_post_view_count" data-id="'.$postID.'" data-nonce="'.$nonce.'">'.$count.' Views</span>';
}
 
function setPostViews($postID) {
    $count_key = 'post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count == "0" || empty($count) || !isset($count)){
        add_post_meta($postID, $count_key, 1);
        update_post_meta($postID, $count_key, 1);
    }else{
        $count++;
        update_post_meta($postID, $count_key, $count);
    }
}
 
add_action( 'wp_ajax_svl-ajax-counter', 'svl_ajax_callback' );
add_action( 'wp_ajax_nopriv_svl-ajax-counter', 'svl_ajax_callback' );
function svl_ajax_callback() {
    if ( !wp_verify_nonce( $_REQUEST['nonce'], "devvn_count_post")) {
        exit();
    }
    $count = 0;
   if ( isset( $_GET['p'] ) ) {
      global $post;
      $postID = intval($_GET['p']);
      $post = get_post( $postID );
      if($post && !empty($post) && !is_wp_error($post)){
         setPostViews($post->ID);
         $count_key = 'post_views_count';
          $count = get_post_meta($postID, $count_key, true);
      }
   }
   die($count.' Views');
}
 
add_action( 'wp_footer', 'svl_ajax_script', PHP_INT_MAX );
function svl_ajax_script() {
   if(!is_single()) return;
   ?>
   <script>
   (function($){
      $(document).ready( function() {
         $('.svl_post_view_count').each( function( i ) {
            var $id = $(this).data('id');
            var $nonce = $(this).data('nonce');
            var t = this;
            $.get('<?php echo admin_url( 'admin-ajax.php' ); ?>?action=svl-ajax-counter&nonce='+$nonce+'&p='+$id, function( html ) {
               $(t).html( html );
            });
         });
      });
   })(jQuery);
   </script>
   <?php
}
add_filter('manage_posts_columns', 'posts_column_views');
add_action('manage_posts_custom_column', 'posts_custom_column_views',5,2);
function posts_column_views($defaults){
    $defaults['post_views'] = __( 'Views' , '' );
    return $defaults;
}
function posts_custom_column_views($column_name, $id){
    if( $column_name === 'post_views' ) {
        echo getPostViews( get_the_ID(), false);
    }
}