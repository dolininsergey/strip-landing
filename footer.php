<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package strip-theme
 */

?>
					    <!-- footer -->
    <footer class="row tm-footer" style="background-image: url(<?php echo fw_resize(fw_get_db_settings_option('footer-bg-image/url', 'http://strip/wp-content/themes/strip-theme/img/strip-bg-05.jpg'), 1540, 300); ?>);">
        
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">

            <p class="text-xs-center tm-footer-text"><?php echo fw_get_db_settings_option('copyright'); ?></p>
            
        </div>
        
    </footer>                      

            </div>        
        </div> <!-- .container -->
                   
<?php wp_footer(); ?>
    </body>
    </html>
