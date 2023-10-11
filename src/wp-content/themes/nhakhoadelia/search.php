<?php
/**
 * The Template for displaying archive pages
 *
 * @package WordPress
 * @subpackage delia
 */


get_header();

?>

<div class="wrap search-page">
    <div class="container p-flex p-container-fullwidth">
        <main class="site-main">
            <section class="search-section">
                <h2 class="heading-section">Kết quả tìm kiếm</h2>
                <?php if (have_posts()) : ?>
                <ul class="post-list post-list-cat row">

                    <?php while (have_posts()) : the_post();

                        get_template_part( 'template-parts/post/content', 'archive' );

                     endwhile; ?>
                </ul>
                <?php else :
                echo "<div class='no-post'><p>Không tìm thấy kết quả, thử cụm từ tìm kiếm khác.</p></div>";
                endif; ?>
            </section>
            <?php bootstrap_pagination(); ?>
        </main><!-- #main -->
    </div><!-- #primary -->
</div><!-- .wrap -->
<?php
get_footer(); ?>
