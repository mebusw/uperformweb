<?php $cat_id= get_blog_cat_id(); ?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html <?php language_attributes(); ?>>
<head>

    <meta charset="utf-8">
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="author" content="Tahmid Hasan">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">

    <meta name="description" content="Scrum中文培训, CSM培训，Scrum敏捷开发培训, Scrum认证, 中文敏捷认证, 敏捷项目管理培训, 敏捷教练, 敏捷咨询等服务。Scrum China Agile 中国敏捷开发培训咨询教练领导品牌！ CSM CSP CSD CST CTC">
    <meta name="keywords" content="Scrum中文培训, CSM培训，Scrum敏捷开发培训, Scrum认证,Scrum Master,敏捷项目管理培训,敏捷教练,敏捷咨询 Agile Coaching DevOps Coaching SAFE LESS CSM CSP CSD CST CTC 敏捷估算">
    <title><?php
    global $page, $paged;

    wp_title( '|', true, 'right' );

    // Add the blog name.
    bloginfo( 'name' );

    // Add the blog description for the home/front page.
    $site_description = get_bloginfo( 'description', 'display' );
    if ( $site_description && ( is_home() || is_front_page() ) )
        echo " | $site_description";

    // Add a page number if necessary:
    if ( $paged >= 2 || $page >= 2 )
        echo ' | ' . sprintf( __( 'Page %s', 'twentyten' ), max( $paged, $page ) );

    ?></title>
    <link rel="shortcut icon" href="img/favicon/favicon.png">
    <link rel="apple-touch-icon" href="img/favicon/apple-touch-icon.png">
    <link rel="apple-touch-icon" size="72x72" href="img/favicon/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" size="114x114" href="img/favicon/apple-touch-icon-114x114.png">

    <!-- Fonts -->
    <link href='https://fonts.lug.ustc.edu.cn/css?family=Roboto:400,300,500,700,900' rel='stylesheet' type='text/css'>
    <link href='https://fonts.lug.ustc.edu.cn/css?family=Raleway:400,300,500,600,700,900,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.lug.ustc.edu.cn/css?family=Ubuntu:400,500,700,300' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="fonts/pe-icon-7-stroke/css/pe-icon-7-stroke.css">
    <link rel="stylesheet" href="fonts/pe-icon-7-stroke/css/helper.css">
    <link rel="stylesheet" href="fonts/flaticon/flaticon.css">
    <link rel="stylesheet" href="//cdn.bootcss.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/owl.transitions.css">
    <link rel="stylesheet" href="css/joining-carousel-theme.css">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/hover.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="responsive.css">


    <link href="http://cdn.bootcss.com/bootstrap/3.3.5/css/bootstrap.min.css" type="text/css" rel="stylesheet" />

    <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
    <?php
        /* We add some JavaScript to pages with the comment form
         * to support sites with threaded comments (when in use).
         */
        if ( is_singular() && get_option( 'thread_comments' ) )
            wp_enqueue_script( 'comment-reply' );

        /* Always have wp_head() just before the closing </head>
         * tag of your theme, or you will break many plugins, which
         * generally use this hook to add elements to <head> such
         * as styles, scripts, and meta tags.
         */
        wp_head();
    ?>

    <?php if($cat_id==BLOG_CAT_ID || is_tag() || is_search()){?>
        <link href="<?php bloginfo('template_url'); ?>/blog_style.css" type="text/css" rel="stylesheet" />

        <!--[if lt IE 9]><script src="<?php bloginfo('template_url'); ?>/scripts/html5.js"></script><![endif]-->
    <?php }?>

    <script type="text/javascript">
    document.write('<script src="\/\/assets.kf5.com\/supportbox\/main.js?' + (new Date).getDay() + '" id="kf5-provide-supportBox" kf5-domain="jackyshen.kf5.com" charset="utf-8"><\/script>');
    </script>

    <script type='text/javascript'>
          var _vds = _vds || [];
          window._vds = _vds;
          (function(){
            _vds.push(['setAccountId', '90cc5264e90b7764']);
            (function() {
              var vds = document.createElement('script');
              vds.type='text/javascript';
              vds.async = true;
              vds.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'dn-growing.qbox.me/vds.js';
              var s = document.getElementsByTagName('script')[0];
              s.parentNode.insertBefore(vds, s);
            })();
          })();
    </script>
