<?php 

/* Template Name: Insights */ 

get_header(); ?>
        
<!-- ******************************************************* -->
<!-- Banner -->
<!-- ******************************************************* -->
<section class="banner">
    <div class="row" eq-height>
        <div class="col-md-12 col-sm-12 col-xs-12 bg-content title-content" eq-col>
            <div class="tframe fh fw ">
                <div class="tcell valign-mid ">
                    <div class="container-fluid no-padding ">
                        <img alt="BL Pipeco " data-src="<575:<?php echo the_post_thumbnail_url('full'); ?>, <768:<?php echo the_post_thumbnail_url('full'); ?>,>768:<?php echo the_post_thumbnail_url('full'); ?>" />
                        <div class="subtext-box">
                            <h1><?php the_title(); ?> </h1>
                             <h2><?php echo get_field('insights_menu_description'); ?></h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- ******************************************************* -->
<!-- Main -->
<!-- ******************************************************* -->
<section class="main-content">
	<div class="row compressed">
    
    	<!-- ******************************************************* -->
        <!-- Content -->
        <!-- ******************************************************* -->
        <div class="col-xs-12 main">
            <div class="container-fluid">
            	<div class="news-landing">
                	<!-- ******************************************************* -->
                    <!-- Image CTA -->
                    <!-- ******************************************************* -->
                    <div class="row" eq-height>
                        <div class="col-md-4 col-sm-6">
							<?php echo g2is_insights_news_list(); ?>
                        </div>
                        <div class="col-md-4 col-sm-6">
							<?php echo g2is_insights_blog_list(); ?>
                        </div>
                        <div class="col-md-4 col-sm-6">
							<?php echo g2is_insights_webinar_list(); ?>
                        </div>
                    </div>
                    
            	</div>
    		</div>
            
        </div>
        
    </div>
	
</section>

<?php get_footer(); ?>