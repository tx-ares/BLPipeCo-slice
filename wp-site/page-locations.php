<?php 

/* Template Name: Locations */ 

get_header(); ?>

<!-- ******************************************************* -->
<!-- Banner -->
<!-- ******************************************************* -->
<section class="map">

    <!-- Banner Map -->
    <?php echo do_shortcode( '[wpgmza id="1"]' ); ?>
     
</section>


<!-- ******************************************************* -->
<!-- Main Content -->
<!-- ******************************************************* -->
<section class="main-content">
  <div class="row compressed">
    <div class="col-md-8 col-sm-7 col-xs-12 main">
       <div class="row compressed">
            <div class="col-md-offset-3 col-md-9">
                <div class="container-fluid">


                    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                    <?php the_content(); ?>
                    <?php endwhile; endif; ?>


                </div>
            </div>
        </div>

    </div>

    <!-- ******************************************************* -->
    <!-- Aside Content -->
    <!-- ******************************************************* -->
    <div class="col-md-4 col-sm-5 col-xs-12 aside">
        <div class="container-fluid">
           <!-- Send Request -->
            <?php blpc_generate_send_request(); ?>

            <!-- Side Navigation -->
            <div class="side-nav">
                <?php blpc_menu_list_pages(); ?>
            </div>
            
        </div>
    </div>

  </div>
</section>

<?php get_footer(); ?>