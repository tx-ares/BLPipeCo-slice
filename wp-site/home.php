<?php 
/* Template Name: Homepage */
 
get_header(); ?>
		<!-- ******************************************************* -->
        <!-- Main Content -->
        <!-- ******************************************************* -->
<section class="main-content">   
 <div class="row compressed fh-col" eq-height>
                <div class="col-lg-6 col-md-12 left-content" eq-col>
                    <!-- overlay-width: use for width hack -->
                    <div class="slider-width-hack"></div>
                    <div class="slider home-slider" data-slick='{"autoplay": "true", "autoplaySpeed":5000}'>
                        <?php echo blpc_primary_carousel(); ?>
                    </div>
                    <div class="seo">
                    	<h1 style="display:none;">G2 Integrated Solutions</h1>
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
																				<!-- overlay-width: use for width hack -->
                                        <div class="slider-width-hack"></div>
                                        <div class="slider home-cta">
                                            <?php echo g2is_secondary_carousel(); ?>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <!-- tframe END -->
                        </div>
                        <div class="col-lg-6 col-md-12 col2 services">
                            <div class="row compressed" eq-height>
                                <?php echo g2is_home_services_list(); ?>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
</section>

<?php get_footer(); ?>