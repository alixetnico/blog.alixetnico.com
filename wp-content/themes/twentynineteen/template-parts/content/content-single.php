<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php if ( ! twentynineteen_can_show_post_thumbnail() ) : ?>
	<header class="entry-header">
		<?php get_template_part( 'template-parts/header/entry', 'header' ); ?>
	</header>
	<?php endif; ?>

	<div class="entry-content">
		<?php
		the_content(
			sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers */
					__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'twentynineteen' ),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				get_the_title()
			)
		);

		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'twentynineteen' ),
				'after'  => '</div>',
			)
		);
		?>
	</div><!-- .entry-content -->
	<footer class="entry-footer">
		Vous avez aimé cet article ?<br>
		<a href="https://twitter.com/intent/tweet?url=<?php echo get_permalink(); ?>&text=<?php the_title(); ?>&via=alixetnico&hashtags=<?php $post_tags = get_the_tags();
 
if ( $post_tags ) {
    foreach( $post_tags as $tag ) {
    echo $tag->name . ',';
    }
} ?>alixetnico" target="_blank" class="Twitter">Partagez-le</a> <i class="fab fa-twitter"></i><br>
	<a href="/sabonner" class="Twitter">Abonnez-vous</a> <i class="fas fa-envelope-open-text"></i></footer><!-- .entry-footer -->

	<?php if ( ! is_singular( 'attachment' ) ) : ?>
		<?php get_template_part( 'template-parts/post/author', 'bio' ); ?>
	<?php endif; ?>

</article><!-- #post-<?php the_ID(); ?> -->
