<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package the launcher
 */?>

	</div><!-- #content -->
<?php if(get_theme_mod('the_launcher_enable_footer')== ''): ?>
	<footer id="colophon" class="site-footer" role="contentinfo">
        <div id="launcher-dynamic-styles"></div>
        <div id="launcher-dynamic-styles-dark-bg"></div>
    	<div class="ak-container">
                <?php
                if(is_active_sidebar('the-launcher-footer-1') || is_active_sidebar('the-launcher-footer-2') || is_active_sidebar('the-launcher-footer-3')):
                ?>
                <div class="footer_area_launcher clearfix">
                    <?php
                        if(is_active_sidebar('the-launcher-footer-1')):
                            ?>
                            <div class="sidebar_one">
                                <?php
                                dynamic_sidebar('the-launcher-footer-1');
                                ?>
                            </div>
                            <?php
                        endif;
                        if(is_active_sidebar('the-launcher-footer-2')):
                            ?>
                            <div class="sidebar_two">
                                <?php
                                dynamic_sidebar('the-launcher-footer-2');
                                ?>
                            </div>
                            <?php
                        endif;
                        if(is_active_sidebar('the-launcher-footer-3')):
                            ?>
                            <div class="sidebar_three">
                                <?php
                                dynamic_sidebar('the-launcher-footer-3');
                                ?>
                            </div>
                            <?php
                        endif;
                    ?>
                </div>
                <?php endif; ?>
                <div class="site-info">
                    <?php 
                        $the_launcher_footer_text = get_theme_mod('the_launcher_footer_copy_right');
                    ?>
                    <span class="footer_text"><?php if($the_launcher_footer_text){ ?><span class="text_input"><?php echo esc_attr($the_launcher_footer_text); ?><span class="sep"> | </span></span><?php } ?>  <?php _e('WordPress Theme','the-launcher');?> : <a target="_blank" href="<?php echo esc_url('http://demo.accesspressthemes.com/the-launcher'); ?>"><?php _e('The-Launcher','the-launcher'); ?></a> <?php _e('by','the-launcher');?> <a target="_blank" href="<?php echo esc_url('http://accesspressthemes.com/') ?>"><?php _e('AccessPress Themes','the-launcher');?></a></span>
            	</div><!-- .site-info -->
    	</div><!-- ak-container-->
	</footer><!-- #colophon -->
 <?php endif; ?>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
