<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package kelly
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<h1
			class="entry-title"
			style="<?php echo has_post_thumbnail() ? 'background-image: url(' . get_the_post_thumbnail_url() . ');' : '' ?>"
		>
			<div class="title-overlay">
				<span><?php echo (get_post_meta(get_the_ID(), 'header_text', true) ?: get_the_title()); ?></span>
			</div>
		</h1>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'kelly' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->
	<?php edit_post_link( __( 'Edit', 'kelly' ), '<footer class="entry-meta"><span class="edit-link">', '</span></footer>' ); ?>
</article><!-- #post-## -->
