<?php 
/* Template Name: Homepage */
 
get_header(); ?>


<!-- ******************************************************* -->
<!-- Banner - Carousel -->
<!-- ******************************************************* -->
<section class="banner homepage">
    <div class="row" eq-height>
        <div class="col-md-12 col-sm-12 col-xs-12 bg-content" eq-col>
        	<div class="slider-container fh fw">
                <!-- <div class="slider-width-hack"></div> -->	           
                <div class="slider home-slider">
	                <?php echo blpc_primary_carousel(); ?>
	            </div>
            </div>
        </div>
    </div>
</section>
  <!-- ******************************************************* -->
    <!-- Main Content -->
    <!-- ******************************************************* -->
 <section class="main-content">
    <div class="row compressed" eq-height>
        <div class="col-md-12 col-sm-12 col-xs-12 main" eq-col>
            <div class="container-fluid no-padding">

                <div class="feature-box white fullpage-centered">
                    <h1 class="title text-upcase text-center">
                    	<?php the_title(); ?>                        	
                    </h1>
                    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                        <?php the_content(); ?>
                            <?php endwhile; endif; ?>
                </div>

                

                <script type="text/javascript">console.log("from home.php 6 ")</script>
                        
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
                                                 
                                <!-- Feature CTA Bottom -->
                                <?php 
                                    $feature_id1 = get_field('any_feature_bottom'); 
                                    
                                    if($feature_id1) {
                                        echo blpc_content_feature_right($feature_id1); 
                                    }
                                ?>

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