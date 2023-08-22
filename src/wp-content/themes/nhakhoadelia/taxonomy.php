<?php 
/**
 * The main template file
 *
 * @package WordPress
 * @subpackage delia
 */

get_header(); ?>

<div id="primary" class="container">
	<div class="p-flex p-container-sidebar">
		<main class="site-main">
			<section class="area-section">
				<h2 class="heading-section"><?php single_term_title() ?></h2>
				<?php if (have_posts()) : ?>
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
