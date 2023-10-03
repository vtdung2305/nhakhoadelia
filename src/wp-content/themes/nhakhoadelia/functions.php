<?php
/**
 * Functions and definitions
 *
 * @package WordPress
 * @subpackage delia
 */

if ( ! function_exists( 'pagination_bar' ) ) :
/**
 * Display navigation of posts
 */
function pagination_bar($pages = '') {

    if($pages == '')
    {
        global $wp_query;
        $pages = $wp_query->max_num_pages;
        if(!$pages)
        {
            $pages = 1;
        }
    }
    if ($pages > 1){
        $current_page = max(1, get_query_var('paged'));
        $big = 999999999;
        echo paginate_links(array(
            'base' => str_replace( $big, '%#%', get_pagenum_link($big) ),
            'format' => 'page/%#%',
            'current' => $current_page,
            'total' => $pages,
            'prev_next' => false
        ));
    }
}
endif;

add_filter( 'redirect_canonical', 'custom_disable_redirect_canonical' );
function custom_disable_redirect_canonical( $redirect_url ) {
    if ( is_paged() && is_singular() ) $redirect_url = false;
    return $redirect_url;
}

// display custom post type (delia) in tag.php
add_action( 'pre_get_posts', 'add_post_tag_archive' , 10 , 1);
function add_post_tag_archive( $wp_query ) {
  if ($wp_query->is_main_query() && $wp_query->is_tag()) {
    $wp_query->set( 'post_type', array('post','delia'));
  }
}

//iphoneまたはipodで閲覧されているかどうかを判定
function is_iphone() {
    $ua = $_SERVER['HTTP_USER_AGENT'];
    if( strpos($ua, 'iPhone')!== false || strpos($ua, 'iPod')!== false){
        return true;
    } else {
        return false;
    }
}
//androidスマートフォンで閲覧されているかどうかを判定する関数
//「mobile」文字列の有無を見ることで、タブレット端末をfalse判定
function is_android() {
    $ua = $_SERVER['HTTP_USER_AGENT'];
    if(strpos($ua, 'Android')!== false&&strpos($ua, 'Mobile')!== false){
        return true;
    } else {
        return false;
    }
}
//Mozillaが開発するスマートフォン用OS「Firefox OS」の判定関数
function is_firefox_os(){
    $ua = $_SERVER['HTTP_USER_AGENT'];
    if( strpos($ua, 'Android')=== false&&strpos($ua, 'Firefox')!== false&&strpos($ua, 'Mobile')!== false ){
        return true;
    } else {
        return false;
    }
}
//Windows Phoneで閲覧されているかどうかを判定する関数
//「mobile」文字列の有無を確認することで、タブレット端末をfalse判定
function is_windows_phone(){
    $ua = $_SERVER['HTTP_USER_AGENT'];
    if( strpos($ua, 'Windows')!== false&&strpos($ua, 'Phone')!== false ) {
        return true;
    } else {
        return false;
    }
}
//BlackBerryで閲覧されているかどうかを判定する関数
function is_blackberry() {
    $ua = $_SERVER['HTTP_USER_AGENT'];
    if( strpos($ua, 'BlackBerry')!== false ) {
        return true;
    } else {
        return false;
    }
}
//ガラケーで閲覧されているかどうか判定する関数
function is_ktai() {
    $ua = $_SERVER['HTTP_USER_AGENT'];
    if( strpos($ua, 'DoCoMo')!== false|| strpos($ua, 'KDDI')!== false|| strpos($ua, 'UP.Browser')!== false|| strpos($ua, 'MOT-')!== false||strpos($ua, 'J-PHONE')!== false|| strpos($ua, 'WILLCOM')!== false|| strpos($ua, 'Vodafone')!== false|| strpos($ua, 'SoftBank')!== false ) {
        return true;
    } else {
        return false;
    }
}
/*****
is_ktai()、is_iphone()、is_android()、is_firefox_os()、is_windows_phone()、is_blackberry()のどれかがTRUEを返すと
is_mymobile()はTRUEを返します。つまりガラケー･スマホでの閲覧時にはTRUE、PC・タブレットでの閲覧時にはFALSEを返します。
******/
function is_mymobile()
{
    if( is_ktai()|| is_iphone()|| is_android()|| is_firefox_os()|| is_windows_phone()|| is_blackberry() ) {
        return true;
    } else {
        return false;
    }
}


/*
 * Enable use of featured image
 *
 */
add_theme_support( 'post-thumbnails' );
function add_thumbnail_size() {
    add_image_size('post_list_thumbnail', 600, 360 ,true );
    add_image_size('post_eyecatch', 750, 750 );
}
add_action( 'after_setup_theme', 'add_thumbnail_size' );



