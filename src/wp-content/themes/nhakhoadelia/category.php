<?php 
/**
 * Template Name: Category page
 *
 * @package WordPress
 * @subpackage delia
 */

get_header(); ?>

<main class="site-main">
	<div class="p-visual">
		<div class="d-flex align-items-center p-visual_inner">
			<div class="container text-center">
				<h2><?php single_term_title() ?></h2>
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

							get_template_part( 'template-parts/post/content', 'archive' );

							endwhile; ?>
						</div>
					<?php else :
						get_template_part( 'template-parts/post/content', 'none' );
					endif; ?>
				</div>
				<div class="col-md-4">
					<?php get_sidebar(); ?>
				</div>
			</div>
		</div>
	</div>
</main>

<?php get_footer();
