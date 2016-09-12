<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?>

			</div><!-- #main -->
			<div class="agency">
				<div class="title-agency">
					<h2><span>Đại lý nấm lim xanh</span></h2>
					<p>Sản phẩm độc quyền của công ty TNHH Nông lâm sản Tiên Phước chỉ có bán tại đại lý chính hãng trên toàn quốc!</p>
				</div>
				<div class="content-agency">
					<ul class="tab-link-agency">
						<li class="active" lang="#tab1">Đại lý Miền Bắc</li>
						<li lang="#tab2">Đại lý Miền Trung</li>
						<li lang="#tab3">Đại lý Miền Bắc</li>
					</ul>
					<div class="tabcontent">
						<div id="tab1" class="active">
							<img src="<?php echo get_template_directory_uri(); ?>/images/angency1.png">
						</div>
						<div id="tab2">
							<img src="<?php echo get_template_directory_uri(); ?>/images/angency3.png">
						</div>
						<div id="tab3">
							<img src="<?php echo get_template_directory_uri(); ?>/images/angency2.png">
						</div>
					</div>
				</div>
			</div>
		</div><!-- #page -->
	</div><!-- #swapper -->
	<div class="footer-container">
		<div class="site">
			<footer id="colophon" class="site-footer" role="contentinfo">
				<?php get_sidebar( 'footer' ); ?>
				<p class="name-company">Công ty TNHH nấm lim xanh Việt Nam</p>
				<p class="copyright">(VIETNAM GREEN IRONWOOD'S MUSHROOM CO.,LTD)</p>
				<p>Giấy DKKD: 4005995598 ngày 26/10/2012 cấp tại Sở KH&DT Quảng Nam</p>
				<p>Đại chỉ: Tổ 5 - Xã Tiến Hiệp - Huyện Tiên Phước - Tỉnh Quảng Nam</p>
				<p class="name-company title-slogan">TỔNG PHÂN PHỐI NẤM LIM XANH TỰ NHIÊN TIÊN PHƯỚC TRÊN TOÀN QUỐC</p>
				<p class="copyright">Copyright &copy; - 2015 Công ty TNHH nấm lim xanh Việt Nam</p>
				<!--<div class="site-info">
					<?php do_action( 'twentyfourteen_credits' ); ?>
					<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'twentyfourteen' ) ); ?>"><?php printf( __( 'Proudly powered by %s', 'twentyfourteen' ), 'WordPress' ); ?></a>
				</div><!-- .site-info -->
			</footer><!-- #colophon -->
		</div>
	</div>

	<?php wp_footer(); ?>
</body>
</html>