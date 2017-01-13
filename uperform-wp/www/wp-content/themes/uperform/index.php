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
        

    <div class="row">
        <div id="carousel-example-generic" class="center-block carousel slide" data-ride="carousel" style="max-width:960px;background-color: lightblue;">
          <!-- Indicators -->
<!--           <ol class="carousel-indicators">
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
            <li data-target="#carousel-example-generic" data-slide-to="3"></li>
          </ol>
 -->
          <!-- Wrapper for slides -->
          <div class="carousel-inner" role="listbox">
            <div class="item active" style="background-color: #50b2d5;">
              <a href="<?php echo site_url('');?>/about"><img src="/wp-content/themes/uperform/images/vernon.jpg" width="100%"></a>
              <div class="carousel-caption" style="">
                <div class="text-left" style="font-size:36px;color:white;">让蜕变发生</div>
                <div class="text-left" style="font-size:32px;color:white;">Catalyze Your Transformation!</div>
              </div>
            </div>
<!--             <div class="item" style="background-color: #50b2d5;">
              <a href="<?php echo site_url('');?>/about"><img src="/wp-content/themes/uperform/images/content_1.jpg" width="50%" style="height:244px;"></a>
              <div class="carousel-caption" style="width:30%;left:60%;right:10%;max-height: 220px;">
                <h2 class="text-right">您的敏捷及项目绩效伙伴</h3>
                <p class="text-right">开放思维 乐活乐工 勇敢专注 敏捷共赢</p>
              </div>
            </div>
            <div class="item" style="background-color: #50b2d5;">
              <a href="<?php echo site_url('');?>/category/courses/class"><img src="/wp-content/themes/uperform/images/content_2.jpg" width="50%" style="height:244px;"></a>
              <div class="carousel-caption" style="width:30%;left:60%;right:10%;max-height: 220px;">
                <h2 class="text-right">Scrum及敏捷课程</h3>
                <p class="text-right">我们为那些想改善软件开发和系统项目成果的团队、组织与个人提供最为全面的Scrum及敏捷相关培训，包括公开班及内训，认证及非认证，管理类及技术类。</p>
              </div>
            </div>            
            <div class="item" style="background-color: #50b2d5;">
              <a href="<?php echo site_url('');?>/consulting"><img src="/wp-content/themes/uperform/images/content_3.jpg" width="50%" style="height:244px;"></a>
              <div class="carousel-caption" style="width:30%;left:60%;right:10%;max-height: 220px;">
                <h2 class="text-right">敏捷教练及咨询</h3>
                <p class="text-right">很多组织和团队的敏捷之路面对各个层面／方面的各种挑战，期望尽早把团队的绩效作进一步提升，优秀敏捷教练和转型顾问的帮助会是多快好省的选择。</p>
              </div>
            </div>            
            <div class="item" style="background-color: #50b2d5;">
              <a href="<?php echo site_url('');?>/team"><img src="/wp-content/themes/uperform/images/content_4.jpg" width="50%" style="height:244px;"></a>
              <div class="carousel-caption" style="width:30%;left:60%;right:10%;max-height: 220px;">
                <h2 class="text-right">卓越团队</h3>
                <p class="text-right">敏捷的核心是人：强大的组合，高信誉度的服务。机构的核心敏捷顾问团队具有多年海内外软件、IT、各类型项目及企业管理方方面面的经验。获得许多知名客户的一致认可和推荐。</p>
              </div>
            </div>
 -->          </div>

          <!-- Controls -->
