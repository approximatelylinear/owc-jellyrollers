<?php
/**
 * @package kelly
 */

$formats = get_theme_support( 'post-formats' );
$format = get_post_format();
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php if ( 'link' == $format ) : ?>
			<?php the_title( '<h1 class="entry-title"><a href="' . esc_url( kelly_get_link_url() ) . '" rel="bookmark">', '</a></h1>' ); ?>
		<?php else : ?>
			<h1
				class="entry-title"
				style="<?php echo has_post_thumbnail() ? 'background-image: url(' . get_the_post_thumbnail_url() . ');' : '' ?>"
			>
				<div class="title-overlay">
					<span><?php echo (get_post_meta(get_the_ID(), 'header_text', true) ?: get_the_title()); ?></span>
				</div>
			</h1>
		<?php endif; ?>

		<div class="entry-meta">
			<?php kelly_posted_on(); ?>
		</div><!-- .entry-meta -->
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

	<footer class="entry-meta">
		<?php
				/* translators: used between list items, there is a space after the comma */
				$categories_list = get_the_category_list( __( ', ', 'kelly' ) );
				if ( $categories_list && kelly_categorized_blog() ) :
			?>
			<span class="cat-links">
				<?php printf( __( 'Posted in %1$s', 'kelly' ), $categories_list ); ?>
			</span>
			<?php endif; // End if categories ?>

			<?php
				/* translators: used between list items, there is a space after the comma */
				$tags_list = get_the_tag_list( '', __( ', ', 'kelly' ) );
				if ( $tags_list ) :
			?>
			<span class="tags-links">
				<?php printf( __( 'Tagged %1$s', 'kelly' ), $tags_list ); ?>
			</span>
		<?php endif; // End if $tags_list ?>

		<?php edit_post_link( __( 'Edit', 'kelly' ), '<span class="edit-link">', '</span>' ); ?>
	</footer><!-- .entry-meta -->
</article><!-- #post-## -->
