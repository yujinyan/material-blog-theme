<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package material-blog
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php if( has_post_thumbnail() ) {
		echo '<div class="feature-image" style="background-image: url(' ;
		echo the_post_thumbnail_url();
		echo ')"></div>';

	} ?>
	<div class="entry-wrapper">
		<header class="entry-header">
			<?php
				if ( is_single() ) {
					the_title( '<h1 class="entry-title">', '</h1>' );
				} else {
					the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
				}

			if ( 'post' === get_post_type() ) : ?>
			<div class="entry-meta">
				<?php material_blog_posted_on(); ?>
				<?php material_blog_entry_footer(); ?>
			</div><!-- .entry-meta -->
			<?php
			endif; ?>
		</header><!-- .entry-header -->

		<div class="entry-content">
			<?php
				the_content( sprintf(
					/* translators: %s: Name of current post. */
					wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'material-blog' ), array( 'span' => array( 'class' => array() ) ) ),
					the_title( '<span class="screen-reader-text">"', '"</span>', false )
				) );

				wp_link_pages( array(
					'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'material-blog' ),
					'after'  => '</div>',
				) );
			?>
		</div><!-- .entry-content -->
	</div><!-- .entry-wrapper -->
	<footer class="entry-footer">
		<?php
			if ( ! is_single() && ! post_password_required() && ( comments_open() || get_comments_number() ) ) {
				echo '<span class="comments-link">';
				comments_popup_link( esc_html__( '评论', 'material-blog' ), esc_html__( '1 个评论', 'material-blog' ), esc_html__( '% 个评论', 'material-blog' ) );
				echo '</span>';
				echo '<span class="continue-reading">继续阅读</span>';
			}?>
		<?php /*material_blog_entry_footer(); */?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
