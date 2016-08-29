<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content
 * after.  Calls sidebar-footer.php for bottom widgets.
 *
 * @package WordPress
 * @subpackage Uperform
 * @since Uperform 1.0
 */
?>
	</div><!-- #main -->

	<div id="footer" role="contentinfo">
		<div class="wrapper">
			<div class="footer-section our-partner left-col">
				<p class="sub">我们的</p>
				<h3>合作机构</h3>
				<p><a target="_blank" class="partner1" href="http://www.scrumalliance.org"></a></p>
				<p><a target="_blank" class="partner2" href="http://www.agilealliance.org"></a></p>
				
<?php
	/* A sidebar in the footer? Yep. You can can customize
	 * your footer with four columns of widgets.
	 */
	get_sidebar( 'footer' );
?>
			
			</div><!-- .our-blog -->
			<div class="footer-section contact-info left-col">
				<p class="sub">我们是</p>
				<h3>优普丰</h3>
				<p class="address">上海办公室: <br/>上海长宁区汇川路99号新时空国际商务广场1502室 <br/>
Tel:  (021) 63809913</p>
				<p class="address">北京办公室: <br/>建国门外大街甲6号中环世贸中心C座29楼<br/>
Tel: (010) 85679828</p>
				<p class="email"><a href="mailto:service@scrumchina.com">Service@ScrumChina.com</a></p>
			</div>
			<div class="footer-section social-network right-col">
				<p class="sub">我们爱</p>
				<h3>社交网络</h3>
				
                                <p class="footer-social">微信公众号: UPerform优普丰 </p>
                                <p class="footer-social"> <img alt="UPerform优普丰" width="100" title="UPerform优普丰" src="http://www.scrumchina.com/wp-content/uploads/2014/03/upeform_wechat.png"/></p>
                                <p class="footer-social">新浪微博: <a href="http://weibo.com/uperform" class="social-logo">@UPerform_优普丰</a></p>
				<p class="footer-social">新浪微博: <a href="http://weibo.com/scrumchina" class="social-logo">@李国彪</a></p>
				<p class="footer-social">Twitter: <a href="http://twitter.com/scrumchina" class="social-logo">@ScrumChina</a></p>

<p style="margin-top:30px;"> <a target="_blank" href='http://www.sgs.gov.cn/lz/licenseLink.do?method=licenceView&entyId=20120217095149104'><img src='http://www.scrumchina.com/wp-content/uploads/2012/04/sh-liangzhao.gif' border=0></a> </p>

			</div>


			<div class="clear"></div>
		</div><!-- .wrapper -->
	</div><!-- #footer -->
	<div id="copyright">
		<div class="wrapper">
			<div id="site-generator" class="left-col">
				<p>
					<a href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
					<?php bloginfo( 'name' ); ?>
					</a>
				</p>
			</div><!-- #site-generator -->
			<div id="site-info" class="right-col">				<mobile>				<p><a href="mailto:service@scrumchina.com">Email:Service@ScrumChina.com</a> <span>Tel: (021) 63809913</span> <span>微信公众号: UPerform优普丰</span> </p></mobile>				<p style="">上海优普丰企业管理有限公司 2007-<?php echo date("Y");?> 版权所有 <span class="icp">沪ICP备08021483号</span></p> 
			</div><!-- #site-info -->
			<div class="clear"></div>
		</div><!-- .wrapper -->
	</div><!-- #copyright -->

</div>
<script src="//cdn.bootcss.com/jquery/1.11.3/jquery.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/scripts/jquery.bxSlider.min.js" type="text/javascript"></script>
<script src="<?php bloginfo('template_url'); ?>/scripts/global.js" type="text/javascript"></script>
<script src="//cdn.bootcss.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<?php
	/* Always have wp_footer() just before the closing </body>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to reference JavaScript files.
	 */

	wp_footer();
?><script type="text/javascript">// alert(jQuery(window).width());</script>
</body>
</html>