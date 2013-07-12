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
					<li><a href="http://mlb.preplaysports.com"><img src="https://preplay_blog.s3.amazonaws.com/mlb.png"></a></li>
					<li><a href="http://nhl.preplaysports.com/"><img src="https://preplay_blog.s3.amazonaws.com/nhl.png"></a></li>
					<li><a href="https://itunes.apple.com/us/app/preplay/id391372543?mt=8"><img src="https://preplay_blog.s3.amazonaws.com/nfl.png"></a></li>
				</ul>
			</div>
			<div class="mobiledownload">
					<a href="https://itunes.apple.com/us/artist/pre-play-sports/id391372546"><img src="https://preplay_blog.s3.amazonaws.com/appstoremini.png"></a>
					<a href="https://play.google.com/store/apps/developer?id=PrePlay,+Inc."><img src="https://preplay_blog.s3.amazonaws.com/playstoremini.png"</a>
			</div>

			<a class="contact" href="mailto:contact@preplaysports.com" alt="contact us" class="externalLink" target="_blank"><img src="http://www.preplaysports.com/img/text/talk_to_us.png"></a>
			<div class="footerlinks">
				<ul>
					<li><a href="http://blog.preplaysports.com/privacy-policy" alt="download on iOS" target="_blank">Privacy Policy</a></li>
					<li><a href="http://blog.preplaysports.com/terms-of-use" alt="download on Android" target="_blank">Terms of Service</a></li>
					<li><a href="http://blog.preplaysports.com/official-contest-rules" alt="Official Contest Rules" target="_blank">Official Contest Rules</a></li>
					<li><a href="http://blog.preplaysports.com/2013-mlb-preplay-home-run-derby-promotion" alt="Home Run Derby Promotion" target="_blank">Home Run Derby Promotion</a></li>
				</ul>
			</div>

			
		</div><!--End of Footer Container-->


			<!-- <a href="<?php echo esc_url( __( 'http://wordpress.org/', 'twentytwelve' ) ); ?>" title="<?php esc_attr_e( 'Semantic Personal Publishing Platform', 'twentytwelve' ); ?>"><?php printf( __( 'Proudly powered by %s', 'twentytwelve' ), 'WordPress' ); ?></a> -->
		</div><!-- .site-info -->
	</footer><!-- #colophon -->


<?php wp_footer(); ?>
</body>
</html>