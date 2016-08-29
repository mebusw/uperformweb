<?php
/**
 * The template for displaying Category Archive pages.
 *
 * @package WordPress
 * @subpackage Uperform
 * @since Uperform 1.0
 */
get_header();
$cat_id= get_blog_cat_id();
?>
<?php if($cat_id==BLOG_CAT_ID){
	get_template_part( 'loop', 'blog' );
}else{?>
<div class="slider">
<div class="wrapper" role="main">
<h1 class="page-title"><?php
printf( __( '%s', 'uperform' ), '<span>' . single_cat_title( '', false ) . '</span>' );
?></h1>

<?php /* How to display in the courses category. */ ?> <?php if ( is_category( _x('courses', 'courses category slug', 'uperform') ) ) : ?>
<div class="sub-nave"><?php wp_nav_menu( array( 'container_class' => 'sub_menu', 'theme_location' => 'secondary_courses' ) ); ?>
</div>
<!--sub nave--> <?php /* How to display in the consulting category. */ ?>
<?php elseif ( is_category( _x('consulting', 'consulting category slug', 'uperform') ) ) : ?>
<div class="sub-nave"><?php wp_nav_menu( array( 'container_class' => 'sub_menu', 'theme_location' => 'secondary_consulting' ) ); ?>
</div>
<!--sub nave--> <?php endif; // This was the if statement that broke the #top into two parts based on categories. ?>
</div>
<!-- .wrapper --></div>
<!-- .slider -->
<div id="content" class="wrapper">
<div class="course-list"><?php
$category_description = category_description();
if ( ! empty( $category_description ) )
echo '<div class="archive-meta">' . $category_description . '</div>';
/* Run the loop for the category page to output the posts.
 * If you want to overload this in a child theme then include a file
 * called loop-category.php and that will be used instead.
 */
get_template_part( 'loop', 'category' );
?></div>
<div class="clear"></div>
</div>
<!-- #content -->
<?php }?>
<?php get_footer(); ?>