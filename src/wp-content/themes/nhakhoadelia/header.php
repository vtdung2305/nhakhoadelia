<?php
/**
 * The Header for our theme
 *
 * @package WordPress
 * @subpackage delia
 */
?><!doctype html>
<!--[if IE 8]> <html class="no-js ie8" lang="ja"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="ja"> <!--<![endif]-->
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title><?php if(is_front_page() || is_home()){
            echo get_bloginfo('name');
        } else {
            echo wp_title( '|', true, 'right');
        } ?></title>

    <?php if ( is_single()): ?>
    <?php if ($post->post_excerpt){ ?>
    <meta name="description" content="<?php echo $post->post_excerpt; ?>" />
    <?php } else {
            $summary = strip_tags($post->post_content);
            $summary = str_replace("\n", "", $summary);
            $summary = mb_substr($summary, 0, 120). "…"; ?>
    <meta name="description" content="<?php echo $summary; ?>" />
    <?php } ?>
    <?php elseif ( is_home() || is_front_page() ): ?>
    <meta name="description" content="<?php bloginfo('description'); ?>" />
    <?php elseif ( is_category() ): ?>
    <meta name="description" content="<?php echo category_description(); ?>" />
    <?php elseif ( is_tag() ): ?>
    <meta name="description" content="<?php echo tag_description(); ?>" />
    <?php else: ?>
    <meta name="description" content="<?php bloginfo('name'); ?>" />
    <?php endif; ?>

    <!-- ↓スマートフォン用のviewport -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- ↑スマートフォン用のviewport -->

    <meta name="theme-color" content="#cc0000" />
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo get_template_directory_uri(); ?>/assets/images/common/favicon.png">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/assets/images/common/favicon.png">
    <?php wp_head(); ?>
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-N479GN9');</script>
    <!-- End Google Tag Manager -->
  </head>
  <body <?php body_class(); ?>>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-N479GN9"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <div id="app" class="page">

    <?php get_template_part( 'template-parts/header/body' ); ?>
