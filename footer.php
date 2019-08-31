<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ivanicof
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
		<?php 
		if( get_theme_mod('ivanicof_footer_social_icons',ivanicof_setting_default('ivanicof_footer_social_icons')) ):
			do_action('ivanicof_social_icons'); 
		endif;?>
		<div class="site-info">
			
			<?php

			if( '' != get_theme_mod('ivanicof_footer_text', '') ):?>
				<div>
					<?php echo esc_html(get_theme_mod('ivanicof_footer_text', ''));?>
				</div>
			<?php endif; ?>
				<div><?php
				/* translators: %s: copirigth, date. */
				printf( esc_html__( '&copy; %s', 'ivanicof' ), esc_html(date('Y')) );?>
				<span class="sep"> | </span>
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'ivanicof' ), 'ivanicof', '<a href="https://juanrafaelsimarro.com/">JRS</a>' );?>
				</div>
			
		</div><!-- .site-info -->
		<div id="button-up"><i class="fa fa-chevron-up"></i></div>
		
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
