<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
		<?php get_template_part( 'template-parts/footer/footer', 'widgets' ); ?>
		<div class="site-info">
			<?php $blog_info = get_bloginfo( 'name' ); ?>
			<?php if ( ! empty( $blog_info ) ) : ?>
			<?php endif; ?>
			<?php
			if ( function_exists( 'the_privacy_policy_link' ) ) {
				the_privacy_policy_link( '', '<span role="separator" aria-hidden="true"></span>' );
			}
			?>
			<?php if ( has_nav_menu( 'footer' ) ) : ?>
				<nav class="footer-navigation" aria-label="<?php esc_attr_e( 'Footer Menu', 'twentynineteen' ); ?>">
					<?php
					wp_nav_menu(
						array(
							'theme_location' => 'footer',
							'menu_class'     => 'footer-menu',
							'depth'          => 1,
						)
					);
					?>
				</nav><!-- .footer-navigation -->
			<?php endif; ?>
			<br>
			<?php if(function_exists('bcn_display'))
{
    bcn_display();
}?><?php if (is_single()) {
			$tags_list = get_the_tag_list( '#', __( ' · #', 'twentynineteen' ) );
			if ( $tags_list ) {
				printf(
					/* translators: 1: SVG icon. 2: posted in label, only visible to screen readers. 3: list of tags. */
					' · <span class="tags-links">%1$s<span class="screen-reader-text">%2$s </span>%3$s</span>',
					twentynineteen_get_icon_svg( 'xtag', 16 ),
					__( '', 'twentynineteen' ),
					$tags_list
				); // WPCS: XSS OK.
			}
}
			?><br>Propulsé par <a href="https://wordpress.org/">WordPress</a> · Développé par <a href="https://nlt.dev/">NLT.dev</a> · <a href="https://github.com/alixetnico/blog.alixetnico.com">1.0.0.</a><br>
			© <a href="/2019">2019</a> <a class="site-name" href="https://www.alixetnico.com/">Alix & Nico</a> ®</div><!-- .site-info -->
	</footer><!-- #colophon -->

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