</head>
<body <?php body_class(); ?>>

<?php //get_header(); ?>

        <div id="preloader"></div>
            
        <div id="top-menu">
            <div class="container">
                <div class="row">
                    <div class="top-menu-info navbar-right" >
                        <span class="text-left"><i class="fa  fa-phone"></i>+86 21 2345 6789</span>
                        <span class="text-right"><a href="<?php echo site_url('');?>/en">EN</a></span>                        
                        <span class="text-right"><a href="<?php echo site_url('');?>/faq">FAQ</a></span>
                    </div> <!-- Top Menu Info End -->
                </div> <!-- row -->
            </div> <!-- container -->
        </div> <!-- Top Menu End -->



        <!-- Navigation Menu Starts -->
        <nav class="navbar navbar-default navbar-fixed-top">
          <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="index.html"><img src="img/logo-uperform.png" alt="UPerform" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>"><?php bloginfo( 'name' ); ?></a>
            </div> <!-- navbar header -->

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <ul class="nav navbar-nav navbar-right">
                <li class="active"><a href="index.html#top-menu">首页</a></li>                
                <li><a href="index.html#about">博客</a></li>                
                <li><a href="index.html#service">认证培训</a></li>                
                <li><a href="index.html#portfolio">教练顾问</a></li>                
                <li><a href="index.html#team">学习园地</a></li>                
                <li><a href="index.html#news">团队</a></li>  
                <li><a href="index.html#contact">客户</a></li>         
                <li><a href="index.html#contact">关于</a></li>         
              </ul>
            </div> <!-- /.navbar-collapse -->
          </div> <!-- /.container -->
        </nav> <!-- Navigation Menu Ends -->



        
        <!-- Header Starts -->
        <header id="header">
            <div class="inner-header">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="header-content">
                                <h1>催化蜕变发生<br><span>CATALYZE </span> YOUR TRANSFORMATION</h1>
