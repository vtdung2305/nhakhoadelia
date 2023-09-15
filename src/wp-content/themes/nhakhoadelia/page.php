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