/*
 * Delete meta
 *
 */
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'feed_links_extra', 3);

/*
 * Dashborad: hide widgets
 *
 */
function remove_dashboard_widgets() {
  global $wp_meta_boxes;
  // unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_right_now']);        // 現在の状況
  unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_recent_comments']);  // 最近のコメント
  // unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_incoming_links']);   // 被リンク
  // unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_plugins']);          // プラグイン
  unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_quick_press']);        // クイック投稿
  // unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_recent_drafts']);      // 最近の下書き
  unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_primary']);            // WordPressブログ
  unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_secondary']);          // WordPressフォーラム
}
add_action('wp_dashboard_setup', 'remove_dashboard_widgets');
remove_action( 'welcome_panel', 'wp_welcome_panel' );


/*
 * Admin post edit: hide menu
 *
 */
function remove_post_metaboxes() {
    remove_meta_box('postcustom', 'post', 'normal'); // カスタムフィールド
    //remove_meta_box('postexcerpt', 'post', 'normal'); // 抜粋
    remove_meta_box('commentstatusdiv', 'post', 'normal'); // コメント設定
    remove_meta_box('trackbacksdiv', 'post', 'normal'); // トラックバック設定
    // remove_meta_box('revisionsdiv', 'post', 'normal'); // リビジョン表示
    remove_meta_box('formatdiv', 'post', 'normal'); // フォーマット設定
    // remove_meta_box('slugdiv', 'post', 'normal'); // スラッグ設定
    // remove_meta_box('authordiv', 'post', 'normal'); // 投稿者
    // remove_meta_box('categorydiv', 'post', 'normal'); // カテゴリー
    //remove_meta_box('tagsdiv-post_tag', 'post', 'normal'); // タグ
    remove_meta_box('postimagediv', 'post', 'normal'); // アイキャッチ画像
}
add_action('admin_menu', 'remove_post_metaboxes');



/*
 * Admin: rich editor settings
 *
 */
// TinyMCE: customize format select (delete "h1")
// function set_tinymce_formats( $initArray ) {
//     $initArray['block_formats'] = "段落=p;中見出し=h3;小見出し=h4;div=div";
//     return $initArray;
// }
// add_filter( 'tiny_mce_before_init', 'set_tinymce_formats' );


// TinyMCE: Delete buttons
function tinymce_delete_buttons( $array ) {
    $array = array_diff($array, array('wp_more','wp_help'));
    return $array;
}
add_filter( 'mce_buttons', 'tinymce_delete_buttons' );


// TinyMCE: Disable auto formatting
remove_filter('the_content', 'wpautop');
remove_filter('the_excerpt', 'wpautop');
remove_filter('term_description', 'wpautop');

// TinyMCE: Enable auto formatting except pages
if ( ! function_exists( 're_wpautop' ) ) {
    add_action('wp', 're_wpautop');
    function re_wpautop() {
        if(!is_page()) add_filter('the_content', 'wpautop');
    }
}

// Admin IR: filter by taxonomy
add_action( 'restrict_manage_posts', 'add_post_taxonomy_restrict_filter' );
function add_post_taxonomy_restrict_filter() {
    global $post_type;
    if ( 'ir_library' == $post_type ) {
        ?>
        <select name="ir_library_type">
            <option value="">IR種別 指定なし</option>
            <?php
            $terms = get_terms('ir_library_type');
            foreach ($terms as $term) { ?>
                <option value="<?php echo $term->slug; ?>"><?php echo $term->name; ?></option>
            <?php } ?>
        </select>
        <?php
    }
}

// Admin IR post: reverse taxonomy order
function admin_ir_period_order() {
    echo '<script type="text/javascript">
    //<![CDATA[
    jQuery(function(){
        var post_period_list = jQuery("#ir_periodchecklist").children("li");
        if(post_period_list.length > 0){
            jQuery("#ir_periodchecklist").html(post_period_list.get().reverse());
        }
        var quick_period_list = jQuery(".ir_period-checklist");
        if(quick_period_list.length > 0){
            jQuery(".ir_period-checklist").each(function(){
                jQuery(this).html(jQuery(this).find("li").get().reverse());
            });
        }
    });
    //]]>
    </script>';
}
add_action('admin_footer', 'admin_ir_period_order');

//Add widgets

