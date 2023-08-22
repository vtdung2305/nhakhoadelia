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
	<div class="article-head">
		<div class="post-meta">
			<p class="post-cat"><a href="<?php echo get_category_link($cat_id);?>"><i class="c-icon c-icon-cat"></i><?php echo $cat_name;?></a></p>
			<h1 class="post-title"><?php the_title(); ?></h1>
			<p class="post-date"><?php echo get_the_date();?></p>
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

	<div class="post-img"><?php //echo delia_get_the_main_image( get_the_ID() ); ?></div>

	<div class="article-body">
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
	