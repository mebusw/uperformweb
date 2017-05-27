<?php get_header(); ?>
	<div class="container" style="padding-top: 150px;">
		<div class="row">
			<div class="col-md-12" role="main">
				<h1 class="page-title"><?php
					printf( __( '%s', 'uperform' ), '<span>' . single_cat_title( '', false ) . '</span>' );
				?></h1>
				<?php
				if ( function_exists('yoast_breadcrumb') ) {
				yoast_breadcrumb('
				<p id="breadcrumbs">','</p>
				');
				}
				?>
				
				<p id="breadcrumbs"><span xmlns:v="http://rdf.data-vocabulary.org/#"><span typeof="v:Breadcrumb"><a href="http://www.uperform.cn/" rel="v:url" property="v:title">Home</a> » <span rel="v:child" typeof="v:Breadcrumb"><a href="http://www.uperform.cn/category/courses" rel="v:url" property="v:title">培训课程</a> » <span class="breadcrumb_last">公开班时间表</span></span></span></span></p>
								
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
						<p>	UPerform自2007年开始在中国大陆地区专注于提供Scrum和敏捷方面的公开课，包括Scrum联盟认证和非认证课程，目前是大陆及台湾地区开设Scrum认证课程规模最大的机构，深受广大学员和500强企业的认可和关注。定期在北京、上海、深圳等主要城市滚动提供CSM、CSPO、CSD、进阶教练等核心应用课程。
						</p>
						<div>
							<a class="btn btn-warning btn-lg" href="https://jinshuju.net/f/RBPJVI"  target="_blank">我要报名公开班</a>
							<span class="left-section" style="font-size: ">找不到你的城市？请致电<a href="tel:021-34753688">021-34753688</a></span>
						</div>
					</div>
            <div class="right-col right-section course-list container">
                <h2>近期敏捷课程公开班</h2>
                <?php if (have_posts()) : ?>
                <ul class="row">
                <?php $special_query = new WP_Query('category_name=special&showposts=8');
                while ($special_query->have_posts()) : $special_query->the_post();
                $do_not_duplicate = $post->ID; ?>
                    <li class="col-md-4" <?php post_class() ?> id="post-<?php the_ID(); ?>">
                        <div>
                            <h4 class="course-title width-auto"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h4>
                            <span class="course-title-bg"></span>
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
                  <?php endwhile; ?>
                  </ul>   
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
		</div><!-- #content -->
	</div><!-- #container -->
<?php get_footer(); ?>