function delia_widgets() {
    register_sidebar( array(
        'name'          => __( 'Sidebar', 'delia' ),
        'id'            => 'sidebar',
        'description'   => '',
        'before_widget' => '<aside id="%1$s" class="w-widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h3 class="w-widget_title">',
        'after_title'   => '</h3>',
    ) );

    register_sidebar( array(
        'name'          => __( 'Sidebar School', 'delia' ),
        'id'            => 'sidebar-school',
        'description'   => '',
        'before_widget' => '<aside id="%1$s" class="w-widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h3 class="w-widget_title">',
        'after_title'   => '</h3>',
    ) );
}
add_action( 'widgets_init', 'delia_widgets' );

function custom_trim_excerpt($text = '', $excerpt_length = 55) {
    $raw_excerpt = $text;
    if ( '' == $text ) {
        $text = get_the_content('');
        $text = strip_shortcodes( $text );
        /**
         * @ignore
         */
        $text = apply_filters('the_content', $text);
        $text = str_replace(']]>', ']]&gt;', $text);

        $text = wp_trim_words( $text, $excerpt_length, '...' );
        $text = mb_substr($text, 0, $excerpt_length) . '...';
    }
    /**
     * Filter the event's trimmed excerpt string.
     *
     * @param string $text        The trimmed text.
     * @param string $raw_excerpt The text prior to trimming.
     */
    $text = apply_filters('custom_trim_excerpt', $text, $raw_excerpt);
    return $text;
}

// Category templates

function category_has_children( $term_id = 0, $taxonomy = 'category' ) {
    $children = get_categories( array( 'child_of' => $term_id, 'taxonomy' => $taxonomy ) );
    return ( $children );
}
// function new_subcategory_hierarchy() {
//     $category = get_queried_object();

//     $cat_id = $category->cat_ID;

//     $templates = array();

//     if ( category_has_children($cat_id) ) {
//         // Use default values from get_category_template()
//         $templates[] = "category-{$category->slug}.php";
//         $templates[] = "category-{$category->term_id}.php";
//         $templates[] = 'category.php';
//     } else {
//         // Create replacement $templates array
//         $parent = get_category( $parent_id );

//         // Current first
//         $templates[] = "subcategory-{$category->slug}.php";
//         $templates[] = "subcategory-{$category->term_id}.php";
//         $templates[] = "subcategory.php";

//         // Parent second
//         $templates[] = "category-{$parent->slug}.php";
//         $templates[] = "category-{$parent->term_id}.php";
//         $templates[] = 'category.php';
//     }
//     return locate_template( $templates );
// }

// add_filter( 'category_template', 'new_subcategory_hierarchy' );


//本文抜粋を取得する関数
//使用方法：http://nelog.jp/get_the_custom_excerpt
function get_the_custom_excerpt($content, $length) {
  $length = ($length ? $length : 70);//デフォルトの長さを指定する
  $content =  preg_replace('/<!--more-->.+/is',"",$content); //moreタグ以降削除
  $content =  strip_shortcodes($content);//ショートコード削除
  $content =  strip_tags($content);//タグの除去
  $content =  str_replace("&nbsp;","",$content);//特殊文字の削除（今回はスペースのみ）
  $content =  mb_substr($content,0,$length);//文字列を指定した長さで切り取る
  return $content;
}

// recommend
if ( ! function_exists( 'my_related_posts' ) ) :
function my_related_posts() {
    if (is_single()) {
        global $post;
        $current_post = $post->ID;
        $categories = get_the_category();

        $category = $categories[0];
        foreach ($categories as $cat) {
            if($cat->parent !== 0){
                $category = $cat;
                break;
            }
        }
        $category_id = $category->cat_ID;

        //foreach ($categories as $category) :
        if($category->category_count > 1):
            ?>
        <section class="related-post">
            <h2 class="realted-title">Bài viết liên quan</h2>
            <ul class="post-list post-list-cat row">
                <?php
                $posts = get_posts('numberposts=4&category='. $category->term_id . '&exclude=' . $current_post);
                $i = 1;
                foreach($posts as $post) :
                    ?>
                <?php get_template_part( 'template-parts/post/content', 'archive' ); ?>
                <?php endforeach; ?>
            </ul>
        </section>
        <?php endif;?>
        <?php
    }
    wp_reset_query();
}
endif;

function add_featured_galleries_to_ctp( $post_types ) {
    array_push($post_types, 'delia');
    return $post_types;
}
add_filter('fg_post_types', 'add_featured_galleries_to_ctp' );

/**
 * Add Style & Script tags
 */
