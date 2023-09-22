<?php
/**
 * The template for displaying a "No posts found" message
 *
 * @package WordPress
 * @subpackage delia
 */

if (has_post_thumbnail()) {
  $img = get_the_post_thumbnail_url($post->ID, 'full');
} else {
  $img = get_template_directory_uri(). "/assets/images/common/no-image.jpeg";
}
?>

<li class="row align-items-center py-2" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <div class="col-4 overflow-hidden">
    <a href="<?php echo get_permalink(); ?>">
      <img src="<?php echo $img; ?>" width="600" height="300" class="img-fluid c-zoom" alt="<?php echo get_the_title(); ?>">
    </a>
  </div>
  <div class="col-8">
    <a href="<?php echo get_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a>
  </div>
</li>

