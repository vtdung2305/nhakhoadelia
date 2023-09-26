<?php 
/**
 * The Template for displaying pages
 *
 * @package WordPress
 * @subpackage delia
 */
get_header();
 ?>

<main class="site-main">
	<div class="c-visual">
		<div class="c-visual_inner h-100 d-flex align-items-center justify-content-center">
			<h2><?php the_title(); ?></h2>
		</div>
	</div>

	<div class="p-visual">
		<div class="p-visual_action only-sp">
			<div class="p-visual_btn d-flex align-items-center justify-content-center">
				<a href="<?php echo get_site_url() ?>/dat-lich/" class="btn-booking">Đặt lịch</a>
				<a href="tel:+84%20763296666" class="btn-contact">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/contact.png" alt="liên hệ">
				</a>
			</div>
		</div>
	</div>

	<div class="l-content">
		<div class="container-lg">
			<div class="row">
				<div class="col-md-8">
					<?php if (have_posts()) : ?>
						<div class="p-postList">
							<?php while (have_posts()) : the_post(); 

								get_template_part( 'template-parts/page/content', 'single' );

							endwhile; ?>
						</div>
					<?php else :
						get_template_part( 'template-parts/page/content', 'none' );
					endif; ?>
				</div>
				<div class="col-md-4">
					<?php get_sidebar(); ?>
				</div>
			</div>
		</div>
	</div>
</main>

<?php get_footer(); ?>
