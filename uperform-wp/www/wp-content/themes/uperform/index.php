<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Uperform
 * @since Uperform 1.0
 */

get_header(); ?>
        
        <div class="slider">
            <div class="wrapper" role="main">

                <div class="slider-content content_1" style="width:auto;margin:0px;">
                    <h2>让蜕变发生，催化你的组织变革</h2>
                    <!-- <p class="core-value">开放思维 乐活乐工 勇敢专注 敏捷共赢</p> -->
                    <p>
                        <a class="focus-btn" href="/about">关于优普丰</a>
                    </p>
                </div>

                <ul id="slider1">
                    <li>
                        <div class="slider-content content_1">
                            <h2>您的敏捷及项目绩效伙伴</h2>
                            <p>我们的价值观：</p>
                            <p class="core-value">开放思维 乐活乐工 勇敢专注 敏捷共赢</p>
                            <a class="focus-btn" href="/about">关于优普丰</a>
                        </div>
                    </li>
                    <li>
                        <div class="slider-content content_2">
                            <h2>Scrum及敏捷课程</h2>
                            <p>我们为那些想改善软件开发和系统项目成果的团队、组织与个人提供最为全面的Scrum及敏捷相关培训，包括公开班及内训，认证及非认证，管理类及技术类。</p>
                            <a class="focus-btn" href="/category/courses/class">公开课信息</a>
                        </div>
                    </li>
                    <li>
                        <div class="slider-content content_3">
                            <h2>敏捷教练及咨询</h2>
                            <p>很多组织和团队的敏捷之路面对各个层面／方面的各种挑战，期望尽早把团队的绩效作进一步提升，优秀敏捷教练和转型顾问的帮助会是多快好省的选择。</p>
                            <a class="focus-btn" href="/consulting">教练服务详情</a>
                        </div>
                    </li>
                    <li>
                        <div class="slider-content content_4">
                            <h2>卓越团队</h2>
                            <p>敏捷的核心是人：强大的组合，高信誉度的服务。机构的核心敏捷顾问团队具有多年海内外软件、IT、各类型项目及企业管理方方面面的经验。获得许多知名客户的一致认可和推荐。</p>
                            <a class="focus-btn" href="/team">团队详情</a>
                        </div>
                    </li>
                </ul>
                <div class="slider-control">    
                    <a href="#"><span class="control_item icon_1"></span>您的敏捷伙伴</a>
                    <a href="#"><span class="control_item icon_2"></span>Scrum及敏捷课程</a>
                    <a href="#"><span class="control_item icon_3"></span>敏捷教练</a>
                    <a class="last" href="#"><span class="control_item icon_4"></span>卓越团队</a>
                </div> <!-- .slider-control -->         
            </div><!-- .wrapper -->
        </div><!-- .slider -->
        
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
          <!-- Indicators -->
          <ol class="carousel-indicators">
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
            <li data-target="#carousel-example-generic" data-slide-to="3"></li>
          </ol>

          <!-- Wrapper for slides -->
          <div class="carousel-inner" role="listbox">
            <div class="item active">
              <img src="//wp-content/themes/uperform/images/content_1.jpg" alt="...">
              <div class="carousel-caption">
                <h3>您的敏捷及项目绩效伙伴</h3>
                <p>开放思维 乐活乐工 勇敢专注 敏捷共赢</p>
              </div>
            </div>
            <div class="item">
              <img src="//wp-content/themes/uperform/images/content_2.jpg" alt="...">
              <div class="carousel-caption">
                <h3>Scrum及敏捷课程</h3>
                <p>我们为那些想改善软件开发和系统项目成果的团队、组织与个人提供最为全面的Scrum及敏捷相关培训，包括公开班及内训，认证及非认证，管理类及技术类。</p>
              </div>
            </div>            
            <div class="item">
              <img src="//wp-content/themes/uperform/images/content_3.jpg" alt="...">
              <div class="carousel-caption">
                <h3>敏捷教练及咨询</h3>
                <p>很多组织和团队的敏捷之路面对各个层面／方面的各种挑战，期望尽早把团队的绩效作进一步提升，优秀敏捷教练和转型顾问的帮助会是多快好省的选择。</p>
              </div>
            </div>            
            <div class="item">
              <img src="//wp-content/themes/uperform/images/content_4.jpg" alt="...">
              <div class="carousel-caption">
                <h3>卓越团队</h3>
                <p>敏捷的核心是人：强大的组合，高信誉度的服务。机构的核心敏捷顾问团队具有多年海内外软件、IT、各类型项目及企业管理方方面面的经验。获得许多知名客户的一致认可和推荐。</p>
              </div>
            </div>
          </div>

          <!-- Controls -->
          <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
            <span class="sr-only">Next</span>
          </a>
        </div><!-- .carousel -->

        <div id="content" class="wrapper container">
            <div class="row">
                <div class="course-list col-md-4">
                    <h2>近期敏捷课程公开班</h2>
                    <?php if (have_posts()) : ?>
      <?php $special_query = new WP_Query('category_name=special&showposts=8');
      while ($special_query->have_posts()) : $special_query->the_post();
      $do_not_duplicate = $post->ID; ?>
        <!-- Do stuff... -->
                    <ul class="list-inline">
                        <li <?php post_class() ?> id="post-<?php the_ID(); ?>">
                            <div>
                                <h3 class="course-title"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3><span class="course-title-bg"></span>
                                <div class="clear"></div>
                            </div>
                            <div class="entry">
                                <?php the_content('详细介绍'); ?>
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
                        <a class="more-btn" href="/category/courses/class">查看所有公开班</a><span class="more-btn-bg"></span>
                        <div class="clear"></div>
                    </div>
                </div><!-- .course-list -->


                <div class="col-md-8">

                    <div class="row">
                        <h2>为什么选择优普丰</h3>
                        <div class="intro">
                            <p class="intro-section"> </p>
                            <p class="intro-section"></p>                           <!-- 您正在寻找Scrum培训，Scrum认证，敏捷教练指导，敏捷培训和敏捷咨询服务吗？ UPerform（优普丰）顾问机构和团队正是您最值得信任的。  我们为那些想改善软件开发和系统项目成果的团队、组织与个人提供敏捷培训、教练指导和咨询服务，使您投入昂贵的项目交付成果实现价值最大化。 -->
                        </div>
                        <div class="advantage">
                            <ul>
                                <li>中国地区首家Scrum联盟REP-注册教育提供商及国际敏捷联盟企业会员</li>
                                <li>深刻理解传统与敏捷环境的异同，海内外丰富背景，准确把握文化差异</li>
                                <li>拥有最具资历的Scrum敏捷顾问团队 </li>
                                <li>能用流利普通话或者纯正美式英语交付</li>
                                <li>每位敏捷管理顾问平均IT行业经验超过20年，均从开发人员做起到总监或以上职能</li>                 
                                <li>在中国Scrum敏捷领域深耕6年，获得众多知名客户认可（<a href="http://www.scrumchina.com/clients">请点击我们的重要客户清单</a>）</li>
                                <div class="clear"></div>
                            </ul>
                        </div>
                        <div class="more">
                            <a class="more-btn" href="/faq#q2">Scrum认证体系说明</a><span class="more-btn-bg"></span>
                            <!-- <div class="clear"></div> -->
                        </div>
                    </div>

                    <div class="row">
                        <h3>客户评价</h3>
                        <div class="review">
                            <span class="course-title-bg"></span>
                            <ul id="slidexxx">
                                <li>
                                    <span class="review-bg"></span><p class="review-content">教学以传递理念和思维方式为主，而不是枯燥的Agile介绍，并且注入了老师强烈的爱和热情，很有感染力。</p>
                                    <p class="review-writer">——国际知名IT企业学员评语</p>
                                </li>
                                <li>
                                    <span class="review-bg"></span><p class="review-content">最喜欢老师轻松随和的授课方式，他拥有丰富的敏捷管理经验。课堂游戏设置得当，能悟出很多道理。课程中关于整体框架的讲解，团队文化的观点和积极的态度，让我很受启发。</p>
                                    <p class="review-writer">——知名外包公司学员评语</p>
                                </li>
                                <li>
                                    <span class="review-bg"></span><p class="review-content">首先，老师表述、课程内容安排、实际应用范例表述的非常清晰和吸引人；再次练习也很有针对性。另外，充足的实际的项目经验，深刻理解PO应该承担的责任，以实际的产品比如Apple的开发思维来启发大家。</p>
                                    <p class="review-writer">——知名互联网公司学员评语</p>
                                </li>
                                <li>
                                    <span class="review-bg"></span><p class="review-content">通过本次课程再次回顾了Scrum的完整框架过程，及时找到自己的不足之处，解决了一些项目中实际遇到的问题,提供了可参考的解决方案。</p>
                                    <p class="review-writer">——有实践经验的学员评语</p>
                                </li>
                                <li>
                                    <span class="review-bg"></span><p class="review-content">老师对我们问题的快速反应和解答方式，没有假话套话， 能结合自身经验回答同学们的问题。培训效果非常好。</p>
                                    <p class="review-writer">——知名企业级软件供应商学员评语</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                    
                    <blockquote>
                      <p>教学以传递理念和思维方式为主，而不是枯燥的Agile介绍，并且注入了老师强烈的爱和热情，很有感染力。</p>
                      <footer>国际知名IT企业学员<cite title="Source Title"></cite></footer>
                    </blockquote>
                    <blockquote>
                      <p>最喜欢老师轻松随和的授课方式，他拥有丰富的敏捷管理经验。课堂游戏设置得当，能悟出很多道理。课程中关于整体框架的讲解，团队文化的观点和积极的态度，让我很受启发。</p>
                      <footer>知名外包公司学员<cite title="Source Title"></cite></footer>
                    </blockquote>
                    <blockquote>
                      <p>首先，老师表述、课程内容安排、实际应用范例表述的非常清晰和吸引人；再次练习也很有针对性。另外，充足的实际的项目经验，深刻理解PO应该承担的责任，以实际的产品比如Apple的开发思维来启发大家。</p>
                      <footer>知名互联网公司学员<cite title="Source Title"></cite></footer>
                    </blockquote>
                    <blockquote>
                      <p>通过本次课程再次回顾了Scrum的完整框架过程，及时找到自己的不足之处，解决了一些项目中实际遇到的问题,提供了可参考的解决方案。</p>
                      <footer>有实践经验的学员<cite title="Source Title"></cite></footer>
                    </blockquote>
                    <blockquote>
                      <p>老师对我们问题的快速反应和解答方式，没有假话套话， 能结合自身经验回答同学们的问题。培训效果非常好。</p>
                      <footer>知名企业级软件供应商学员<cite title="Source Title"></cite></footer>
                    </blockquote>



                    <div class="row">
                        <h3>权威译作</h3>
                        <div class="books">
                            <p class="book-1"><a target="_blank" href="http://www.amazon.cn/mn/detailApp?qid=1243751317&ref=SR&sr=13-1&uid=480-7784106-1451868&prodid=bkbk746308">Scrum敏捷项目管理</a></p>
                            <p class="book-2"><a target="_blank" href="http://www.amazon.cn/mn/detailApp?qid=1243751317&ref=SR&sr=13-1&uid=480-7784106-1451868&prodid=bkbk746308">用户故事与敏捷方法</a></p>
                            <p class="book-3"><a target="_blank" href="http://www.amazon.cn/mn/detailApp?qid=1243751317&ref=SR&sr=13-2&uid=480-7784106-1451868&prodid=bkbk936869">Scrum敏捷项目管理实战（微软技术丛书）</a></p>
                        </div>
                    </div>

                </div><!-- .col-md-8 -->
            <div class="clear"></div>
        </div><!-- .row --> 
        </div><!-- #content -->
<?php get_footer(); ?>