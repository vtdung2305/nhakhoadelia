<?php
/**
 * The sidebar containing the main widget area.
 *
 * @package delia
 */

if ( ! is_active_sidebar( 'sidebar' ) ) {
	return;
}
?>
<aside class="l-sidebar">
	<?php //dynamic_sidebar( 'sidebar' ); ?>
	<div class="p-sidebar">
		<div class="p-sidebar_block">
			<h2 class="p-sidebar_ttl">Liên hệ để được tư vấn</h2>
			<div class="p-sidebar_banner">
				<img src="<?php echo get_template_directory_uri();?>/assets/images/banner-contact.webp" alt="">
			</div>
		</div>

		<div class="p-sidebar_block">
			<h2 class="p-sidebar_ttl">Bài viết cùng chủ đề</h2>
			<div class="p-sidebar_post">
				<ul class="p-sidebar_postList">
					<?php get_template_part( 'template-parts/post/content', 'sidebar' ); ?>
				</ul>
			</div>
		</div>
	</div>
</aside>
