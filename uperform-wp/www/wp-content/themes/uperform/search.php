<?php
/**
 * The template for displaying Search Results pages.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */

get_header(); ?>

		<div class="container" style="padding-top: 150px;">
			<div class="row" role="main">
				<h1 class="page-title"><?php printf( __( '搜索结果: %s', 'twentyten' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
			</div>
		</div>
		<div id="content" class="container">
			<div class="row left-col left-section">
<?php if ( have_posts() ) : ?>
				<?php
				/* Run the loop for the search to output the results.
				 * If you want to overload this in a child theme then include a file
				 * called loop-search.php and that will be used instead.
				 */
				 get_template_part( 'loop', 'search' );
				?>
<?php else : ?>
				<div id="post-0" class="post no-results not-found">
					<div class="entry-content">
						<p><?php _e( '抱歉，您搜索的关键字没有相应的内容，请尝试用别的关键字再搜索', 'twentyten' ); ?></p>
						<?php get_search_form(); ?>
					</div><!-- .entry-content -->
				</div><!-- #post-0 -->
<?php endif; ?>
			</div>
				<div class="right-col right-section course-list search_results">
				<h2>近期敏捷课程公开班</h2>
				<?php if (have_posts()) : ?>
  <?php $special_query = new WP_Query('category_name=special&showposts=4');
  while ($special_query->have_posts()) : $special_query->the_post();
  $do_not_duplicate = $post->ID; ?>
    <!-- Do stuff... -->
				<ul>
					<li <?php post_class() ?> id="post-<?php the_ID(); ?>">
						<div>
							<h3 class="course-title width-auto"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3><span class="course-title-bg"></span>
							<div class="clear"></div>
						</div>
						<div class="entry">
							<?php 
global $more;    // Declare global $more (before the loop).
$more = 0;       // Set (inside the loop) to display content above the more tag.
the_content("详细介绍");
?>
						</div>
					</li>
				</ul>	
  <?php endwhile; ?>
	<?php else : ?>

		<h2 class="center">Not Found</h2>
		<p class="center">Sorry, but you are looking for something that isn't here.</p>
		<?php get_search_form(); ?>

	<?php endif; ?>
	<div class="more">
					<a class="faq-link" href="/faq#q1">哪个课程适合我?</a>
					<a class="more-btn" href="/category/courses/class">所有公开班</a><span class="more-btn-bg"></span>
					<div class="clear"></div>
				</div>
			</div>	
			<div class="clear"></div>
			</div>
		</div><!-- #content -->

<?php get_footer(); ?>
