<?php
/**
 * The Template for displaying signle post
 *
 * @package WordPress
 * @subpackage delia
 */

get_header(); ?>

<main class="site-main">
	<div class="c-visual">
		<div class="c-visual_inner h-100 d-flex align-items-center justify-content-center">
			<h2>Tin Tức</h2>
			
		</div>
	</div>

	<div class="l-content">
		<div class="container-lg">
			<div class="row">
				<div class="col-md-8">
					<?php if (have_posts()) : ?>
						<div class="p-postList">
							<?php while (have_posts()) : the_post(); 
							$post_name = get_post_type( get_the_ID() ) === 'post' ? 'single' : 'service';

							get_template_part( 'template-parts/post/content', $post_name );

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

<?php get_footer(); ?>
