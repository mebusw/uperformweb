<?php get_header(); ?>

        <div class="container" style="padding-top: 150px;">
            <div class="row" role="main" >
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
                
                <?php /* How to display in the courses category. */ ?>
                <?php if ( is_category( _x('courses', 'courses category slug', 'uperform') ) ) : ?>
                
                <?php /* How to display in the consulting category. */ ?>
                <?php elseif ( is_category( _x('consulting', 'consulting category slug', 'uperform') ) ) : ?>
                
                <?php endif; // This was the if statement that broke the #top into two parts based on categories. ?>
            </div><!-- .wrapper -->
        </div><!-- .slider -->
        <div id="content" class="container">
            <div class="row">
                <?php wp_nav_menu( array( 'container_class' => 'sub-menu', 'theme_location' => 'secondary_courses' ) ); ?><!-- .sub_nav -->
                <div class="clear"></div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <h2 class="sub-nav-title">公开班时间表</h2>
                    <p> 我们自2007年开始在中国大陆地区专注于提供Scrum和敏捷方面的公开课，包括Scrum联盟认证和非认证课程。深受广大学员和500强企业的认可和关注。目前我们定期在北京、上海及各主要城市提供CSM、CSPO、CSD、TDD等核心应用课程，帮助培养敏捷团队服务式领导、创建伟大产品及项目的需求负责人、以及高绩效敏捷开发团队成员。
                    </p>
                    <div>
                        <a class="btn btn-warning btn-lg" href="https://jinshuju.net/f/RBPJVI"  target="_blank">我要报名公开班</a>
                    </div>
                    <div class="more">
                        <a class="more-btn" href="/category/courses/class">查看所有公开班</a><span class="more-btn-bg"></span>
                        <div class="clear"></div>
                    </div>
                </div>
                <div class="col-md-4">
                    <h2 class="sub-nav-title">企业内训</h2>
                    <p> 我们已经有幸为多家国际及国内知名软件企业和IT组织提供内训服务。客户详情请访问我们的客户页面。我们的培训从Scrum框架和在企业背景下的精益原则开始，包括可信任的敏捷项目管理，敏捷需求，敏捷技术实践和敏捷领导力及团队，并具备课程定制的能力和丰富经验。若您有任何内训方面的需要或疑问，请随时联系我们。
                    </p>
                    <div class="more">
                        <a class="more-btn" href="/category/courses/trainning">查看所有企业内训</a><span class="more-btn-bg"></span>
                        <div class="clear"></div>
                    </div>
                </div>
                <div class="col-md-4">
                    <h2 class="sub-nav-title">社区活动信息</h2>
                    <p> 我们一直投身于建立和发展健康良性、有意义的敏捷社区的事业中，并对各个地方的社区活动提供不遗余力的支持。过去数年，我们积极赞助或者参与组织了Scrum Gathering、QCon、Agile China、Agile Tour、及Scrum Shanghai User Group(Local Agile Gathering)，Hangzhou Scrum Forum等活动。我们的敏捷顾问也经常受邀提供演讲或者承担话题支持任务。
                    </p>
                    <div class="more">
                        <a class="more-btn" href="/category/courses/activities">查看所有社区活动</a><span class="more-btn-bg"></span>
                        <div class="clear"></div>
                    </div>
                </div>
                <div class="clear"></div>
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
            
<?php get_footer(); ?>
