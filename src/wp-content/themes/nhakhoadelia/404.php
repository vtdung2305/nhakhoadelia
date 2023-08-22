<?php 
/**
 * The Template for displaying all archive pages
 *
 * @package WordPress
 * @subpackage delia
 */


get_header(); ?>

<div class="wrap error-page">
	<div class="container">
		<main class="site-main">
			<section class="p-error">
				<div class="p-error_content">
					<h3><span>404</span> File not found</h3>
					<p>The page you’re looking for can’t be found.</p>
					<img src="<?php echo get_template_directory_uri();?>/assets/images/page_not_found.png" alt="">
					<a href="/" class="c-button">Top page</a>
				</div>
			</section>
		</main>
	</div>
</div>
<?php
get_footer(); ?>

