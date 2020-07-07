<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package ivanicof
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }
if(!function_exists('ivanicof_social_links')):

    function ivanicof_social_links(){
        ?>
            <div class="social_icons">
                <?php 
                    $facebook = get_theme_mod('ivanicof_facebook');
                    $twitter = get_theme_mod('ivanicof_twitter');
                    $instagram = get_theme_mod('ivanicof_instagram');
                    $pinterest = get_theme_mod('ivanicof_pinterest');
                    $linkedin = get_theme_mod('ivanicof_linkedin');
                    $youtube = get_theme_mod('ivanicof_youtube');
                    $tumblr = get_theme_mod('ivanicof_tumblr');
                    $github = get_theme_mod('ivanicof_github');

                if(!empty($facebook)):?>
                    <a href="<?php echo esc_url($facebook); ?>"><i class="fa fa-facebook" title="facebook"></i></a>
                <?php endif;
                if(!empty($twitter)):?>
                    <a href="<?php echo esc_url($twitter); ?>"><i class="fa fa-twitter" title="twitter"></i></a>
                <?php endif;
                if(!empty($instagram)):?>
                    <a href="<?php echo esc_url($instagram); ?>"><i class="fa fa-instagram" title="instagram"></i></a>
                <?php endif;
                if(!empty($pinterest)):?>
                <a href="<?php echo esc_url($pinterest); ?>"><i class="fa fa-pinterest-p" title="pinterest"></i></a>
                <?php endif;
                if(!empty($linkedin)):?>
                <a href="<?php echo esc_url($linkedin); ?>"><i class="fa fa-linkedin" title="linkedin"></i></a>
                <?php endif;
                if(!empty($youtube)):?>
                    <a href="<?php echo esc_url($youtube); ?>"><i class="fa fa-youtube-play" title="youtube"></i></a>
                <?php endif;
                if(!empty($tumblr)):?>
                    <a href="<?php echo esc_url($tumblr); ?>"><i class="fa fa-tumblr" title="tumbrl"></i></a>
                <?php endif;
                if(!empty($github)):?>
                    <a href="<?php echo esc_url($github); ?>"><i class="fa fa-github" title="github"></i></a>
                <?php endif;?>
            </div>
        <?php

    }

endif;

add_action('ivanicof_social_icons','ivanicof_social_links');