<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package strip-theme
 */

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Strip Bootstrap 4.0 Theme</title>
    <?php wp_head(); ?>
</head>

    <body style="background-image: url(<?php echo fw_resize(fw_get_db_settings_option('common-bg/url', 'http://strip/wp-content/themes/strip-theme/img/strip-bg.jpg'), 1040, 690); ?>);">
        <div class="container tm-container">
            
            <div class="row navbar-row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 navbar-container" style="background-color: <?php echo fw_get_db_settings_option('header-color'); ?>">
                    
                    <a href="javascript:void(0)" class="navbar-brand" id="go-to-top"><?php echo fw_get_db_settings_option('logo-text'); ?></a>
                    
                    <nav class="navbar navbar-full">
                        
                        <div class="collapse navbar-toggleable-md" id="tmNavbar">                            
                                 <?php
                                wp_nav_menu( array(
                                    'theme_location'  => '',
                                    'menu'            => '',
                                    'container'       => 'ul',
                                    'container_class' => 'nav navbar-nav',
                                    'container_id'    => '',
                                    'menu_class'      => 'menu',
                                    'menu_id'         => '',
                                    'echo'            => true,
                                    'fallback_cb'     => 'wp_page_menu',
                                    'before'          => '',
                                    'after'           => '',
                                    'link_before'     => '',
                                    'link_after'      => '',
                                    'items_wrap'      => '<ul id = "%1$s" class = "%2$s">%3$s</ul>',
                                    'depth'           => 0,
                                    'walker'          => '',
                                ) );
                                 ?>                               
                        </div>

                    </nav>    
                    
                    <button class="navbar-toggler hidden-lg-up" type="button" data-toggle="collapse" data-target="#tmNavbar">
                        &#9776;
                    </button>
                    
                </div>
            </div>
