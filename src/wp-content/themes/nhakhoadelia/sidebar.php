<?php
/**
 * The sidebar containing the main widget area.
 *
 * @package delia
 */

if ( ! is_active_sidebar( 'sidebar' ) ) {
	return;
}
?>
<aside class="l-sidebar">
	<?php dynamic_sidebar( 'sidebar' ); ?>
</aside>
