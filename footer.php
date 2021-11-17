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
if ( ! defined( 'ABSPATH' ) ) { exit; }
?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">

		<?php 
		if(has_nav_menu('menu-2')):
			wp_nav_menu( array(
				'theme_location' => 'menu-2',
				'menu_id'        => 'footer-menu'
			) );
		endif;
		
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
				printf( esc_html__( 'Theme: %1$s', 'ivanicof' ), 'ivanicof');?>
				</div>
			
		</div><!-- .site-info -->
		<div id="button-up"><i class="fa fa-chevron-up"></i></div>
		
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
