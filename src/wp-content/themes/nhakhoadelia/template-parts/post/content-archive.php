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

if(has_post_thumbnail()) {
    $img = get_the_post_thumbnail_url($post->ID, 'large');
} else {
    $img = get_template_directory_uri(). "/assets/images/no-image.jpg";
}
?>

    <li class="col-pc-2">
        <div class="content">
            <div class="post-tags">
                <?php if($taxs):
                    foreach ($taxs as $tax) {
                    $tax_link = get_term_link($tax->term_id);
                    if($i < 3) {
                ?>
                <a href="<?php echo $tax_link;?>"><span class="post-tag"><?php echo $tax->name; ?></span></a>
                <?php }
                    $i++;
                } endif; ?>
            </div>
            <a href="<?php echo get_permalink()?>">
                <div class="img-center" style="background-image: url(<?php echo $img ?>)"></div>
            </a>
            <?php if($cats): ?>
            <ul class="navi_cat">
                <?php
                $j = 1;
                foreach ($cats as $cat) {
                    $cat_link = get_term_link($cat->term_id);
                    if($category[0]->slug == "area" && $j < 4) {
                ?>
                    <li><a href="<?php echo $cat_link;?>"><?php echo $cat->name; ?></a></li>
                    <?php } elseif($category[0]->slug == "lifestyle" && $j > 1 && $j < 5) { ?>
                    <li><a href="<?php echo $cat_link;?>"><?php echo $cat->name; ?></a></li>
            <?php    }
                    $j++;
                } ?>
            </ul>
            <?php endif; ?>
            <h3 class="title"><a href="<?php echo get_permalink()?>"><?php echo the_title();?></a></h3>
            <p class="date"><?php echo get_the_date();?></p>
        </div>
    </li>
