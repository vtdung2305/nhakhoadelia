<?php 
/**
 * The Template for displaying archive pages
 *
 * @package WordPress
 * @subpackage delia
 */

get_header(); ?>

<div class="wrap archive-page">
	<div class="container p-flex p-container-sidebar">
		<main class="site-main">
			<section class="area-section">
				<?php if (have_posts()) : ?>
				<h2 class="heading-section"><?php single_term_title() ?></h2>
				<ul class="post-list post-list-cat row">

					<?php while (have_posts()) : the_post(); 

						get_template_part( 'template-parts/post/content', 'archive' );

					 endwhile; ?>
				</ul>
				<?php else :
					get_template_part( 'template-parts/post/content', 'none' );
				endif; ?>
			</section>
			<?php custom_pagination(); ?>
		</main><!-- #main -->
		<?php get_sidebar(); ?>
	</div><!-- #primary -->	
</div><!-- .wrap -->
<?php get_footer();