function theme_scripts() {
    wp_enqueue_style( 'bootstrap-style', get_template_directory_uri() . '/assets/css/bootstrap/bootstrap.min.css', array(), wp_get_theme()->get( 'Version' ) );
    wp_enqueue_style( 'fonts-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css');
    wp_enqueue_style( 'swiper-style', get_template_directory_uri() . '/assets/css/swiper.min.css', array(), wp_get_theme()->get( 'Version' ) );
    wp_enqueue_style( 'theme-style', get_template_directory_uri() . '/assets/css/app.css', array(), date('Y-m-d-H:i:s') );
    wp_enqueue_script( 'bootstrap-script', get_template_directory_uri() . '/assets/js-jquery/bootstrap/bootstrap.bundle.min.js', array(), '20230124', true );
    wp_enqueue_script( 'swiper-script', get_template_directory_uri() . '/assets/js-jquery/module/swiper.min.js', array(), '20230124', true );
    wp_enqueue_script( 'theme-script', get_template_directory_uri() . '/assets/js/build/bundle.js', array(), '20230124', true );
}
add_action( 'wp_enqueue_scripts', 'theme_scripts' );

/**
 * Enhance the theme by hooking into WordPress.
 */

function custom_pagination() {
  echo '<div class="p-pagination">';
    echo the_posts_pagination( array(
      'prev_text' => '&lt;',
      'next_text' => '&gt;',
    ) );
  echo '</div><!-- /pagenavi -->';
}

function template_chooser($template)
{
  global $wp_query;
  $post_type = get_query_var('post_type');
  if( $wp_query->is_search && $post_type == 'school' )
  {
    return locate_template('search-school.php');
  }
  return $template;
}
add_filter('template_include', 'template_chooser');

//Page Slug Body Class
function add_slug_body_class( $classes ) {
    global $post;
    if ( isset( $post ) ) {
        $classes[] = $post->post_type . '-' . $post->post_name;
    }
    return $classes;
}
add_filter( 'body_class', 'add_slug_body_class' );

function empty_content($str) {
    return trim(str_replace('&nbsp;','',strip_tags($str))) == '';
}

add_filter( 'rest_post_query', 'se35728943_change_post_per_page', 10, 2 );

function se35728943_change_post_per_page( $args, $request ) {
    $max = max( (int) $request->get_param( 'per_page' ), 2000 );
    $args['posts_per_page'] = $max;
    return $args;
}
add_filter( 'wpseo_robots', 'yoast_seo_robots_remove_search' );
function yoast_seo_robots_remove_search( $robots ) {
  if ( is_search() || is_404() ) {
    return false;
  } else {
    return $robots;
  }
}

add_action('after_setup_theme', 'remove_admin_bar');
function remove_admin_bar() {
    if (!current_user_can('administrator') && !is_admin()) {
    show_admin_bar(false);
    }
}

register_nav_menus(
    array(
        'primary' => esc_html__( 'Primary menu', 'nhakhoadelia' ),
        'footer'  => esc_html__( 'Secondary menu', 'nhakhoadelia' ),
    )
);

class My_Walker_Nav_Menu extends Walker_Nav_Menu {
    // function start_lvl(&$output, $depth) {
        function start_lvl( &$output, $depth = 0, $args = array() ) {
        $indent = str_repeat("\t", $depth);
        $output .= "\n$indent<ul class=\"dropdown-menu\">\n";
    }
}

add_filter( 'nav_menu_css_class', 'special_nav_class', 10, 3 );
function special_nav_class( $classes, $item, $args ) {
    if ( 'primary' === $args->theme_location ) {
        // print_r($args);
        $classes[] = 'nav-item';
    }

    return $classes;
}


function delia_nav_menu_link_attributes( $atts, $item, $args, $depth ) {

	// Add [aria-haspopup] and [aria-expanded] to menu items that have children
	$item_has_children = in_array( 'menu-item-has-children', $item->classes );
    $atts['class'] = "nav-link";
	if ( $item_has_children ) {
		$atts['aria-expanded'] = 'false';
		$atts['data-bs-toggle'] = 'collapse';
        $atts['class'] = "nav-link dropdown-toggle";
	}

	return $atts;
}
add_filter( 'nav_menu_link_attributes', 'delia_nav_menu_link_attributes', 10, 4 );


/**
 * Remove category url
 */
// function remove_category( $string, $type )  {
//     if ( $type != 'single' && $type == 'category' && ( strpos( $string, 'category' ) !== false ) ) {
//         $url_without_category = str_replace( "/category/", "/", $string );
//         return trailingslashit( $url_without_category );
//     }
//     return $string;
// }
// add_filter( 'user_trailingslashit', 'remove_category', 100, 2);  

// Filter except length to 35 words.
// tn custom excerpt length
function tn_custom_excerpt_length( $length ) {
    return 28;
}
add_filter( 'excerpt_length', 'tn_custom_excerpt_length', 999 );

require_once ('inc/post-type.php');

require_once ('inc/taxonomy.php');