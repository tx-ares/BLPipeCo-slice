<?php 
/* Template Name: Homepage */
 
get_header(); ?>

<!-- <section class="main-content">   
 <div class="row compressed fh-col" eq-height>
                <div class="col-md-12 col-sm-12 col-xs-12 main" eq-col>
                    <div class="slider-width-hack"></div>
                    <div class="slider home-slider" data-slick='{"autoplay": "true", "autoplaySpeed":5000}'>
                        <?php echo blpc_primary_carousel(); ?>
                    </div>
                    <div class="seo">
                    	<h1 style="display:none;">B&amp;L Pipeco</h1>
						<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                        <h3 class="title"><div class="container-fluid"><?php the_title(); ?></div></h3>
                        <div class="container-fluid">
                            <?php the_content(); ?>
                        </div>
                        <?php endwhile; endif; ?>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 right-content" eq-col>

                    <div class="row compressed fh-col">
                        <div class="col-lg-6 col-md-12 col1">

                            <div class="tframe fh fw">
                                <div class="trow">
                                    <div class="tcell hh valign-top news">
                                        <div class="row row-compressed">
                                            <div class="col-xs-12">
                                                <h3 class="title">News</h3>
                                                <?php echo g2is_home_news_list(); ?>
                                                <div class="pull-right more-links">
                                                    <a href="<?php echo get_site_url(); ?>/insights/news">All News <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                                                    <a href="http://blog.g2-is.com/blog" target="_blank">View Blog <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                                                    <a href="<?php echo get_site_url(); ?>/insights/webinars">View Webinars <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="trow">
                                    <div class="tcell hh valign-top cta">				
                                        <div class="slider-width-hack"></div>
                                        <div class="slider home-cta">
                                            <?php echo g2is_secondary_carousel(); ?>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 col2 services">
                            <div class="row compressed" eq-height>
                                <?php echo g2is_home_services_list(); ?>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
</section> -->


<!-- ******************************************************* -->
<!-- Banner - Carousel -->
<!-- ******************************************************* -->
<section class="banner homepage">
    <div class="row" eq-height>
        <div class="col-md-12 col-sm-12 col-xs-12 bg-content pull-right" eq-col">
            <div class="slider-width-hack"></div>
            <div class="slider home-slider" data-slick='{"autoplay": "true", "autoplaySpeed":5000}'>
                <?php echo blpc_primary_carousel(); ?>
            </div>
        </div>
    </div>
