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
			Copyright &copy; <?php echo date("Y"); ?> CBCC
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