<!--                                <div class="header-button">
                                    <a class="btn-buy-now hvr-sweep-to-top" href="index.html#">Buy Now</a>
                                    <a class="header-read-btn hvr-sweep-to-top" href="index.html#">Read More</a>
                                </div> 
 -->                            <img src="img/carousel1.jpg" width="980px" height="453px" class="img-responsive">   
                            </div> 
                        </div>  <!-- col-sm-12 -->
                    </div> <!-- row -->
                </div>  <!-- container ends -->
            </div>  <!-- inner-header ends --> 
        </header> <!-- Header Ends -->



        <!-- Header Bottom -->
        <section id="header-bottom">
            <div class="header-bottom-padding">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-sm-6 col-md-5 col-md-offset-1">
                            <div class="header-bottom-info-1">
                                <h3>国内唯一敏捷教练学院</h3>
                                <i class="fa fa-codepen"></i>
                                <p>大中华敏捷Scrum培训教练咨询领航者，拥有最具资历的Scrum敏捷教练顾问团队，拥有3位CST和国内唯一CTC持有者担任教练培养导师，平均IT行业经验超过20年<a class="btn btn-info" href="/faq#q2">Scrum认证体系说明</a></p>
                            </div> <!-- header bottom info -->
                        </div> <!-- col-md-5 -->

                        <div class="col-xs-12 col-sm-6 col-md-5 col-md-offset-1">
                            <div class="header-bottom-info-2">
                                <h3>深耕中国十年</h3>
                                <i class="fa fa-briefcase"></i>
                                <p>创立于2007年，中国地区首家Scrum Alliance-REP注册教育提供商及国际敏捷联盟企业会员，最大的中文敏捷培训CSM/CSPO/CSD认证机构，<a href="/clients">超过500家客户清单</a></p>
                            </div> <!-- header bottom info-2 -->
                        </div> <!-- col-md-5 -->
                    </div> <!-- row -->
                </div> <!-- container -->
            </div> <!-- header bottom padding -->
        </section> <!-- Header Bottom End -->


        <!-- Our Service -->
        <section id="service">
            <div class="section-padding">
                <div class="container">
                    <div class="section-title-4">
                        <h1>我们提供哪些 <span>服务</span> 内容</h1>
                        <p>我们为想改善软件开发和系统项目的团队和组织提供中英文敏捷培训、教练指导和咨询服务，实现昂贵投入的项目交付成果价值最大化</p>
                    </div> <!-- section title -->

                    <div class="row content-area">
                        <div class="col-sm-12 col-md-12">
                            <div class="service-details">
                                <div class="col-sm-6 col-md-3">
                                    <div class="service-info-1 hvr-glow">
                                        <i class="pe-7s-diamond"></i>
                                        <h3>Scrum国际认证</h3>
                                        <p>美国Scrum Alliance颁发，全球70%的敏捷组织都在使用Scrum方法，数百万人的选择。深刻理解传统与敏捷环境的异同，海内外丰富背景，准确把握文化差异</p>
                                    </div> <!-- service info -->
                                </div> <!-- col-sm-6 -->

                                <div class="col-sm-6 col-md-3">
                                    <div class="service-info-2 hvr-glow">
                                        <i class="pe-7s-rocket"></i>
                                        <h3>企业定制内训</h3>
                                        <p>管理类及技术类, 包括精益看板Kanban, SAFe, XP, ATDD, 敏捷Scrum，能用流利普通话或者纯正美式英语交付</p>
                                    </div> <!-- service info -->
                                </div> <!-- col-sm-6 -->

                                <div class="col-sm-6 col-md-3">
                                    <div class="service-info-3 hvr-glow">
                                        <i class="pe-7s-joy"></i>
                                        <h3>现场教练咨询顾问</h3>
                                        <p>很多组织和团队的敏捷之路面对各个层面／方面的各种挑战，期望尽早把团队的绩效作进一步提升，优秀敏捷教练和转型顾问的帮助会是多快好省的选择</p>
                                    </div> <!-- service info -->
                                </div> <!-- col-sm-6 -->

                                <div class="col-sm-6 col-md-3">
                                    <div class="service-info-4 hvr-glow">
                                        <i class="pe-7s-light"></i>
                                        <h3>敏捷教练培养</h3>
                                        <p>帮助敏捷实践者朝着专家级CSP认证继续深造，国内CSP仅有百位。</p>
                                    </div> <!-- service info -->
                                </div> <!-- col-sm-6 -->
                            </div> <!-- service details -->
                        </div> <!-- col-sm-12 -->
                    </div> <!-- row -->
                </div> <!-- container -->
            </div> <!-- section padding -->
        </section> <!-- Our Service End -->

        <!-- Our Company Features -->
        <section id="features">
            <div class="section-padding">
                <div class="container">
                    <div class="section-title-1">
                        <h1>教练们的 <span>新想法</span></h1>
                        <p>敏捷的核心是人：强大的组合，高信誉度的服务。核心教练顾问团队具有多年海内外软件、IT、各类型项目及企业管理方方面面的经验。获得许多知名客户的一致认可和推荐，也是社区的意见领袖</p>
                    </div> <!-- section title -->

                    <div class="row content-area">
                        <div class="col-sm-6 col-md-4">
                            <div class="feature-detail-1"> 
                                <div class="feature-content-area">
                                    <div class="info-image">
                                        <img src="img/feature/01.jpg" alt="Feature image">
                                    </div> <!-- info image -->

                                    <div class="img-bottom-line"></div>

                                    <div class="feature-info">
                                        <h3>社交活动方式做大规模敏捷</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipi scing elit, sed do eiusmod tempor incididunt ut labore et Lorem ipsum dolor sit</p>
                                    </div> <!-- feature info -->
                                </div> <!-- feature-content-area -->

                                <div class="feature-btn">
                                    <a class="feature-read-btn hvr-sweep-to-right" href="index.html">Read More</a>
                                </div> <!-- feature btn -->
                            </div> <!-- feature detail -->
                        </div> <!-- col-md-6 -->

                        <div class="col-sm-6 col-md-4">
                            <div class="feature-detail-2">   
                                <div class="feature-content-area">
                                    <div class="info-image">
                                        <img src="img/feature/02.jpg" alt="Feature image">
                                    </div> <!-- info image -->

                                    <div class="img-bottom-line"></div>

                                    <div class="feature-info">
                                        <h3>其实你不懂程序员</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipi scing elit, sed do eiusmod tempor incididunt ut labore et Lorem ipsum dolor sit</p>
                                    </div> <!-- feature info -->
                                </div> <!-- feature-content-area -->

                                <div class="feature-btn">
                                    <a class="feature-read-btn hvr-sweep-to-right" href="index.html">Read More</a>
                                </div> <!-- feature btn -->
                            </div> <!-- feature detail -->
                        </div> <!-- col-md-6 -->

                        <div class="col-sm-6 col-md-4">
                            <div class="feature-detail-3"> 
                                <div class="feature-content-area">
                                    <div class="info-image">
                                        <img src="img/feature/03.jpg" alt="Feature image">
                                    </div> <!-- info image -->

                                    <div class="img-bottom-line"></div> 

                                    <div class="feature-info">
                                        <h3>敏捷教练成长之路</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipi scing elit, sed do eiusmod tempor incididunt ut labore et Lorem ipsum dolor sit</p>
                                    </div> <!-- feature info -->
                                </div> <!-- feature-content-area -->

                                <div class="feature-btn">
                                    <a class="feature-read-btn hvr-sweep-to-right" href="index.html">Read More</a>
                                </div> <!-- feature btn -->
                            </div> <!-- feature detail -->
                        </div> <!-- col-md-6 -->
                    </div> <!-- row -->
                </div> <!-- container -->
            </div> <!-- section padding -->
        </section>  <!-- Our Company Features End -->


        <!-- About Company X -->
        <section id="about">
            <div class="section-padding">
                <div class="container">
                    <div class="section-title-4">
                        <h1>近期 <span>公开课</span></h1>
                        <p>There are many variations of passages of Lorem Ipsum available</p>
                    </div> <!-- name -->
                    <div class="row content-area">
                        <div class="all-price">
                            <div class="col-sm-12 col-md-6">
                                <div class="pricing-table-2 hvr-glow">
                                    <div class="table-header">
                                        <h3>即将开课</h3>
                                        <h5>8</h5>
                                    </div> <!-- table header -->

                                    <?php if (have_posts()) : ?>
                                    <?php $special_query = new WP_Query('category_name=special&showposts=8');
                                      while ($special_query->have_posts()) : $special_query->the_post();
                                      $do_not_duplicate = $post->ID; ?>
                                                    <ul>
                                                        <li <?php post_class() ?> id="post-<?php the_ID(); ?>" class="fa  fa-check-circle">
                                                            <div>
                                                                <h3 class="course-title"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3><span class="`course-title-bg"></span>
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

                                    <ul>
                                        <li><i class="fa  fa-check-circle"></i>Scrum Master 认证中文班(PMP ACP)<br> 2017年3月17-18 上海 知名CST Ethan Huang授课</li>
                                        <li><i class="fa  fa-check-circle"></i>Scrum Master 认证中文班(PMP ACP)<br> 2017年3月17-18 上海 知名CST Ethan Huang授课</li>                                    
                                    </ul>

                                    <div class="pricing-btn">
                                        <a href="https://jinshuju.net/f/RBPJVI" target="_blank"><i class="fa  fa-get-pocket"></i>我要报名</a>
                                    </div> <!-- pricing btn -->

                                    <!-- <div class="trending-batch">
                                        <span>火爆</span>
                                    </div> --> <!-- trending batch -->
                                </div> <!-- pricing table -->
                            </div> <!-- col-md-6 -->
                            <div class="col-sm-12 col-md-6">
                                <img src="img/classroom.jpg">
                            </div>

                        </div> <!-- all price -->
                    </div> <!-- row -->
                </div> <!-- container -->
            </div> <!-- section padding -->
        </section> <!-- About Company End -->

        <!-- About Company -->
        <section id="about">
            <div class="section-padding">
                <div class="container">
                    <div class="section-title-1">
                        <h1><span>工具</span> 和译著 </h1>
                        <p>There are many variations of passages of Lorem Ipsum available</p>
                    </div> <!-- name -->
                    <div class="row content-area">
                        <div class="col-xs-12 col-sm-6 col-md-6">
                            <div class="col-md-12">
                                <div class="about-info-1">
                                    <i class="flaticon-medical"></i>
                                    <h3>计划扑克</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut </p>
                                </div> <!-- about info-->
                            </div> <!-- col-md-12 -->

                            <div class="col-md-6">
                                <div class="about-info-2">
                                    <i class="flaticon-technology"></i>
                                    <h3>任务板和看板</h3>
                                    <p>Lorem ipsum dolor sit amet, conse ctetur adipiscing elit, sed do eius mod tempor incididunt ut</p>
                                </div> <!-- about info -->
                            </div> <!-- col-md-6 -->

                            <div class="col-md-6">
                                <div class="about-info-3">
                                    <i class="flaticon-person"></i>
                                    <h3>其他敏捷文具</h3>
                                    <p>Lorem ipsum dolor sit amet, conse ctetur adipiscing elit, sed do eius mod tempor incididunt ut</p>
                                </div> <!-- about info -->
                            </div> <!-- col-md-6 -->
                        </div> <!-- col-md-6 -->

                        <div class="col-xs-12 col-sm-6 col-md-6">
                            <div class="about-img-slide">
                                <div class="slider-image">
                                    <img src="img/books.png" alt="Slider Image">
                                </div> <!-- slider image -->
                            </div> <!-- about image slider -->
                        </div> <!-- col-md-6 -->
                    </div> <!-- row -->
                </div> <!-- container -->
            </div> <!-- section padding -->
        </section> <!-- About Company End -->


