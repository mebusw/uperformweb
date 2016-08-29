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
<div id="content" class="wrapper blog">
<div class="inner-content">
<div class="left-section left-col trainning">
<div class="blog-list"><?php while ( have_posts() ) : the_post(); ?>
<h3 class="blog-title"><a href="<?php the_permalink() ?>" rel="bookmark"
	title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
<?php //the_excerpt(); ?> <?php the_content('详细介绍'); ?> 
<?php edit_post_link( __( '[Edit]', 'cyg' ), '<span class="edit-link">', '</span>' ); ?>
<span id="cat_tag"><?php the_category(', '); ?> -><?php the_tags('', ', ', ''); ?></span>
<?php endwhile; // End the loop. Whew. ?>
</div>
<div class="clear"></div>

<div class="inside-contact">
<p>内训咨询及获取任一课程详细信息：</p>
<p class="tel">Tel: 021-63809913</p>
<p class="email">Email: <a href="mailto:Service@ScrumChina.com">Service@ScrumChina.com</a></p>
</div>
</div>
<?php get_sidebar('blog');?>
<div class="clear"></div>
</div>
</div>
<!-- #content -->
<?php get_footer(); ?>
