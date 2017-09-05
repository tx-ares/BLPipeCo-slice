<?php 

/* Upstream Products Single Page */ 

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

  <div class="col-md-8 col-sm-7 col-xs-12 main">
       <div class="row compressed">
            <div class="col-md-offset-3 col-md-9">
                <div class="container-fluid">
                    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                    <?php the_content(); ?>
                    <?php endwhile; endif; ?>

                    <?php 
                      $feature_id2 = get_field('products_feature_bottom'); 
                      
                      if($feature_id2) {
                          echo blpc_content_feature_bottom($feature_id2); 
                      }
                    ?> 

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


        <!-- Sidebar General -->
       <!--  <?php if ( is_active_sidebar( 'sidebar_general' ) ) : ?>
        <?php dynamic_sidebar( 'sidebar_general' ); ?>
        <?php endif; ?>
 -->
        <!-- Side Navigation -->
        <div class="side-nav">
           <?php
              echo blpc_custom_menu_list_pages('upstreamproducts'); 
              echo debug_to_console( 'single-upstream-products.php' );    
            ?>
        </div>

        <!-- Sidebar Services -->
        <?php if ( is_active_sidebar( 'sidebar_upstreamproducts' )  ) : ?>
        <?php dynamic_sidebar( 'sidebar_upstreamproducts' ); ?>
        <?php endif; ?>

        <!-- Feature CTA -->
    		<?php 
    			$feature_id1 = get_field('products_feature_right'); 
    			
    			if($feature_id1) {
    				echo blpc_content_feature_right($feature_id1); 
    			}
    		?>

      </div>
    </div>

  </div>
</section>

<?php get_footer(); ?>