<?php 

/* Template Name: OCTG */ 

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
    <div class="row compressed" eq-height>
        <div class="col-md-8 col-sm-12 col-xs-12 main" eq-col>
            <div class="row compressed">
                <div class="col-lg-offset-3 col-lg-9 col-md-12 col-sm-12">
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
        <div class="col-md-4 col-xs-12 hidden-sm hidden-xs aside">
            <div class="container-fluid">
                <!-- Send Request -->
                <div class="send-request" toggle-active-parent>
                    <div class="row">
                        <div class="col-sm-7 col-xs-7 fh">
                            <a href="#" class="tframe fh fw">
                                <div class="tcell valign-mid call-us">
                                    <p class="h3">Get in Touch</p>
                                    <p class="sub-text">Please, use our customer line to contact us</p>
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
                    
                    <!-- TODO: Make Dynamic -->
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

                <!-- Side Navigation -->
                <!-- <div class="side-nav">
                   <?php
                      echo blpc_custom_menu_list_pages('octg'); 
                    ?>
                </div> -->

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

                        <div class="row compressed row-no-padding">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="static-slides" eq-height>
                                    <div class="row compressed grey7">

                                    <!-- Product Row -->
                                    <?php blpc_products_rollovers('octg'); ?>

                                    </div>
                                </div>   
                            </div>                 
                        </div>



                        <div class="row compressed row-no-padding">
                            <div class="col-xs-12 visible-sm visible-xs">
                                <div class="send-request" toggle-active-parent>
                                    <div class="row full-scr" eq-height>
                                        <div class="col-sm-7 col-xs-7 fh" eq-col>
                                            <a href="#" class="tframe fh fw">
                                                <div class="tcell valign-mid call-us">
                                                    <p class="h3">Get in Touch</p>
                                                    <p class="sub-text">Please, use our customer line to contact us</p>
                                                        <span class="num">+1 555 123 4567</span>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-sm-5 col-xs-5 fh" eq-col>
                                            <div class="tframe fw fh popdown-phonenum">
                                                <div class="tcell valign-mid phone-opener" toggle-active-opener>
                                                    <i class="fa fa-mobile" aria-hidden="true"></i> 
                                                    <span class="more">More</span>
                                                    <span class="less">Less</span> 
                                                    <i class="fa fa-angle-down" aria-hidden="true"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>  
                                </div>
                            </div>                 
                        </div>

                        <div class="row compressed">
                            <div class="col-md-12">        
                                <div class="more-phone-full-scr" toggle-active-single>
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
                        </div>
       
                        

                        <div class="row compressed row-no-padding" eq-height>
                            <div class="col-md-4 col-sm-12 col-xs-12" eq-col>
                                <!-- Feature CTA Bottom -->
                                <?php 
                                    $feature_id1 = get_field('any_feature_bottom'); 
                                    
                                    if($feature_id1) {
                                        echo blpc_content_feature_right($feature_id1); 
                                    }

                                ?>
                            </div>
                            <div class="col-md-4 col-sm-12 col-xs-12" eq-col>
                            
                            <!-- News List -->
                            <?php echo blpc_home_news_list(); ?>

                            </div> 
                            <div class="col-md-4 col-sm-12 col-xs-12" eq-col>
                                <div class="image-cta resource-center">
                                    
                                    
                                    <div class="img-content"> <img alt="B&L Pipeco" data-src=">0:http://placehold.it/570x300" /> </div>
                                    <div class="txt-content">
                                        <h4>Resource Center</h4>
                                        <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat.</p>
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
    <!-- Tertiary Content -->
    <!-- ******************************************************* -->
    <div class="row compressed">    
        <div class="col-md-12 col-sm-12 col-xs-12 tertiary">
            <div class="row compressed">
                <div class="col-md-12">
                    <div class="container-fluid no-padding">

                        <div class="row compressed row-no-padding">         
                            <div class="logo-row">
                                <div class="row compressed grey7">
                                    <div class="col-md-10">
                                        <div class="slider-container">
                                          <div class="slider logo-slider" eq-height>
                                         
                                                <?php 

                                                    /* Logo Carousel */
                                                    echo blpc_logo_carousel();

                                                ?>

                                            </div> 
                                        </div>   
                                    </div>

                                    <div class="col-md-2 col-sm-12">
                                        <div class="bar"></div>
                                        <div class="slide-content tframe valign-mid fw fh info-box" eq-col>
                                                <a href="/octg/top-mill-sourcing/">
                                                    <span class="text-upcase">Additional Sources</span>
                                                </a>
                                                <p> Establishing long standing relationships with a multitude of Tier 1 steel pipe manufacturers, and providing our customers with numerous options. </p>
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
       
</section>

<?php get_footer(); ?>