<!--           <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
            <span class="sr-only">Next</span>
          </a>
 -->        </div><!-- .carousel -->
        </div><!-- row -->

        <div id="content" class="wrapper container" style="max-width:960px;">
            <div class="row">
                <div class="course-list col-md-4 center-block">
                    <h2>近期敏捷课程公开班</h2>
                    <p><a class="btn btn-warning btn-lg" href="https://jinshuju.net/f/RBPJVI" target="_blank">我要报名公开班</a></p>
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
                        <h2>为什么选择优普丰UPerform</h3>
                        <div class="intro">
                            <p class="intro-section">您在寻找Scrum中文培训CSM/CSPO/CSD认证，敏捷培训，敏捷教练指导服务吗？ <br>UPerform优普丰顾问教练团队正是您最值得信任的Scrum Alliane授权机构、</p>
                            <p class="intro-section">我们为想改善软件开发和系统项目的团队和组织提供敏捷培训、教练指导和咨询服务，<br>实现昂贵投入的项目交付成果价值最大化。</p>
                        </div>
                        <div class="advantage">
                            <ul>
                                <li>中国地区首家 <a href="http://www.scrumalliance.org">Scrum联盟</a>REP-注册教育提供商及国际敏捷联盟企业会员</li>
                                <li>深刻理解传统与敏捷环境的异同，海内外丰富背景，准确把握文化差异</li>
                                <li>拥有最具资历的Scrum<a href="/team">敏捷教练顾问团队</a>，拥有3位CST和国内唯一CTC持有者</li>
                                <li>能用流利普通话或者纯正美式英语交付</li>
                                <li>每位敏捷管理顾问平均IT行业经验超过20年，均从开发人员做起到总监或以上职能</li>                 
                                <li>在中国Scrum敏捷领域深耕8年，获得众多知名客户认可（<a href="/clients">点击查看我们的重要客户清单</a>）</li>
                                <li><img src="/wp-content/themes/uperform/images/SCR20146-Seals-Final-CST.png" width="80" height="80"></li>
                                <li><img src="/wp-content/themes/uperform/images/SCR20146-Seals-Final-CTC.png" width="80" height="80"></li>
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

                    <div class="row">
                        <h3>权威译作 <a href="/resources/translated">点击更多</a></h3>
                        <div class="books">
                            <p class="book-1"></p>
                            <p>
                            <a target="_blank" href="http://www.amazon.cn/mn/detailApp?qid=1243751317&ref=SR&sr=13-1&uid=480-7784106-1451868&prodid=bkbk746308">Scrum敏捷项目管理</a></p>

                            <p class="book-2"></p>
                            <p><a target="_blank" href="http://www.amazon.cn/mn/detailApp?qid=1243751317&ref=SR&sr=13-1&uid=480-7784106-1451868&prodid=bkbk746308">用户故事与敏捷方法</a></p>
                            
                            <p class="book-3"></p>
                            <p><a target="_blank" href="http://www.amazon.cn/mn/detailApp?qid=1243751317&ref=SR&sr=13-2&uid=480-7784106-1451868&prodid=bkbk936869">Scrum敏捷项目管理实战（微软技术丛书）</a></p>
                            
                            <p class=""><img width="90px" height="112px" src="https://images-cn.ssl-images-amazon.com/images/I/41x%2BP3te%2BLL._SX386_BO1,204,203,200_.jpg"></p>
                            <p><a target="_blank" href="https://www.amazon.cn/%E5%8D%8E%E7%AB%A0%E7%A8%8B%E5%BA%8F%E5%91%98%E4%B9%A6%E5%BA%93-%E6%9C%89%E6%95%88%E7%9A%84%E5%8D%95%E5%85%83%E6%B5%8B%E8%AF%95-%E7%A7%91%E6%96%AF%E5%87%AF%E6%8B%89/dp/B00PVOND2W/">有效的单元测试</a></p>
                            
                            <p class=""><img width="90px" height="112px" src="https://images-cn.ssl-images-amazon.com/images/I/51VHSbVDxIL._SX398_BO1,204,203,200_.jpg"></p>
                            <p><a target="_blank" href="https://www.amazon.cn/%E4%BC%9A%E8%AF%B4%E8%AF%9D%E7%9A%84%E4%BB%A3%E7%A0%81-%E4%B9%A6%E5%86%99%E8%87%AA%E8%A1%A8%E8%BE%BE%E4%BB%A3%E7%A0%81%E4%B9%8B%E9%81%93-%E7%8E%8B%E6%B4%AA%E4%BA%AE/dp/B00E3ENSSU/">会说话的代码</a></p>
                            
                            <p class=""><img width="90px" height="112px" src="https://images-cn.ssl-images-amazon.com/images/I/51EDLp0Cn3L._SX354_BO1,204,203,200_.jpg"></p>
                            <p><a target="_blank" href="https://www.amazon.cn/%E5%85%B1%E5%88%9B%E5%BC%8F%E6%95%99%E7%BB%83-%E8%BD%AC%E5%8F%98%E6%80%9D%E7%BB%B4-%E8%9C%95%E5%8F%98%E4%BA%BA%E7%94%9F-%E4%BA%A8%E5%88%A9%C2%B7%E5%90%89%E5%A7%86%E6%96%AF-%E9%9C%8D%E6%96%AF/dp/B00HQLAD5I/">共创式教练</a></p>
                            
                            <p class=""><img width="90px" height="112px" src="https://images-cn.ssl-images-amazon.com/images/I/51z2ZV-xv5L._SX392_BO1,204,203,200_.jpg"></p>
                            <p><a target="_blank" href="https://www.amazon.cn/SOA与REST-用REST构建企业级SOA解决方案-埃尔/dp/B00H9518Q4/">SOA与REST:用REST构建企业级SOA解决方案</a></p>
                            
                            <p class=""><img width="90px" height="112px" src="https://images-cn.ssl-images-amazon.com/images/I/51H6SHy6g2L._SX374_BO1,204,203,200_.jpg"></p>
                            <p><a target="_blank" href="http://product.dangdang.com/23486630.html">修改代码的艺术</a></p>
                        </div>
                    </div>

                </div><!-- .col-md-8 -->
            <div class="clear"></div>
        </div><!-- .row --> 
        </div><!-- #content -->
<?php get_footer(); ?>