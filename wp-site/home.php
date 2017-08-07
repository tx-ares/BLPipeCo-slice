<?php 
/* Template Name: Homepage */
 
get_header(); ?>


<!-- ******************************************************* -->
<!-- Banner - Carousel -->
<!-- ******************************************************* -->
<section class="banner homepage">
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12 bg-content">
        	<div class="slider-container fh fw">
                <!-- <div class="slider-width-hack"></div> -->	           
                <div class="slider home-slider">
	                <?php echo blpc_primary_carousel(); ?>
	            </div>
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
			                        <h1 class="title text-upcase text-center">
			                        	<?php the_title(); ?>                        	
			                        </h1>
			                        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                                        <?php the_content(); ?>
                                            <?php endwhile; endif; ?>
                                </div>

                                <div class="feature-slide-box no-img">
                                    <div class="row slider-row fh-col" eq-height>
                                        <div class="slide-over-left panel" eq-col>
                                            <div class="slider-container fw fh">
                                                <div class="loading-container">
                                                    <i class="fa fa-spinner fa-spin fa-3x fa-fw"></i>
                                                </div>
                                                <span class="panel-title">Casing &amp; Tubing Products</span>
                                                <!-- Start Slider -->
                                                <div class="panel-slider" eh-height>
                                                    <!-- Product Carousel Left -->
                                                    <?php blpc_products_carousel('octg'); ?>

                                                </div>
                                                <!-- End Slider -->
                                            </div>
                                            <div class="panel-label">
                                                <h2 class="text-flip text-upcase">OCTG Products</h2>
                                                <div class="txt-content">
                                                    <img src="<?php echo get_template_directory_uri(); ?>/_assets/images/ui/Pipes.png" class="icon">
                                                    <p> Providing access to an extensive inventory of OCTG products in every active U.S. drilling region. </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="slide-over-right panel" eq-col>
                                            <div class="slider-container fw fh">
                                                <div class="loading-container">
                                                    <i class="fa fa-spinner fa-spin fa-3x fa-fw"></i>
                                                </div>
                                                <span class="panel-title">Upstream Products</span>
                                                <!-- Start Slider -->
                                                <div class="panel-slider" eh-height>
                                                    <!-- Product Carousel Right -->
                                                    <?php blpc_products_carousel('upstreamproducts'); ?>
                                                   

                                                </div>
                                                <!-- End Slider -->
                                            </div>
                                            <div class="panel-label">
                                                <h2 class="text-upcase text-flip">Upstream Products</h2>
                                                <div class="txt-content">
                                                    <img src="<?php echo get_template_directory_uri(); ?>/_assets/images/ui/barrels.png" class="icon">
                                                    <p>Expanding our product and service offerings to help streamline the E&amp;P supply chain process</p>
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
                                
                                <!-- Feature CTA Bottom -->
                                <?php 
                                    $feature_id1 = get_field('any_feature_bottom'); 
                                    
                                    if($feature_id1) {
                                        echo blpc_content_feature_right($feature_id1); 
                                    }

                                ?>

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