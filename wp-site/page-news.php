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
        <!-- Main Content -->
        <!-- ******************************************************* -->
        <div class="col-md-8 col-sm-7 col-xs-12 main">
            <div class="row">
                <div class="col-md-offset-3 col-md-9">
                    <div class="container-fluid">
                        <div class="articles darkblue">
                            <h2>News &amp; Events</h2>
                            <p class="subtitle">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                            </p>
                            <div class="txt-content">
                                <a href="#">
                                    <h3>
                                        Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros                                                    
                                    </h3>
                                    <span class="date">12th July 2017</span>
                                </a>
                            </div>
                            
                        </div>
                        <br>
                        <br>
                    </div>
                    <div class="pager">
                        <div class="page-items">
                            <!-- <a href="#">
                                <i class="fa fa-caret-left" aria-hidden="true"></i>
                            </a> -->
                            <a class="active" href="#">1</a>
                            <a href="#">2</a>
                            <a href="#">3</a>
                            <a href="#">4</a>
                            <a href="#">5</a>
                            <a href="#">
                                <i class="fa fa-caret-right" aria-hidden="true"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <?php echo blpc_post_type_pager('news'); ?>


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

				<!--Latest News -->
                <?php echo blpc_news_detail_latest_news_list(); ?>

                </div>
                <div class="topic-nav">
                    <h4 class="topic-title">By Topic</h4>
                    <ul>
                        <li><a href="#">Systems Architecture Design and Deployment (3)</a></li>
                        <li><a href="#">Database Structure and Modeling (2) </a></li>
                        <li><a href="#">Business Process Management (4) </a></li>
                    </ul>
                </div>
            </div>


            <!-- Sidebar General -->
            <?php if ( is_active_sidebar( 'sidebar_general' ) ) : ?>
            <?php dynamic_sidebar( 'sidebar_general' ); ?>
            <?php endif; ?>


            <!-- Side Navigation -->
                <?php 
                    $feature_id1 = get_field('insights_feature_right'); 
                    // $feature_id2 = get_field('services_feature_bottom');
                    
                    if($feature_id1) {
                        echo blpc_content_feature_right($feature_id1); 
                    }
                    // if($feature_id2) {
                    //  echo blpc_content_feature_right($feature_id2); 
                    // }
                ?>

          </div>
        </div>
        
        	<!-- ******************************************************* -->
            <!-- Content -->
            <!-- ******************************************************* -->
            <!-- <div class="col-xs-12 main">
                <div class="container-fluid">
                	<div class="news-landing">
                      
                        <div class="row" eq-height>
                            <div class="col-md-4 col-sm-6">
    							<?php echo blpc_insights_news_list(); ?>
                            </div>
                            <div class="col-md-4 col-sm-6">
    							<?php echo blpc_insights_blog_list(); ?>
                            </div>
                            <div class="col-md-4 col-sm-6">
    							<?php echo blpc_insights_webinar_list(); ?>
                            </div>
                        </div>
                        
                	</div>
        		</div>
                
            </div> -->
            
    </div>
	
</section>

<?php get_footer(); ?>