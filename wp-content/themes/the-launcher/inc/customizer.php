<?php
/**
 * the launcher Theme Customizer
 *
 * @package the launcher
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function the_launcher_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';
}
add_action( 'customize_register', 'the_launcher_customize_register' );

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function the_launcher_customize_preview_js() {
	wp_enqueue_script( 'the_launcher_customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20130508', true );
}
add_action( 'customize_preview_init', 'the_launcher_customize_preview_js' );
// Our Product detail's
if(class_exists( 'WP_Customize_control')){
    class the_launcher_Custom_Control extends WP_Customize_Control
    {
        public function render_content()
        {?>
            <label>
                <div class="user_sticky_note">
                    <span class="sticky_info_row"><a class="button" href="http://accesspressthemes.com/theme-demos/?theme=the-launcher" target="_blank"><?php _e('Live Demo','the-launcher'); ?></a></span>
                    <span class="sticky_info_row"><a class="button" href="http://doc.accesspressthemes.com/the-launcher-documentation/" target="_blank"><?php _e('Documentation','the-launcher'); ?></a></span>
                    <span class="sticky_info_row"><a class="button" href="https://accesspressthemes.com/support/forum/themes/free-themes/the-launcher/" target="_blnak"><?php _e('Support Forum','the-launcher'); ?></a></span>
                    <span class="sticky_info_row"><a class="button" href="https://wpall.club/" target="_blank"><?php _e('More Wordpress resources','the-launcher'); ?></a></span>
                </div>
                <h2 class="customize-title"><?php echo esc_html( $this->label ); ?></h2>
                <br />
                <span class="customize-text_editor_desc">                  
                  <img src="<?php echo get_template_directory_uri() ?>/images/the-launcher-pro-screen.png"/>
                      <ul class="admin-pro-feature-list">   
                        <li><span><?php _e('Fully built on customizer!','the-launcher'); ?> </span></li>
                        <li><span><?php _e('Woocommerce Compatible','the-launcher'); ?> </span></li>
                        <li><span><?php _e('Home Section Re-Order','the-launcher'); ?> </span></li>
                        <li><span><?php _e('One Click Demo Import','the-launcher'); ?> </span></li>
                        <li><span><?php _e('3 Menu Styles','the-launcher'); ?> </span></li>
                        <li><span><?php _e('Multiple Team Layout','the-launcher'); ?> </span></li>
                        <li><span><?php _e('Custom Template Color','the-launcher'); ?> </span></li>
                        <li><span><?php _e('Highly configurable One Page home page','the-launcher'); ?> </span></li>
                        <li><span><?php _e('Multiple Blog layout','the-launcher'); ?> </span></li>
                        <li><span><?php _e('Flexible Page Options','the-launcher'); ?> </span></li>
                        <li><span><?php _e('Multiple Portfolio Page Layouts','the-launcher'); ?> </span></li>
                        <li><span><?php _e('Multiple Service Page Layouts','the-launcher'); ?> </span></li>
                        <li><span><?php _e('3 Page Templates','the-launcher'); ?> </span></li>
                        <li><span><?php _e('NewsLetter Section','the-launcher'); ?> </span></li>
                        <li><span><?php _e('Feature Section','the-launcher'); ?> </span></li>
                        <li><span><?php _e('Map Section','the-launcher'); ?> </span></li>
                        <li><span><?php _e('Video Section','the-launcher'); ?> </span></li>
                        <li><span><?php _e('13 Inbuilt useful Shortcodes','the-launcher'); ?> </span></li>
                        <li><span><?php _e('Advanced Typography Options','the-launcher'); ?> </span></li>
                    </ul>
                    <a href="https://accesspressthemes.com/wordpress-themes/the-launcher-pro" class="button button-primary buynow" target="_blank"><?php _e('Buy Now','the-launcher'); ?></a>
                </span>
            </label>
            <?php
        }
    }
}