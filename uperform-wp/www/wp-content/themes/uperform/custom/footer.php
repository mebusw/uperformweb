        <!-- Footer Start -->
        <footer id="footer" style="background-color: black;">
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
                                <div class="footer-quick-link" id="social-network">
                                    <h3>社交媒体</h3>

                                    <div class="col-sm-6 col-md-6">
                                        <div class="footer-menu-link-1 content-area">
                                            <ul>
                                                <li><a href="/"><i class="fa fa-angle-double-right"></i>微信公众号: @UPerform优普丰 <img src="http://www.scrumchina.com/wp-content/uploads/2014/03/upeform_wechat.png" width="100px"></a></li>
                                                <li><a href="http://weibo.com/uperform"><i class="fa fa-angle-double-right"></i>新浪微博: @UPerform_优普丰</a></li>
                                                <li><a href="http://twitter.com/scrumchina"><i class="fa fa-angle-double-right"></i>Twitter: @ScrumChina</a></li>                
                                            </ul>
                                        </div> <!-- footer-menu-link-1 -->
                                    </div> <!-- col-md-6 -->

                                </div> <!-- footer-quick-link -->
                            </div> <!-- col-md-4 -->

                            <div class="col-sm-6 col-md-4">
                                <div class="footer-post">
                                    <h3>合作伙伴</h3>

                                    <div class="popular-post content-area">
                                        <p>开放思维 乐活乐工 勇敢专注 敏捷共赢</p>
                                        <p><a target="_blank" class="partner1" href="http://www.scrumalliance.org"><img src="https://www.scrumalliance.org/assets/img/global/logo.png"></a></p>
                                        <p><a target="_blank" class="partner2" href="http://www.agilealliance.org"><img src="https://www.agilealliance.org/wp-content/themes/agilealliance/assets/images/agile-alliance-logo.png"></a></p>
                                        <p><a target="_blank" class="partner3" href="https://icagile.com/"><img src="https://icagile.com/Portals/0/ICA-logo-114px.png?ver=2016-07-15-180038-530"></a></p>
                                        <img src="/wp-content/themes/uperform/images/SCR20146-Seals-Final-CST.png" width="80" height="80"><img src="/wp-content/themes/uperform/images/SCR20146-Seals-Final-CTC.png" width="80" height="80">
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
                                <p style="">上海优普丰企业管理有限公司 &copy; 2007-<?php echo date("Y");?> 版权所有 <span class="icp">沪ICP备08021483号</span> <a target="_blank" href='http://www.sgs.gov.cn/lz/licenseLink.do?method=licenceView&entyId=20120217095149104'><img src='http://www.scrumchina.com/wp-content/uploads/2012/04/sh-liangzhao.gif' border=0></a></p>
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


    <!--[if lt IE 9]>
        <script src="js/html5shiv.min.js"></script>
        <script src="js/respond.min.js"></script>
    <![endif]-->
    <script src="//cdn.bootcss.com/jquery/1.11.3/jquery.min.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/js/owl.carousel.min.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/js/bootstrap.min.js"></script>

    <!-- <script src="//cdn.bootcss.com/bootstrap/3.3.5/js/bootstrap.min.js"></script> -->

    <script type="text/javascript">
    $(document).ready(function(){

        // site preloader -- also uncomment the div in the header and the css style for #preloader
        jQuery(document).ready(function($) {  

            $(window).on('load',function(){
                $('#preloader').fadeOut('slow',function(){$(this).remove();});
            });

            });



        // Sponsor Company Logo
        $(".client-company").owlCarousel({
                
                items: 3,
                itemsDesktop:  [1199,3],
                itemsDesktopSmall:  [979,2],
                itemsTablet:  [768,1],
                itemsMobile:   [479,1],
                pagination: true,
                autoPlay: true,
              });

        // Navbar
        (function() {
            $(window).on('scroll', function() {
                if ($(window).scrollTop() > 80) {
                    $(".navbar").addClass('navbar-active');
                    $(".navbar navbar-nav").css('padding-top', '25px');
                    if ($(window).width() < 480) {
                        //$(".navbar").css('min-height', '75px');
                        //$(".navbar").css('height', '75px');
                    } else {
                        $(".navbar").css('min-height', '105px');
                        $(".navbar").css('height', '105px');
                    }
                } else {
                    $(".navbar").removeClass('navbar-active');
                    $(".navbar").css('height', '');
                    if ($(window).width() < 480) {
                        $(".navbar").css('height', '95px');
                    } else {
                        $(".navbar").css('height', '120px');
                    }
                    $(".navbar navbar-nav").css('padding-top', '35px');
                }
              });
        }());

        });


    </script>
    <script type="text/javascript">
        // Hide auto-appended CNZZ icon
        setTimeout(function () {
            $('img[src="http://icon.cnzz.com/img/pic1.gif"]').hide();
        }, 2000);
    </script>
    <script type="text/javascript">var cnzz_protocol = (("https:" == document.location.protocol) ? " https://" : " http://");document.write(unescape("%3Cspan id='cnzz_stat_icon_1260239618'%3E%3C/span%3E%3Cscript src='" + cnzz_protocol + "s4.cnzz.com/z_stat.php%3Fid%3D1260239618%26show%3Dpic1' type='text/javascript'%3E%3C/script%3E"));</script>

    <?php wp_footer(); ?>
</body>
</html>

