<?php 
/**
 * The Template for displaying pages
 *
 * @package WordPress
 * @subpackage delia
 */
get_header();
 ?>

<div class="wrap single-page">
    <div class="container">
    
        <main class="site-main">

	    <?php if (have_posts()) :
				while (have_posts()) : the_post();
			?>
			<div class="page-heading"><h2 class="heading-02"><?php the_title(); ?></h2></div>
			<div class="article-body">
				<?php the_content(); ?>
			</div>
		
		<?php endwhile; ?>
		<?php else :
			get_template_part( 'template-parts/post/content', 'none' );
        endif; ?>

        </main>
	</div>	
</div>

<?php
get_footer(); ?>
