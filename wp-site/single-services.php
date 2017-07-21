<?php 

/* Services Single Page */ 

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
                             <h2><?php echo get_field('services_menu_description'); ?></h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!--
<section class="banner">
  <div class="row" eq-height>
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <div class="col-md-4 col-sm-5 col-xs-12 bg-content pull-right" eq-col data-img="
      <?php echo the_post_thumbnail_url('full'); ?>">
      <img alt="<?php the_title(); ?>"
      data-src="<575:<?php echo the_post_thumbnail_url('full'); ?>,
      <768:<?php echo the_post_thumbnail_url('full'); ?>,
      >768:<?php echo the_post_thumbnail_url('full'); ?>" />

      <div class="overlay-band"></div>
    </div>
    <div class="col-md-8 col-sm-7 col-xs-12 title-content" eq-col>
      <div class="tframe fh fw">
        <div class="tcell valign-mid">
          <div class="container-fluid">

            <span class="sub-cat-title">
              <?php 
                $id = get_the_ID();
                $services_id_array = array(1964,1617,1620,1623,1625,1627);
              if(in_array($id, $services_id_array) ) : 
                echo get_the_title(2252);
              else :
                echo get_the_title($post->post_parent);
              endif; ?>
            </span>
            <h1>
              <?php the_title(); ?>
            </h1>


          </div>
        </div>
      </div>
      
    </div>
    <?php endwhile; endif; ?>
  </div>
</section> 

-->

<!-- ******************************************************* -->
<!-- Main Content -->
<!-- ******************************************************* -->
<section class="main-content">
  <div class="row compressed">

    <!-- ******************************************************* -->
    <!-- Main Content -->
    <!-- ******************************************************* -->
    <div class="col-md-8 col-sm-7 col-xs-12 main">
      <div class="container-fluid">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <?php 
														the_content(); 
														$feature_id = get_field('page_feature'); 
														if($feature_id) {
															echo g2is_content_feature($feature_id); 
														}
														$related_pages1 = get_field('page_related_pages1');
														$related_pages2 = get_field('page_related_pages2');
														$related_pages3 = get_field('page_related_pages3');
														if($related_pages1 || $related_pages2 || $related_pages3) : ?>
        <div class="related-contents">
          <p class="heading">Related Services</p>
          <div class="row">

            <?php if( $related_pages1 ): ?>
            <div class="col-md-4">
              <h4 class="title">
                <a href="
                  <?php echo get_permalink($related_pages1->ID); ?>"><?php echo get_the_title($related_pages1->ID); ?>
                </a>
              </h4>
              <p class="date">
                in <?php echo get_the_title($related_pages1->post_parent); ?>
              </p>
            </div>
            <?php endif; ?>

            <?php if( $related_pages2 ): ?>
            <div class="col-md-4">
              <h4 class="title">
                <a href="
                  <?php echo get_permalink($related_pages2->ID); ?>"><?php echo get_the_title($related_pages2->ID); ?>
                </a>
              </h4>
              <p class="date">
                in <?php echo get_the_title($related_pages2->post_parent); ?>
              </p>
            </div>
            <?php endif; ?>

            <?php if( $related_pages3 ): ?>
            <div class="col-md-4">
              <h4 class="title">
                <a href="
                  <?php echo get_permalink($related_pages3->ID); ?>"><?php echo get_the_title($related_pages3->ID); ?>
                </a>
              </h4>
              <p class="date">
                in <?php echo get_the_title($related_pages3->post_parent); ?>
              </p>
            </div>
            <?php endif; ?>
          </div>
        </div>
        <?php endif; ?>
        <?php endwhile; endif; ?>

        <!--<?php echo g2is_post_type_pager('services'); ?>-->

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
        <?php if ( is_active_sidebar( 'sidebar_general' ) ) : ?>
        <?php dynamic_sidebar( 'sidebar_general' ); ?>
        <?php endif; ?>

        <!-- Side Navigation -->
        <div class="side-nav">
           <?php
              $id = get_the_ID();
              $services_id_array = array(1964,1617,1620,1623,1625,1627);
              
             if ( in_array($id, $services_id_array) ) :
                  echo blpc_submenu_list_pages('services');
             else :        
                  echo blpc_custom_menu_list_pages('services'); 
          endif; ?>
        </div>

        <!-- Sidebar Sevices -->
        <?php if ( is_active_sidebar( 'sidebar_services' )  ) : ?>
        <?php dynamic_sidebar( 'sidebar_services' ); ?>
        <?php endif; ?>

        <!-- Side Navigation -->
    		<?php 
    			$feature_id1 = get_field('services_feature_right'); 
    			// $feature_id2 = get_field('services_feature_bottom');
    			
    			if($feature_id1) {
    				echo blpc_content_feature_right($feature_id1); 
    			}
    			// if($feature_id2) {
    			// 	echo blpc_content_feature_right($feature_id2); 
    			// }
    		?>

      </div>
    </div>

  </div>
</section>

<?php get_footer(); ?>