<?php 

/* OCTG Single Page */ 

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

    <!-- ******************************************************* -->
    <!-- Main Content -->
    <!-- ******************************************************* -->
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

        <div class="send-request" toggle-active-parent>
            <div class="row">
                <div class="col-sm-7 col-xs-7 fh">
                    <a href="#" class="tframe fh fw">
                        <div class="tcell valign-mid call-us">
                            <p class="h3">Get in Touch</p>
                            <p class="sub-text">Please, use our customer line to contact us</span>
                                <span class="num">+1 555 123 4567</span>
                        </div>
                    </a>
                </div>
                <div class="col-sm-5 col-xs-5 fh">
                    <div class="tframe fw fh popdown-phonenum">
                        <div class="tcell valign-mid phone-opener" toggle-active-opener><i class="fa fa-mobile" aria-hidden="true"></i> <span class="more">More</span><span class="less">Less</span> <i class="fa fa-angle-down" aria-hidden="true"></i></div>
                    </div>
                </div>
            </div>
            <div class="more-phone">
                <div class="more-phone-wrap">
                    <ul>
                        <li>
                            <span>Concord, CA</span>
                            <a href="#" class="num">+1 925 478 8058</a>
                        </li>
                        <li>
                            <span>Angleton, TX</span>
                            <a href="#" class="num">+1 713 260 4050</a>
                        </li>
                        <li>
                            <span>Denver, CO</span>
                            <a href="#" class="num">+1 720 789 7570</a>
                        </li>
                        <li>
                            <span>Denver, CO</span>
                            <a href="#" class="num">+1 720 789 7570</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>


        <!-- Sidebar General -->
       <!--  <?php if ( is_active_sidebar( 'sidebar_general' ) ) : ?>
        <?php dynamic_sidebar( 'sidebar_general' ); ?>
        <?php endif; ?>
 -->
        <!-- Side Navigation -->
        <div class="side-nav">
           <?php
             //  $id = get_the_ID();
             //  $octg_id_array = array(194,195,196,197,198);
              
             // if ( in_array($id, $octg_id_array) ) :
             //      debug_to_console( "Cond - 1 PASS" );
             //      echo blpc_submenu_list_pages('octg');
             // else :
             //      debug_to_console( "Cond - 1 FAIL" );
                  echo blpc_custom_menu_list_pages('octg'); 
              //endif; 
            ?>
        </div>

        <!-- Sidebar Services -->
        <?php if ( is_active_sidebar( 'sidebar_octg' )  ) : ?>
        <?php dynamic_sidebar( 'sidebar_octg' ); ?>
        <?php endif; ?>

        <!-- Feature CTA -->
    		<?php 
    			$feature_id1 = get_field('products_feature_right'); 
    			$feature_id2 = get_field('products_feature_bottom');
    			
    			if($feature_id1) {
    				echo blpc_content_feature_right($feature_id1); 
    			}
    			if($feature_id2) {
    				echo blpc_content_feature_right($feature_id2); 
    			}
    		?>

      </div>
    </div>

  </div>
</section>

<?php get_footer(); ?>