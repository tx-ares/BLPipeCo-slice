<?php 

/* Template Name: Services */

get_header(); ?>


<!-- ******************************************************* --> 
<!-- Main Content --> 
<!-- ******************************************************* -->

<section class="main-content">
    <div class="row compressed fh services-box row-xxs-12" eq-height>
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12 seo" eq-col>
            <div class="tframe fw fh">
                <div class="tcell valign-mid">
                    <div class="container-fluid">
                        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                        <h1><?php the_title(); ?></h1>
                        <?php the_content(); ?>
                        <?php endwhile; endif; ?>
                    </div>
                </div>
            </div>
        </div>
        <!-- ******************************************************* --> 
        <!-- Services Boxes --> 
        <!-- ******************************************************* --> 
        <?php echo blpc_services_tile_pages(); ?> </div>
</section>
<?php get_footer(); ?>
