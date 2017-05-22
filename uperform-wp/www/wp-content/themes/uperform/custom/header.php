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

    <meta name="description" content="Scrum认证, Scrum中文培训, CSM培训，Scrum敏捷开发培训, 中文敏捷认证, 敏捷项目管理培训, 敏捷教练, 敏捷咨询。Scrum China Agile 优普丰是中国敏捷开发培训咨询教练领导品牌！">
    <meta name="keywords" content="Scrum认证, Scrum中文培训, CSM培训，Scrum敏捷开发培训, Scrum Master,敏捷项目管理培训,敏捷教练,敏捷咨询 敏捷估算">
    
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
<!--     <link href='https://fonts.lug.ustc.edu.cn/css?family=Roboto:400,300,500,700,900' rel='stylesheet' type='text/css'>
    <link href='https://fonts.lug.ustc.edu.cn/css?family=Raleway:400,300,500,600,700,900,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.lug.ustc.edu.cn/css?family=Ubuntu:400,500,700,300' rel='stylesheet' type='text/css'> -->
    
    <link rel="stylesheet" href="/wp-content/themes/uperform/fonts/pe-icon-7-stroke/css/pe-icon-7-stroke.css">
    <link rel="stylesheet" href="/wp-content/themes/uperform/fonts/pe-icon-7-stroke/css/helper.css">
    <link rel="stylesheet" href="/wp-content/themes/uperform/fonts/flaticon/flaticon.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/owl.carousel.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/owl.transitions.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/joining-carousel-theme.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/normalize.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/hover.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/bootstrap.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/style2.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/responsive.css">

    <link rel="stylesheet" href="//cdn.bootcss.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="//cdn.bootcss.com/modernizr/2.8.3/modernizr.min.js"></script>

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
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
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
<body>
        <div id="preloader"></div>
            
        <div id="top-menu">
            <div class="container">
                <div class="row">
                    <div class="top-menu-info navbar-right" >
                        <span class="text-left"><i class="fa  fa-phone"></i><a href="tel:02163809913">+86 21 63809913</a></span>
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
              <a class="navbar-brand" href="/"><img src="<?php bloginfo('template_url'); ?>/img/logo-uperform.png" alt="UPerform" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" style="margin-top: -18px;"></a>
            </div> <!-- navbar header -->

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <ul class="nav navbar-nav navbar-right">
                <li class="active"><a href="/">首页</a></li>                
                <li><a href="/courses">认证培训</a></li>                
                <li><a href="/consulting">教练顾问</a></li>                
                <li><a href="/team">核心团队</a></li>  
                <li><a href="/blog">博客</a></li>                
                <li><a href="/resources">学习资源</a></li>                
                <li><a href="/clients">客户</a></li>         
                <li><a href="/about">关于</a></li>         
              </ul>
            </div> <!-- /.navbar-collapse -->
          </div> <!-- /.container -->
        </nav> <!-- Navigation Menu Ends -->


