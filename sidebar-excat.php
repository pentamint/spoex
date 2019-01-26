<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package SPOEX
 */

if ( ! is_active_sidebar('sidebar-ex-cat') ) {
	return;
}
?>

<aside id="secondary" class="widget-area" role="complementary">
	<?php dynamic_sidebar( 'sidebar-ex-cat' ); ?>
</aside><!-- #secondary -->
