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

  </head>
  <body <?php body_class(); ?>>
    <div id="app" class="page">

    <?php get_template_part( 'template-parts/header/body' ); ?>
