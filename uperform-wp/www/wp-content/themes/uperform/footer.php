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
		<div class="container">
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
			<div class="footer-section contact-info left-col" id="contactus">
				<p class="sub">我们是</p>
				<h3>优普丰</h3>
				<p class="email"><a href="mailto:service@scrumchina.com">Service@ScrumChina.com</a><br/>
				<p class="address"><a href="https://jinshuju.net/f/25k3bo" target="_blank">内训及教练在线报名</a>
				<br/><a href="https://jinshuju.net/f/RBPJVI" target="_blank">公开课在线报名</a></p>
				<p class="address">上海办公室: <br/>上海市闵行区申长路818号虹桥天地1号楼7楼裸心社 <br/>
				Tel: <a href="tel:02163809913">021-63809913（内训及教练咨询）</a><br/>Tel: <a href="tel:02134753688"> 021-34753688（公开课咨询）</a></p>
				<p class="address">北京办公室: <br/>建国门外大街甲6号中环世贸中心C座29楼
</p>
			</div>
			<div class="footer-section social-network left-col">
				<p class="sub">我们爱</p>
				<h3>社交网络</h3>
				
                                <p class="footer-social">微信公众号: UPerform优普丰 </p>
                                <p class="footer-social"> <img alt="UPerform优普丰" width="100" title="UPerform优普丰" src="http://www.scrumchina.com/wp-content/uploads/2014/03/upeform_wechat.png"/></p>
                                <p class="footer-social">新浪微博: <a href="http://weibo.com/uperform" class="social-logo">@UPerform_优普丰</a></p>
                                
				<p class="footer-social">Twitter: <a href="http://twitter.com/scrumchina" class="social-logo">@ScrumChina</a></p>

<p style="margin-top:30px;"> <a target="_blank" href='http://www.sgs.gov.cn/lz/licenseLink.do?method=licenceView&entyId=20120217095149104'><img src='http://www.scrumchina.com/wp-content/uploads/2012/04/sh-liangzhao.gif' border=0></a> </p>

			</div>


			<div class="clear"></div>
		</div><!-- .wrapper -->
	</div><!-- #footer -->
	<div id="copyright">
		<div class="container">
			<div id="site-generator" class="left-col">
				<p>
					<a href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
					<?php bloginfo( 'name' ); ?>
					</a>
				</p>
			</div><!-- #site-generator -->
			<div id="site-info" class="right-col ">				<mobile>				<p><a href="mailto:service@scrumchina.com">Email:Service@ScrumChina.com</a> <span>Tel: 021-63809913（内训及教练咨询）</span> <span>Tel: 021-34753688（公开课咨询）</span> <span>微信公众号: UPerform优普丰</span> </p></mobile>				<p style="">上海优普丰企业管理有限公司 2007-<?php echo date("Y");?> 版权所有 <span class="icp">沪ICP备08021483号</span></p> 
			</div><!-- #site-info -->
			<div class="clear"></div>
		</div><!-- .wrapper -->
	</div><!-- #copyright -->

</div>
<script src="//cdn.bootcss.com/jquery/1.11.3/jquery.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/scripts/jquery.bxSlider.min.js" type="text/javascript"></script>
<script src="<?php bloginfo('template_url'); ?>/scripts/global.js" type="text/javascript"></script>
<script src="//cdn.bootcss.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script type="text/javascript">// alert(jQuery(window).width());</script>

<script type="text/javascript">var cnzz_protocol = (("https:" == document.location.protocol) ? " https://" : " http://");document.write(unescape("%3Cspan id='cnzz_stat_icon_1260239618'%3E%3C/span%3E%3Cscript src='" + cnzz_protocol + "s4.cnzz.com/z_stat.php%3Fid%3D1260239618%26show%3Dpic1' type='text/javascript'%3E%3C/script%3E"));</script>

<script type="text/javascript">
	// Hide auto-appended CNZZ icon
	setTimeout(function () {
		$('img[src="http://icon.cnzz.com/img/pic1.gif"]').hide();
	}, 2000);
</script>

<?php
	/* Always have wp_footer() just before the closing </body>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to reference JavaScript files.
	 */

	wp_footer();
?>
</body>
</html>
