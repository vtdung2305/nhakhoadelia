<?php
/**
 * The template for displaying content single
 *
 * @package WordPress
 * @subpackage delia
 */


$taxonomy_names = get_post_taxonomies();
$taxs = wp_get_post_terms(get_the_ID(), $taxonomy_names);

$category = get_the_category();
$cat_id = $category[0]->cat_ID;
$cat_name = $category[0]->name;

?>
	<div class="p-post">
		<h2 class="p-post_title"><?php the_title(); ?></h2>
		<div class="p-post_meta d-flex">
			<span class="p-post_date"><i class="fa-solid fa-calendar-days"></i><?php echo get_the_date();?></span>
			<span class="p-post_user"><i class="fa-solid fa-user"></i><?php echo get_the_author();?></span>
		</div>
	</div>

	<div class="post-img"><?php //echo delia_get_the_main_image( get_the_ID() ); ?></div>

	<div class="p-post_content">
		<?php
			if ( is_single() ) {
				global $more;
				if (isset($_GET['more_flag'])) {
					$flag = $_GET['more_flag'];
					if ($flag === 'true') {
						$more = 1;
					} else {
						$more = 0;
					}
				} else {
					$more = 0;
				}
			}
			the_content( 'Đọc tiếp', FALSE );

		?>
	</div>

	<?php if($taxs): ?>
		<ul class="p-post_tags">
			<?php
				foreach ($taxs as $tax) {
				$tax_link = get_term_link($tax);
			?>
				<li class="p-tags_tag"><a href="<?php echo $tax_link;?>"><?php echo $tax->name; ?></a></li>
			<?php } ?>
		</ul>
	<?php endif; ?>
	