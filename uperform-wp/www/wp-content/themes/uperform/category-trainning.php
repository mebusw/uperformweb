<?php
/**
 * The template for displaying Category Archive pages.
 *
 * @package WordPress
 * @subpackage Uperform
 * @since Uperform 1.0
 */

get_header(); ?>

		<div class="slider">
			<div class="wrapper" role="main">
				<h1 class="page-title"><?php
					printf( __( '%s', 'uperform' ), '<span>' . single_cat_title( '', false ) . '</span>' );
				?></h1>
				
				<?php /* How to display in the courses category. */ ?>
				<?php if ( is_category( _x('courses', 'courses category slug', 'uperform') ) ) : ?>
				
				<?php /* How to display in the consulting category. */ ?>
				<?php elseif ( is_category( _x('consulting', 'consulting category slug', 'uperform') ) ) : ?>
				
				<?php endif; // This was the if statement that broke the #top into two parts based on categories. ?>
			</div><!-- .wrapper -->
		</div><!-- .slider -->
		<div id="content" class="wrapper">
			<div class="sub-nav">
				<?php wp_nav_menu( array( 'container_class' => 'sub-menu', 'theme_location' => 'secondary_courses' ) ); ?><!-- .sub_nav -->
				<div class="clear"></div>
			</div>
			<div class="inner-content">
				<div class="left-section left-col trainning">
					<div class="course-list">
						<h2>企业内部培训有下列主要课程（我们也乐意提供相关定制培训）:</h2>
						<?php
						$category_description = category_description();
						if ( ! empty( $category_description ) )
						echo '<div class="archive-meta">' . $category_description . '</div>';

						/* Run the loop for the category page to output the posts.
						* If you want to overload this in a child theme then include a file
						* called loop-category.php and that will be used instead.
						*/
						get_template_part( 'loop', 'trainning' );
						?>
					</div>
					<div class="clear"></div>
					<div class="inside-contact">
						<p>内训咨询及获取任一课程详细信息：</p>
						<p class="tel">Tel: 021-63809913</p>
						<p class="email">Email: <a href="mailto:Service@ScrumChina.com">Service@ScrumChina.com</a></p>
					</div>
				</div>
				<div class="right-col right-section course-list">
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