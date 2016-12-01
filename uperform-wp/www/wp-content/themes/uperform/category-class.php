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
				<div class="left-col">
					<div class="intro left-section class-intro">
						<p>	我们自2007年开始在中国大陆地区专注于提供Scrum和敏捷方面的公开课，包括Scrum联盟认证和非认证课程。深受广大学员和500强企业的认可和关注。目前我们定期在北京、上海及各主要城市提供CSM、CSPO、CSD、TDD等核心应用课程，帮助培养敏捷团队服务式领导、创建伟大产品及项目的需求负责人、以及高绩效敏捷开发团队成员。 
						</p>
						<div>
							<a class="btn btn-warning" href="https://jinshuju.net/f/RBPJVI">我要报名公开版</a>
						</div>
					</div>
					<div class="course-list class-list">
						<h2>敏捷课程表</h2>
						<?php
						$category_description = category_description();
						if ( ! empty( $category_description ) )
						echo '<div class="archive-meta">' . $category_description . '</div>';

						/* Run the loop for the category page to output the posts.
						* If you want to overload this in a child theme then include a file
						* called loop-category.php and that will be used instead.
						*/
						get_template_part( 'loop', 'category' );
						?>
					</div>
					<div class="clear"></div>
				</div>
				<div class="clear"></div>
			</div>
		</div><!-- #content -->
			
<?php get_footer(); ?>
