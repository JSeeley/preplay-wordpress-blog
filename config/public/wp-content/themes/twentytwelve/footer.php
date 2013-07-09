<?php
/**
 * The template for displaying the footer.
 *
 * Contains footer content and the closing of the
 * #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?>
	</div><!-- #main .wrapper -->
	</div><!-- #page -->
	<footer id="colophon" role="contentinfo">
		<div class="site-info">
			<?php do_action( 'twentytwelve_credits' ); ?>
			<div class="footercontainer">
			<div class="icons">
				<ul>
					<li><a href="http://wwww.mlb.preplaysports.com"><img src="https://preplay_blog.s3.amazonaws.com/mlb.png"></a></li>
					<li><a href="http://nhl.preplaysports.com/"><img src="https://preplay_blog.s3.amazonaws.com/nfl.png"></a></li>
					<li><a href="https://itunes.apple.com/us/app/preplay/id391372543?mt=8"><img src="https://preplay_blog.s3.amazonaws.com/nhl.png"></a></li>
				</ul>
			</div>
			<div class="footerlinks">
				<ul>
					<li><a href="http://blog.preplaysports.com/privacy-policy" target="_blank">Privacy Policy</a></li>
					<li><a href="http://blog.preplaysports.com/terms-of-use" target="_blank">Terms of Service</a></li>
				</ul>
			</div>

			<a class="contact" href="mailto:contact@preplaysports.com" alt="contact us" class="externalLink" target="_blank"><img src="http://www.preplaysports.com/img/text/talk_to_us.png"></a>
		</div><!--End of Footer Container-->


			<!-- <a href="<?php echo esc_url( __( 'http://wordpress.org/', 'twentytwelve' ) ); ?>" title="<?php esc_attr_e( 'Semantic Personal Publishing Platform', 'twentytwelve' ); ?>"><?php printf( __( 'Proudly powered by %s', 'twentytwelve' ), 'WordPress' ); ?></a> -->
		</div><!-- .site-info -->
	</footer><!-- #colophon -->


<?php wp_footer(); ?>
</body>
</html>