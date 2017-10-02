<?php 

/* Template Name: People */ 

get_header(); ?>
        
<!-- ******************************************************* -->
<!-- Banner -->
<!-- ******************************************************* -->
<section class="banner">
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12 bg-content title-content">
            <div class="tframe fh fw ">
                <div class="tcell valign-mid ">
                    <div class="container-fluid no-padding ">
                        <img alt="BL Pipeco " data-src="<575:<?php echo the_post_thumbnail_url('full'); ?>, <768:<?php echo the_post_thumbnail_url('full'); ?>,>768:<?php echo the_post_thumbnail_url('full'); ?>" />
                        <div class="subtext-box">
                            <h1>
                                <?php 
                                    if(get_field('alternate_h1_heading')) {
                                        echo get_field('alternate_h1_heading');
                                    }
                                    else {
                                        the_title();
                                    }; 
                                ?> 
                            </h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ******************************************************* -->
<!-- Main Content -->
<!-- ******************************************************* -->
<section class="main-content">
    <div class="row compressed">
        <div class="col-md-8 col-sm-12 col-xs-12 main">
            <div class="row compressed">
                <div class="col-md-offset-3 col-md-9">
                    <div class="container-fluid">
                        <h2 class="text-upcase">Management Team</h2>
                      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                        <?php the_content(); ?>

                    <?php endwhile; endif; ?>
                        <div class="photo-wrapper">
                            <div class="photos clear">

                                <!-- People Tiles -->
                                <?php blpc_bio_tiles(148); ?>

                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ******************************************************* -->
        <!-- Aside Content -->
        <!-- ******************************************************* -->
        <div class="col-md-4 col-sm-12 col-xs-12 aside">
            <div class="container-fluid">
                <!-- Send Request -->
                <?php blpc_generate_send_request(); ?>

                <!-- Sidebar General -->
                <!-- <?php if ( is_active_sidebar( 'sidebar_general' ) ) : ?>
                <?php dynamic_sidebar( 'sidebar_general' ); ?>
                <?php endif; ?> -->
        
                <!-- Side Navigation -->
                <div class="side-nav">
                    <?php blpc_menu_list_pages(); ?>
                </div>

                <?php 
                    $feature_id1 = get_field('about_feature_right'); 
                    
                    if($feature_id1) {
                        echo blpc_content_feature_right($feature_id1); 
                    }

                ?>

            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>