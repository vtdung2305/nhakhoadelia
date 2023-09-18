<?php
/**
 * The default template for displaying content archive
 *
 * @package WordPress
 * @subpackage delia
 */

$category = get_the_category();

if($category[0]->slug == "area") {
    $taxs = wp_get_object_terms($post->ID, 'area_tag02');
    $i = 1;
} elseif ($category[0]->slug == "spice_life") {
    $taxs = wp_get_object_terms($post->ID, 'culture');
} elseif ($category[0]->slug == "lifestyle") {
    $taxs = wp_get_object_terms($post->ID, 'life_style');
    $i = 2;
}

$cats = wp_get_object_terms($post->ID, 'life_style');

if (has_post_thumbnail()) {
    $img = get_the_post_thumbnail_url($post->ID, 'full');
} else {
    $img = get_template_directory_uri(). "/assets/images/common/no-image.jpeg";
}
?>

    <div class="p-postList_item">
        <div class="row">
            <figure class="figure col-sm-6 col-md-5 c-postThumbnail">
                <a href="<?php echo get_permalink()?>">
                    <img src="<?php echo $img ?>" class="figure-img img-fluid rounded" alt="<?php the_title();?>">
                </a>
            </figure>
            <div class="p-postList_info col-sm-6 col-md-7 d-flex flex-wrap">
                <h3 class="p-postList_title">
                    <a href="<?php echo get_permalink()?>"><?php the_title();?></a>
                </h3>
                <div class="p-postList_meta">
                    <span><?php echo get_the_date();?></span>
                </div>
                <div class="p-postList_excerpt">
                    <p><?php the_excerpt(); ?></p>
                </div>

                <a href="<?php echo get_permalink()?>" class="c-btnReadmore">Xem thêm</a>
            </div>
        </div>
    </div>
