<?php
/**
 * ivanicof Theme Customizer defaults
 *
 * @package ivanicof
 */

/**
* Set our Customizer default options
*/
if ( ! function_exists( 'ivanicof_setting_default' ) ) {

	function ivanicof_setting_default($theme_mod) {
		$customizer_defaults = array(
			'ivanicof_typograpphy_site_title'  			=> 'Norican',
			'ivanicof_typograpphy_titles'      			=> 'Unna',
			'ivanicof_typograpphy_texts'       			=> 'Open Sans',
			'ivanicof_sidebar'                 			=> 'sidebar-right',
			'ivanicof_content_width'           			=> 100,
			'ivanicof_typograpphy_site_title_weight' 	=> '400',
			'ivanicof_typograpphy_site_title_style' 	=> 'normal',
			'ivanicof_typograpphy_titles_weight' 		=> '400',
			'ivanicof_typograpphy_titles_style'    		=> 'normal',
			'ivanicof_typograpphy_texts_weight' 		=> '400',
			'ivanicof_typograpphy_texts_style'  		=> 'normal',
			'ivanicof_header_image_overlap'				=> 7,
			'ivanicof_header_button_down'      			=> true,
			'ivanicof_header_search_form'				=> true,
			'ivanicof_header_social_icons'				=> true,
			'ivanicof_footer_social_icons'				=> true,
			'ivanicof_subtitle_color'					=> '999',
			'ivanicof_main_menu_color_desktop'			=> 'fff',
			'ivanicof_main_menu_color_mobile'			=> '000000'
		);

		return isset($customizer_defaults[$theme_mod]) ? $customizer_defaults[$theme_mod] : false;
	}
}