</section>

 <section class="main-content">
    <!-- ******************************************************* -->
    <!-- Main Content -->
    <!-- ******************************************************* -->
    <div class="row compressed">
        <div class="col-md-12 col-sm-12 col-xs-12 main">
            <div class="row compressed">
                <div class="col-md-12">
                    <div class="container-fluid no-padding">
                        <div class="row compressed">
                            <div class="col-md-12 col-xs-12">

                                <div class="feature-box white fullpage-centered">
			                        <h1 class="title text-upcase text-center no-margin-bot">
			                        	<?php the_title(); ?>			                        	
			                        </h1>
			                        <p class="subtitle text-center">
			                            <?php the_content(); ?>
			                        </p>
                                </div>

                                <div class="feature-slide-box no-img">
                                    <div class="row slider-row fh-col" eq-height>
                                        <div class="slide-over-left panel" eq-col>
                                            <div class="slider-container fw fh">
                                                <div class="loading-container">
                                                    <i class="fa fa-spinner fa-spin fa-3x fa-fw"></i>
                                                </div>
                                                <span class="panel-title">Casing &amp; Tubing Products</span>
                                                <div class="panel-slider" eh-height>
                                                    <!-- Start Slider -->
                                                    <div class="slide-content" eq-col>
                                                        <img src="<?php echo get_template_directory_uri(); ?>/_assets/images/ui/Pipes.png" class="icon">
                                                        <h3 class="text-upcase">Casing &amp; Tubing Products</h3>
                                                        <p> Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum.</p>
                                                    </div>
                                                    <div class="slide-content" eq-col>
                                                        <img src="<?php echo get_template_directory_uri(); ?>/_assets/images/ui/canister2.png" class="icon">
                                                        <h3 class="text-upcase">Casing &amp; Tubing Products</h3>
                                                        <p> Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum.</p>
                                                    </div>
                                                    <div class="slide-content" eq-col>
                                                        <img src="<?php echo get_template_directory_uri(); ?>/_assets/images/ui/barometer.png" class="icon">
                                                        <h3 class="text-upcase">Casing &amp; Tubing Products</h3>
                                                        <p> Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum.</p>
                                                    </div>
                                                    <div class="slide-content" eq-col>
                                                        <img src="<?php echo get_template_directory_uri(); ?>/_assets/images/ui/pipevalve.png" class="icon">
                                                        <h3 class="text-upcase">Casing &amp; Tubing Products</h3>
                                                        <p> Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum.</p>
                                                    </div>
                                                    <div class="slide-content" eq-col>
                                                        <img src="<?php echo get_template_directory_uri(); ?>/_assets/images/ui/wrenchhand.png" class="icon">
                                                        <h3 class="text-upcase">Casing &amp; Tubing Products</h3>
                                                        <p> Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum.</p>
                                                    </div>
                                                    <div class="slide-content" eq-col>
                                                        <img src="<?php echo get_template_directory_uri(); ?>/_assets/images/ui/Pipes.png" class="icon">
                                                        <h3 class="text-upcase">Casing &amp; Tubing Products</h3>
                                                        <p> Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum.</p>
                                                    </div>
                                                    <div class="slide-content" eq-col>
                                                        <img src="<?php echo get_template_directory_uri(); ?>/_assets/images/ui/canister.png" class="icon">
                                                        <h3 class="text-upcase">Casing &amp; Tubing Products</h3>
                                                        <p> Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum.</p>
                                                    </div>
                                                    <div class="slide-content" eq-col>
                                                        <img src="<?php echo get_template_directory_uri(); ?>/_assets/images/ui/barometer.png" class="icon">
                                                        <h3 class="text-upcase">Casing &amp; Tubing Products</h3>
                                                        <p> Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum.</p>
                                                    </div>
                                                    <div class="slide-content" eq-col>
                                                        <img src="<?php echo get_template_directory_uri(); ?>/_assets/images/ui/pipevalve.png" class="icon">
                                                        <h3 class="text-upcase">Casing &amp; Tubing Products</h3>
                                                        <p> Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum.</p>
                                                    </div>
                                                    <div class="slide-content" eq-col>
                                                        <img src="<?php echo get_template_directory_uri(); ?>/_assets/images/ui/wrenchhand.png" class="icon">
                                                        <h3 class="text-upcase">Casing &amp; Tubing Products</h3>
                                                        <p> Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum.</p>
                                                    </div>
                                                </div>
                                                <!-- End Slider -->
                                            </div>
                                            <div class="panel-label">
                                                <h2 class="text-flip text-upcase">Casing &amp; Tubing Products</h2>
                                                <div class="txt-content">
                                                    <img src="<?php echo get_template_directory_uri(); ?>/_assets/images/ui/Pipes.png" class="icon">
                                                    <p> Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="slide-over-right panel" eq-col>
                                            <div class="slider-container fw fh">
                                                <div class="loading-container">
                                                    <i class="fa fa-spinner fa-spin fa-3x fa-fw"></i>
                                                </div>
                                                <span class="panel-title">Upstream Products</span>
                                                <div class="panel-slider" eh-height>
                                                    <!-- Start Slider -->
                                                    <div class="slide-content" eq-col>
                                                        <img src="<?php echo get_template_directory_uri(); ?>/_assets/images/ui/Pipes-white.png" class="icon">
                                                        <h3 class="text-upcase">Upstream Products</h3>
                                                        <p> Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum.</p>
                                                    </div>
                                                    <div class="slide-content" eq-col>
                                                        <img src="<?php echo get_template_directory_uri(); ?>/_assets/images/ui/canister-white.png" class="icon">
                                                        <h3 class="text-upcase">Upstream Products</h3>
                                                        <p> Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum.</p>
                                                    </div>
                                                    <div class="slide-content" eq-col>
                                                        <img src="<?php echo get_template_directory_uri(); ?>/_assets/images/ui/barometer-white.png" class="icon">
                                                        <h3 class="text-upcase">Upstream Products</h3>
                                                        <p> Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum.</p>
                                                    </div>
                                                    <div class="slide-content" eq-col>
                                                        <img src="<?php echo get_template_directory_uri(); ?>/_assets/images/ui/pipevalve-white.png" class="icon">
                                                        <h3 class="text-upcase">Upstream Products</h3>
                                                        <p> Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum.</p>
                                                    </div>
                                                    <div class="slide-content" eq-col>
                                                        <img src="<?php echo get_template_directory_uri(); ?>/_assets/images/ui/wrenchhand-white.png" class="icon">
                                                        <h3 class="text-upcase">Upstream Products</h3>
                                                        <p> Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum.</p>
                                                    </div>
                                                    <div class="slide-content" eq-col>
                                                        <img src="<?php echo get_template_directory_uri(); ?>/_assets/images/ui/Pipes-white.png" class="icon">
                                                        <h3 class="text-upcase">Upstream Products</h3>
                                                        <p> Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum.</p>
                                                    </div>
                                                    <div class="slide-content" eq-col>
                                                        <img src="<?php echo get_template_directory_uri(); ?>/_assets/images/ui/canister-white.png" class="icon">
                                                        <h3 class="text-upcase">Upstream Products</h3>
                                                        <p> Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum.</p>
                                                    </div>
                                                    <div class="slide-content" eq-col>
                                                        <img src="<?php echo get_template_directory_uri(); ?>/_assets/images/ui/barometer-white.png" class="icon">
                                                        <h3 class="text-upcase">Upstream Products</h3>
                                                        <p> Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum.</p>
                                                    </div>
                                                    <div class="slide-content" eq-col>
                                                        <img src="<?php echo get_template_directory_uri(); ?>/_assets/images/ui/pipevalve-white.png" class="icon">
                                                        <h3 class="text-upcase">Upstream Products</h3>
                                                        <p> Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum.</p>
                                                    </div>
                                                    <div class="slide-content" eq-col>
                                                        <img src="<?php echo get_template_directory_uri(); ?>/_assets/images/ui/wrenchhand-white.png" class="icon">
                                                        <h3 class="text-upcase">Upstream Products</h3>
                                                        <p> Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum.</p>
                                                    </div>
                                                </div>
                                                <!-- End Slider -->
                                            </div>
                                            <div class="panel-label">
                                                <h2 class="text-upcase text-flip">Upstream Products</h2>
                                                <div class="txt-content">
                                                    <img src="<?php echo get_template_directory_uri(); ?>/_assets/images/ui/barrels.png" class="icon">
                                                    <p> Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ******************************************************* -->
    <!-- Secondary Content -->
    <!-- ******************************************************* -->
    <div class="row compressed">
        <div class="col-md-12 col-sm-12 col-xs-12 secondary">
            <div class="row compressed">
                <div class="col-md-12">
                    <div class="container-fluid no-padding">
                        <div class="row compressed row-no-padding" eq-height>
                            <div class="col-md-7 col-sm-7 col-xs-12" eq-col>
                                <div class="image-cta slateblue2 fh">
                                    <div class="img-content">
                                        <img alt="B&L Pipe Co" data-src=">0:http://placehold.it/570x300" />
                                        <div class="txt-content">
                                            <h2>Services</h2>
                                            <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                        </div>
                                    </div>
                                    <div class="txt-subcontent">
                                        <a href="#">
                                            <span>Discover our services</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-5 col-sm-5 col-xs-12" eq-col>
                                 
                                <!--Latest News -->
            					<?php echo blpc_home_news_list(); ?>

                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>