<?php //get_footer(); ?>
        <!-- Footer Start -->
        <footer id="footer">
            <div class="section-padding">
                <div class="container">
                    <div class="row">
                        <div class="footer-content">
                            <div class="col-sm-6 col-md-4">
                                <div class="footer-about">
                                    <h3>我们是优普丰</h3>
                                    <div class="footer-about-info content-area">
                                        <p class=""><i class="fa fa-envelope-o"></i><a href="mailto:service@scrumchina.com">Service@ScrumChina.com</a><br/>
                                        <p class=""><i class="fa fa-globe"></i><a href="https://jinshuju.net/f/25k3bo" target="_blank">内训及教练在线报名</a>
                                        <br/><i class="fa fa-globe"></i><a href="https://jinshuju.net/f/RBPJVI" target="_blank">公开课在线报名</a></p>
                                        <p class=""><i class="fa fa-user"></i>上海办公室: <br/>上海市闵行区申长路818号虹桥天地1号楼7楼裸心社 <br/>
                                        <i class="fa  fa-phone"></i>Tel: <a href="tel:02163809913">021-63809913（内训及教练咨询）</a><br/><i class="fa  fa-phone"></i>Tel: <a href="tel:02134753688"> 021-34753688（公开课咨询）</a></p>
                                        <p class=""><i class="fa fa-user"></i>北京办公室: <br/>建国门外大街甲6号中环世贸中心C座29楼
                                        </p>
                                    </div> <!-- footer-about-info -->

                                    <div class="footer-social-link">
                                    </div> <!-- footer-social-link -->
                                </div> <!-- footer-about -->
                            </div> <!-- col-md-4 -->

                            <div class="col-sm-6 col-md-4">
                                <div class="footer-quick-link">
                                    <h3>社交媒体</h3>

                                    <div class="col-sm-6 col-md-6">
                                        <div class="footer-menu-link-1 content-area">
                                            <ul>
                                                <li><a href="/"><i class="fa fa-angle-double-right"></i>微信公众号 <img src="http://www.scrumchina.com/wp-content/uploads/2014/03/upeform_wechat.png" width="100px"></a></li>
                                                <li><a href="index.html"><i class="fa fa-angle-double-right"></i>友情链接</a></li>
                                                <p class="footer-social">新浪微博: <a href="http://weibo.com/uperform" class="social-logo">@UPerform_优普丰</a></p>
                                                <p class="footer-social">Twitter: <a href="http://twitter.com/scrumchina" class="social-logo">@ScrumChina</a></p>
                                                <p>开放思维 乐活乐工 勇敢专注 敏捷共赢</p>
                                            </ul>
                                        </div> <!-- footer-menu-link-1 -->
                                    </div> <!-- col-md-6 -->

                                </div> <!-- footer-quick-link -->
                            </div> <!-- col-md-4 -->

                            <div class="col-sm-6 col-md-4">
                                <div class="footer-post">
                                    <h3>合作伙伴</h3>

                                    <div class="popular-post content-area">
                                        <p><a target="_blank" class="partner1" href="http://www.scrumalliance.org"></a></p>
                                        <p><a target="_blank" class="partner2" href="http://www.agilealliance.org"></a></p>
                                        <img src="/wp-content/themes/uperform/images/SCR20146-Seals-Final-CST.png" width="80" height="80"><img src="/wp-content/themes/uperform/images/SCR20146-Seals-Final-CTC.png" width="80" height="80">
                                        <p><a target="_blank" class="" href="http://jackyshen.com">敏捷教练 申健Jacky Shen</a></p>
                                    </div> <!-- popular-post -->
                                </div> <!-- footer-post -->
                            </div> <!-- col-md-4 -->
                        </div> <!-- footer-content -->
                    </div> <!-- row -->
                </div> <!-- container -->
            </div> <!-- section padding -->



            <div id="footer-bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-md-10">
                            <div class="copyright-txt">
                                <p style="">上海优普丰企业管理有限公司 &copy; 2007-<?php echo date("Y");?> 版权所有 <span class="icp">沪ICP备08021483号</span></p>
                            </div> <!-- copyright-txt -->
                        </div> <!-- col-md-10 -->

                        <div class="col-md-2">
                            <div class="payment-gateway-icon">
                                <i class="fa fa-cc-mastercard"></i>
                                <i class="fa fa-cc-visa"></i>
                                <i class="fa fa-cc-paypal"></i>
                            </div> <!-- payment-gateway-icon -->
                        </div> <!-- col-md-12 -->
                    </div> <!-- row -->
                </div> <!-- container -->
            </div> <!-- footer-bottom -->
        </footer> <!-- Footer End -->


    <script src="//cdn.bootcss.com/jquery/1.11.3/jquery.min.js"></script>
    <!--[if lt IE 9]>
        <script src="js/html5shiv.min.js"></script>
        <script src="js/respond.min.js"></script>
    <![endif]-->
    <script src="//cdn.bootcss.com/modernizr/2.8.3/modernizr.min.js"></script>
    <script src="//cdn.bootcss.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

    <script type="text/javascript">var cnzz_protocol = (("https:" == document.location.protocol) ? " https://" : " http://");document.write(unescape("%3Cspan id='cnzz_stat_icon_1260239618'%3E%3C/span%3E%3Cscript src='" + cnzz_protocol + "s4.cnzz.com/z_stat.php%3Fid%3D1260239618%26show%3Dpic1' type='text/javascript'%3E%3C/script%3E"));</script>

    <?php wp_footer(); ?>
</body>
</html>


