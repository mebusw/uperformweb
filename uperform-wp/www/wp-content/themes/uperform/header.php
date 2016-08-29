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
<link href="<?php bloginfo('template_url'); ?>/scripts/bootstrap/css/bootstrap.min.css" type="text/css" rel="stylesheet" />
<?php }?>
</head>
<body <?php body_class(); ?>>

<div>
	<div id="header" class="wrapper">
		<div class="branding">
			<?php $heading_tag = ( is_home() || is_front_page() ) ? 'h1' : 'div'; ?>
			<<?php echo $heading_tag; ?> class="logo left-col">
				<span>
					<a href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
			</span>
			</<?php echo $heading_tag; ?>>
			<!-- <div class="top-links right-col">
				<a href="<?php echo site_url('');?>/en">English version</a>
				<a href="<?php echo site_url('');?>/contact">联系我们</a>
				<a href="<?php echo site_url('');?>/career">招聘信息</a>
				<a href="<?php echo site_url('');?>/faq">FAQ</a>
			</div> -->
			<div class="clear"></div>
		</div>
	</div><!-- #header -->

 	<div id="nav" role="navigation">
		<i></i>
		<div class="wrapper">
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
	</div> <!-- #nav -->

	<div id="main">
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