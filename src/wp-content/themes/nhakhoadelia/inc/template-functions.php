<?php
/**
 * WPアップデート通知無視
 */
// Wordpressアップグレード機能停止

require_once("custom-categories-widget.php");

require_once("pickup-school-widget.php");

add_action("widgets_init", "custom_categories_widgets_init");

function custom_categories_widgets_init(){
  register_widget("Custom_Categories_Widget");
}

add_action( 'widgets_init', function(){
	register_widget( 'Pickup_Widget' );
});

/*
**
* Set Main image
*/
function yaqcel_get_the_main_image( $post_id ) {
    $src = '';
    $image_url = yaqcel_get_the_main_image_src( $post_id );
    $attachment_id = yaqcel_get_the_main_image_id( $post_id );

    $parent_post_id = wp_get_post_parent_id($attachment_id);

    if($parent_post_id) {
        if ($attachment_id) {
            $attachement_url =  get_permalink($attachment_id);
            $src .= '<a href="'.$attachement_url.'">';
        }
        $src .= '<img class="main-image" src="' .yaqcel_get_the_main_image_src( $post_id ). '" />';
        if ($attachment_id) {
            $src .= '</a>';
        }
    } else {
        if ($attachment_id) {
            $attachement_url =  get_permalink($attachment_id);
        }
        $src .= '<img class="main-image" src="' .yaqcel_get_the_main_image_src( $post_id ). '" />';
    }
    return $src;
}
/**
* Get attachement_id from URI
*/
function yaqcel_get_image_id( $url ) {
    global $wpdb;
    $sql = "SELECT ID FROM {$wpdb->posts} WHERE post_name = %s";
    preg_match('/([^\/]+?)(-e\d+)?(-\d+x\d+)?(\.\w+)?$/', $url, $matches);
    $post_name = $matches[1];
    return (int)$wpdb->get_var($wpdb->prepare($sql, $post_name));
}
/**
* Set Main image src
*/
function yaqcel_get_the_main_image_src( $post_id ) {
    //$thumbnail = wp_get_attachment_image_src( CFS()->get('main_image', $post_id ), 'full' );
	//if (empty($thumbnail)) {
		$thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id( $post_id ), 'full' );

		if (empty($thumbnail)) {
			$thumbnail = get_the_first_image( $post_id );
		}
	//}
    return esc_url( $thumbnail[0] );
}
/**
* Set Main image link
*/
function yaqcel_get_the_main_image_id( $post_id ) {
    $attachment_id = null;
    //$attachment_id = CFS()->get('main_image', $post_id );
	//if (empty($attachment_id)) {
		$attachment_id = get_post_thumbnail_id( $post_id );

		if (empty($attachment_id)) {
			$thumbnail = get_the_first_image( $post_id );
      $attachment_id = yaqcel_get_image_id( $thumbnail[0] );
		}
	//}
    return $attachment_id;
}

/**
* Get The First image on post.
* @param $post_id
* @return Array
*/
function get_the_first_image( $post_id ) {
    // Childrenから取得 Get from children posts
    $args = array(
        'numberposts' => 1,
        'order' => 'ASC',
        'post_mime_type' => 'image',
        'post_parent' => $post_id,
        'post_status' => null,
        'post_type' => 'attachment',
    );
    $attachments = get_children( $args );
    if ( $attachments ) {
        foreach ( $attachments as $attachment ) {
            $first_img_src = wp_get_attachment_image_src( $attachment->ID, 'full' );
        }
    } else {
    // メディアが紐付けられてない場合、投稿内容から取得
    	 $post_content = get_post($post_id);
    	 $output = preg_match_all( '/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post_content->post_content, $matches );
    	 $first_img_src = $matches[1];
    	 if (empty($first_img_src)) {
    		 $first_img_src = '';
         }
     }
	 return $first_img_src;
}

/**
 *  moreタグにparamを追加
 */
function yaqcel_modify_read_more_link($link) {
    $default_link = $link;
    $url = str_replace("/","",$_SERVER["REQUEST_URI"]);
    if(preg_match('/&_ppp=/',$url)) {
        $link = preg_replace( '|(#more-[0-9]+)|', $url . '&more_flag=true$1', $link );
    } else {
        if(preg_match('/\?/',$link)){
            $tag = '&';
        } else {
            $tag = '?';
        }
        $link = preg_replace( '|(#more-[0-9]+)|', $tag . 'more_flag=true$1', $link );
    }
    return  '<div class="b-readmore">'.$link.'</div>';
}
add_filter( 'the_content_more_link', 'yaqcel_modify_read_more_link' );
/**
 * moreタグアンカーにclassを追加
 */
add_filter('the_content', 'yaqcel_add_class_more');
function yaqcel_add_class_more($more){
    $more = preg_replace( '|<span id="more-|', '<span class="more-anker" id="more-', $more );
    return $more;
}
