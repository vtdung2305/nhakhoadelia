<?php
/**
 * Template part for Attachement Files
 *
 * @package delia
 * @since 1.0
 * @version 1.0
 */

get_header();
$attachment_id = get_the_ID();
$parent_post_id = wp_get_post_parent_id($attachment_id);

$taxonomy_names = get_post_taxonomies($parent_post_id);
$taxs = wp_get_post_terms($parent_post_id, $taxonomy_names);

$category = get_the_category($parent_post_id);
$cat_id = $category[0]->cat_ID;
$cat_name = $category[0]->name;

$date_format = get_option( 'date_format' );
?>

<div class="wrap archive-page">
	<div class="container p-flex p-container-sidebar">
		<main class="site-main">
			<section class="p-content_page_single">
				<article id="post-<?php echo $parent_post_id; ?>" <?php post_class(); ?>>
	                <div class="entry-outer" id="attach-gallery">
	                	<div class="article-head">
							<div class="post-meta">
								<p class="post-cat"><a href="<?php echo get_category_link($cat_id);?>"><i class="c-icon c-icon-cat"></i><?php echo $cat_name;?></a></p>
								<h1 class="post-title"><a href="<?php echo get_permalink($parent_post_id); ?>"><?php echo get_the_title($parent_post_id); ?></a></h1>
								<p class="post-date"><?php echo get_the_date($date_format, $parent_post_id);?></p>
							</div>

							<?php if($taxs): ?>
							<ul class="post-tags">
								<?php
					                foreach ($taxs as $tax) {
					                    $tax_link = get_term_link($tax);
					            ?>
					                <li class="p-tags_tag"><a href="<?php echo $tax_link;?>"><?php echo $tax->name; ?></a></li>
					                <?php  } ?>
					        </ul>
					    	<?php endif; ?>

						</div>
        			<?php
	                    $args = array(
	                		'numberposts' => -1,
	                		'order' => 'ASC',
	                        'orderby' => 'post_title',
	                		'post_mime_type' => 'image',
	                		'post_parent' => $parent_post_id,
	                		'post_status' => null,
	                		'post_type' => 'attachment',
	                	);
	                    $attachments = get_children( $args, 'ARRAY_A' );
                    ?>

	                <!-- Swiper -->
					<?php
						// Get index of This page's image -> JS function attachmentSlider
						$count = 0; $num = 0;
						foreach( $attachments as $key => $attachment ) :

							if ($key == $attachment_id) {
								$num = $count;
							}
							if($key == $attachment_id) {
								$post_num = count($attachments);
								if($count == 0) {
									$prev_post = current(array_slice($attachments, $post_num - 1, 1, true));
								} else {
									$prev_post = current(array_slice($attachments, $count - 1, 1, true));
								}
								if($count == $post_num - 1) {
									$next_post = current(array_slice($attachments, 0, 1, true));
								} else {
									$next_post = current(array_slice($attachments, $count + 1, 1, true));
								}
							}
							if($key == $attachment_id) :
								$aid = $key;
								$src = wp_get_attachment_image_src($aid, 'full');
								$alt = get_post_meta($aid, '_wp_attachment_image_alt', true);
								$wp_rec = get_post( $aid );
								$wp_caption = $wp_rec->post_excerpt;
							?>
							<div class="main-image">
								<img src="<?= $src[0]; ?>" alt="<?= $alt; ?>">
								<p class="image-caption"><?= $wp_caption; ?></p>
								<a href="<?= get_permalink($next_post['ID']); ?>"><div class="navi-button-next"></div></a>
								<a href="<?= get_permalink($prev_post['ID']); ?>"><div class="navi-button-prev"></div></a>
							</div>
						<?php endif; ?>
						<?php
							$count++;
						endforeach; ?>

                        <div class="gallery-thumbs">
                            <div class="gallery-wrapper">
								<?php 
									$thumbnum = 0;
									foreach( $attachments as $attachment ) :
										$class = "";
										$aid = $attachment['ID'];
										$src = wp_get_attachment_image_src($aid, 'medium');
										if ($thumbnum == $num) { $class = " gallery-image-active"; }
								?>
									<a class="gallery-list" href="<?= get_permalink($aid); ?>">
										<div class="gallery-image<?= $class; ?>" style="background-image:url(<?= $src[0]; ?>)"></div>
									</a>
								<?php $thumbnum++;
									endforeach; ?>
                            </div>
                        </div>
                        <div class="b-readmore">
	                        <a class="read-more" href="<?php echo get_permalink($parent_post_id); ?>"><?php _e('Quay trở lại bài viết'); ?></a>
	                    </div>
	                </div>
	            </article>
			</section>
		</main><!-- #main -->
		<?php get_sidebar(); ?>
	</div>
</div><!-- #primary -->

<?php get_footer();
