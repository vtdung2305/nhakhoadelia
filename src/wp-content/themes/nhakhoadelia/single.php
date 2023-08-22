<?php
/**
 * The Template for displaying signle post
 *
 * @package WordPress
 * @subpackage delia
 */

get_header();

?>
	<div class="wrap single-post">
		<div class="container p-flex p-container-sidebar ">
			<main class="site-main">
				<section class="p-content_page_single">
					<?php if (have_posts()) : ?>

						<?php while (have_posts()) : the_post();

							get_template_part( 'template-parts/post/content', 'single' );

						 endwhile; ?>

					<?php else :
						get_template_part( 'content', 'none' );
					endif; ?>
				</section>
				<?php if ( function_exists( 'echo_crp' ) ) { echo_crp(); } ?>
			</main><!-- #main -->
			<?php get_sidebar(); ?>
		</div>
	</div><!-- #primary -->

<?php
get_footer(); ?>
