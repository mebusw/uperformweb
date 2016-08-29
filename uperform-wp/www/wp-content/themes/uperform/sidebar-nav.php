<?php
/**
 * The Sidebar containing the nav widget areas.
 *
 * @package WordPress
 * @subpackage Uperform
 * @since Uperform 1.0
 */
?>

		<mobile><a id="bloglinks" href="<?php echo get_category_link(BLOG_CAT_ID);?>">博客首页</a></mobile>
		<div id="nav-search" class="widget-area right-col" role="complementary">
			<ul class="xoxo">
<?php
	/* When we call the dynamic_sidebar() function, it'll spit out
	 * the widgets for that widget area. If it instead returns false,
	 * then the sidebar simply doesn't exist, so we'll hard-code in
	 * some default sidebar stuff just in case.
	 */
	if ( ! dynamic_sidebar( 'nav-widget-area' ) ) : ?>

			
			<li id="search" class="widget-container widget_search">
				<?php get_search_form(); ?>
			</li>

		<?php endif; // end nav widget area ?>
			</ul>
		</div><!-- #nav-search .widget-area -->


