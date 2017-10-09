<?php 

/*
Template Name: Home Page
*/

get_header(); ?>
                      
            <div class="tm-page-content">                
                
                <!-- #home --> 
                <section id="tm-section-1" class="row tm-section" style="background-image: url(<?php echo fw_resize(fw_get_db_settings_option('section1-bg-image/url', 'http://strip/wp-content/themes/strip-theme/img/strip-bg-01.jpg'), 2040, 600); ?>);">

                    <div class="tm-white-curve-left col-xs-12 col-sm-12 col-md-12 col-lg-7 col-xl-6">
                        <div class="tm-white-curve-left-rec"></div>
                        <div class="tm-white-curve-left-circle"></div>
                        <div class="tm-white-curve-text">
                            <h2 class="tm-section-header blue-text"><?php echo fw_get_db_settings_option('section1-header1'); ?></h2>
                            <p><?php echo fw_get_db_settings_option('section1-text1'); ?></p>        
                        </div>                        
                    </div>

                    <div class="tm-home-right col-xs-12 col-sm-12 col-md-12 col-lg-5 col-xl-6">
                        <h2 class="tm-section-header"><?php echo fw_get_db_settings_option('section1-header2'); ?></h2>
                        <p class="thin-font"><?php echo fw_get_db_settings_option('section1-text2'); ?></p>
                    </div>
                    
                </section> <!-- #home -->

                <!-- #services -->
                <section id="tm-section-2" class="row tm-section" style="background-image: url(<?php echo fw_resize(fw_get_db_settings_option('section2-bg-image/url', 'http://strip/wp-content/themes/strip-theme/img/strip-bg-02.jpg'), 2200, 600); ?>);">
                    <div class="tm-flex-center col-xs-12 col-sm-6 col-md-6 col-lg-5 col-xl-6">
                        <img src="<?php echo fw_resize(fw_get_db_settings_option('section2-image/url', 'http://strip/wp-content/themes/strip-theme/img/strip-01.jpg'), 450, 300); ?>" alt="Image" class="img-fluid tm-img"> 
                    </div>

                    <div class="tm-white-curve-right col-xs-12 col-sm-6 col-md-6 col-lg-7 col-xl-6">
                        
                        <div class="tm-white-curve-right-circle"></div>
                        <div class="tm-white-curve-right-rec"></div>
                        
                        <div class="tm-white-curve-text">
                            <h2 class="tm-section-header red-text"><?php echo fw_get_db_settings_option('section2-header1'); ?></h2>
                            <p><?php echo fw_get_db_settings_option('section2-text1'); ?></p>
                            <p class="thin-font"><?php echo fw_get_db_settings_option('section2-text2'); ?></p>    
                        </div>
                        
                    </div>
                </section> <!-- #services -->

                <!-- #about --> 
                <section id="tm-section-3" class="row tm-section" style="background-image: url(<?php echo fw_resize(fw_get_db_settings_option('section3-bg-image/url', 'http://strip/wp-content/themes/strip-theme/img/strip-bg-03.jpg'), 2200, 600); ?>);">
                    <div class="tm-white-curve-left col-xs-12 col-sm-6 col-md-6 col-lg-7 col-xl-6">
                        <div class="tm-white-curve-left-rec">
                            
                        </div>
                        <div class="tm-white-curve-left-circle">
                            
                        </div>
                        <div class="tm-white-curve-text">
                            <h2 class="tm-section-header gray-text"><?php echo fw_get_db_settings_option('section3-header1'); ?></h2>
                            <p class="thin-font"><?php echo fw_get_db_settings_option('section3-text1'); ?></p>
                            <p><?php echo fw_get_db_settings_option('section3-text2'); ?></p>    
                        </div>
                        
                    </div>
                    <div class="tm-flex-center col-xs-12 col-sm-6 col-md-6 col-lg-5 col-xl-6"> 
                        <img src="<?php echo fw_resize(fw_get_db_settings_option('section3-image/url', 'http://strip/wp-content/themes/strip-theme/img/strip-02.jpg'), 450, 300); ?>" alt="Image" class="img-fluid tm-img">
                    </div>
                </section> <!-- #about -->

                <!-- #contact -->
                <section id="tm-section-4" class="row tm-section" style="background-image: url(<?php echo fw_resize(fw_get_db_settings_option('section4-bg-image/url', 'http://strip/wp-content/themes/strip-theme/img/strip-bg-04.jpg'), 2200, 600); ?>);">
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-5 col-xl-6 tm-contact-left">
                        <h2 class="tm-section-header thin-font col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12"><?php echo fw_get_db_settings_option('section4-header1'); ?></h2>
                        <form action="index.html" method="post" class="contact-form">

                            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-12 col-xl-6 tm-contact-form-left">
                                <div class="form-group">
                                    <input type="text" id="contact_name" name="contact_name" class="form-control" placeholder="Name"  required/>
                                </div>
                                <div class="form-group">
                                    <input type="email" id="contact_email" name="contact_email" class="form-control" placeholder="Email"  required/>
                                </div>
                                <div class="form-group">
                                    <input type="text" id="contact_subject" name="contact_subject" class="form-control" placeholder="Subject"  required/>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-12 col-xl-6 tm-contact-form-right">
                                <div class="form-group">
                                    <textarea id="contact_message" name="contact_message" class="form-control" rows="6" placeholder="Message" required></textarea>
                                </div>
                                
                                <button type="submit" class="btn submit-btn">Send It Now</button>
                            </div>

                        </form>   
                    </div>

                    <div class="tm-white-curve-right col-xs-12 col-sm-6 col-md-6 col-lg-7 col-xl-6">
                        
                        <div class="tm-white-curve-right-circle"></div>
                        <div class="tm-white-curve-right-rec"></div>
                        
                        <div class="tm-white-curve-text">
                            
                            <h2 class="tm-section-header green-text"><?php echo fw_get_db_settings_option('section4-header2'); ?></h2>
                            <p><?php echo fw_get_db_settings_option('section4-text1'); ?></p>

                            <h3 class="tm-section-subheader green-text">Our Address</h3>
                            <address><?php echo fw_get_db_settings_option('address'); ?></address>
                            
                            <div class="contact-info-links-container">
                                <span class="green-text contact-info">
                                	Tel: <a href="tel:<?php echo fw_get_db_settings_option('phone'); ?>" class="contact-info-link"><?php echo fw_get_db_settings_option('phone'); ?></a></span>
                                <span class="green-text contact-info">
                                	Email: <a href="mailto:info@company.com" class="contact-info-link"><?php echo fw_get_db_settings_option('email'); ?></a></span>    
                            </div>
                            
                        </div>                        

                    </div>
                </section> <!-- #contact -->

<?php get_footer(); ?>