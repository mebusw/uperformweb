<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Uperform
 * @since Uperform 1.0
 */
$cat_id= get_blog_cat_id();
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="description" content="Scrum中文培训, CSM培训，Scrum敏捷开发培训, Scrum认证, 中文敏捷认证, 敏捷项目管理培训, 敏捷教练, 敏捷咨询等服务。Scrum China Agile 中国敏捷开发培训咨询教练领导品牌！ CSM CSP CST CTC">
<meta name="keywords" content="Scrum中文培训, CSM培训，Scrum敏捷开发培训, Scrum认证,Scrum Master,敏捷项目管理培训,敏捷教练,敏捷咨询 Agile Coaching DevOps Coaching SAFE LESS CSM CSP CST CTC 敏捷估算">
<title><?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 */
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
<link href="http://cdn.bootcss.com/bootstrap/3.3.5/css/bootstrap.min.css" type="text/css" rel="stylesheet" />
<link rel="profile" href="http://gmpg.org/xfn/11" />
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
<meta http-equiv="X-UA-Compatible" content="IE=10,IE=9,IE=8">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0,user-scalable=no">
<link href="<?php bloginfo('template_url'); ?>/mobile.css" type="text/css" rel="stylesheet" />
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

<div>
	<div id="header" class="container">
		<div class="branding">
			<?php $heading_tag = ( is_home() || is_front_page() ) ? 'h1' : 'div'; ?>
			<h1>
				<a class="logo left-col" href="/" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
			</h1>
			<div class="top-links right-col">
				<a href="<?php echo site_url('');?>/en">English</a>
				<a href="#contactus">联系我们</a>
				<!-- <a href="<?php echo site_url('');?>/career">招聘信息</a> -->
				<a href="<?php echo site_url('');?>/faq">FAQ</a>
			</div>
			<div class="clear"></div>
		</div>
	</div><!-- #header -->

 	<nav id="nav" role="navigation">
		<i></i>
		<div class="container">
			<div class="menu">
				<ul class="first-nav">
					<li><a href="<?php echo site_url('');?>/">首页</a></li>
					<li>
						<a href="<?php echo site_url('');?>/courses">培训课程</a>
						<ul class="secondary-nav">
							<li><a href="<?php echo site_url('');?>/category/courses/class">公开班时间表</a></li>
							<li><a href="<?php echo site_url('');?>/category/courses/trainning">企业内训</a></li>
							<li><a href="<?php echo site_url('');?>/category/courses/activities">社区活动信息</a></li>
						</ul>
					</li>
					<li>
						<a href="<?php echo site_url('');?>/consulting">教练咨询</a>
					</li>
					<li>
						<a href="<?php echo site_url('');?>/tools">工具</a>
					</li>
					<li><a href="<?php echo site_url('');?>/team">顾问团队</a></li>
					<li>
						<a href="<?php echo site_url('');?>/resources">博客&资源</a>
						<ul class="secondary-nav">
							<li><a href="<?php echo get_category_link(BLOG_CAT_ID);?>">博客</a></li>
							<li><a href="<?php echo site_url('');?>/resources/ppt">幻灯片下载</a></li>
							<li><a href="<?php echo site_url('');?>/resources/translated">权威译作</a></li>
							<li><a href="<?php echo site_url('');?>/resources/books">推荐书籍</a></li>
						</ul>
					</li>
					<li><a href="<?php echo site_url('');?>/clients">主要客户</a></li>
					<li><a href="<?php echo site_url('');?>/about">关于我们</a></li>
				</ul>
			</div>
			<?php //get_sidebar('nav'); ?>
			<div class="clear"></div>
		</div>
	</nav> <!-- #nav -->

	<div id="main" class="container">
<?php if($cat_id==BLOG_CAT_ID || is_tag() || is_search()){?>
<script type="text/javascript">
jQuery(document).ready(function(){
	jQuery("#nav i").click(function(){
		jQuery("#nav .first-nav").toggle();
	})
	if(jQuery(window).width()<1200){
		jQuery("#searchsubmit").val("");
		jQuery("#s").val("Search");
		
		jQuery("#searchsubmit").click(function(){
			jQuery("#nav-search").addClass("show");
			if(jQuery("#s").val()=="" || jQuery("#s").val()=="Search"){
				return false;
			}
		})
		
		jQuery("#s").click(function(){
			if(jQuery(this).val()=="Search"){
				jQuery(this).val("");
			}
		})
		jQuery("#s").blur(function(){
			if(jQuery(this).val()=="" || jQuery(this).val()=="Search"){
				jQuery("#nav-search").removeClass("show");
				jQuery("#s").val("Search");
			}
		})
	}


})
</script>
<?php }?>