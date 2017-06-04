<?php get_header(); ?>
	<div class="container" style="padding-top: 150px;">
		<div class="row">
			<div class="col-md-12" role="main">
				<h1 class="page-title"><?php
					// printf( __( '%s', 'uperform' ), '<span>' . single_cat_title( '', false ) . '</span>' );
				?>Scrum认证培训敏捷开发课程</h1>
				<?php
				if ( function_exists('yoast_breadcrumb') ) {
				yoast_breadcrumb('
				<p id="breadcrumbs">','</p>
				');
				}
				?>
				
				<p id="breadcrumbs"><span xmlns:v="http://rdf.data-vocabulary.org/#"><span typeof="v:Breadcrumb"><a href="http://www.uperform.cn/" rel="v:url" property="v:title">Home</a> » <span rel="v:child" typeof="v:Breadcrumb"><a href="http://www.uperform.cn/category/courses" rel="v:url" property="v:title">敏捷培训Scrum认证课程</a> » <span class="breadcrumb_last">Scrum培训认证公开班时间表</span></span></span></span></p>
								
				<?php /* How to display in the courses category. */ ?>
				<?php if ( is_category( _x('courses', 'courses category slug', 'uperform') ) ) : ?>
				
				<?php /* How to display in the consulting category. */ ?>
				<?php elseif ( is_category( _x('consulting', 'consulting category slug', 'uperform') ) ) : ?>
				
				<?php endif; // This was the if statement that broke the #top into two parts based on categories. ?>
			</div><!-- .wrapper -->
		</div><!-- .slider -->

		<div id="content" class="row">
			<div class="sub-nav">
				<?php wp_nav_menu( array( 'container_class' => 'sub-menu', 'theme_location' => 'secondary_courses' ) ); ?><!-- .sub_nav -->
				<div class="clear"></div>
			</div>
			<div class="inner-content">
				<div class="left-col">
					<div class="intro left-section class-intro">
						<p>	定期在北京、上海、深圳等主要城市滚动提供CSM认证、CSPO认证、CSD认证、进阶教练CSP学分课等核心应用课程。UPerform敏捷学院自2007年开始在中国大陆地区专注于提供Scrum和敏捷方面的公开课，包括Scrum联盟认证和非认证课程，目前是大陆及台湾地区开设Scrum认证课程规模最大的机构，深受广大学员和500强企业的认可和关注。
						</p>
						<div>
							<a class="btn btn-warning btn-lg" href="https://jinshuju.net/f/RBPJVI"  target="_blank">我要报名Scrum培训认证公开班</a>
							<span class="left-section" style="font-size: ">找不到你的城市？请致电<a href="tel:021-34753688">021-34753688</a></span>
						</div>
					</div>
					<div class="course-list class-list container">
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
	</div><!-- #container -->
<?php get_footer(); ?>
