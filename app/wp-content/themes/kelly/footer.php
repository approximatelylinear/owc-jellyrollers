<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package kelly
 */
?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<?php do_action( 'kelly_credits' ); ?>
			<a href="http://wordpress.org/" rel="generator"><?php printf( __( 'Proudly powered by %s', 'kelly' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( __( 'Theme: %1$s by %2$s.', 'kelly' ), 'Kelly', '<a href="https://wordpress.com/themes/" rel="designer">WordPress.com</a>' ); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>

<?php if (is_page('donate')): ?>
	<script type="text/javascript" src="https://js.squareup.com/v2/paymentform"></script>
	<script src="<?php bloginfo('template_directory'); ?>/js/sq-donation.js" charset="utf-8"></script>
<?php endif; ?>
