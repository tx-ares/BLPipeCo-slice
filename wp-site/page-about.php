<?php 

/* Template Name: About */ 

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
            <div class="col-md-7 col-sm-7 col-xs-12 main" eq-col>
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
            <div class="col-md-5 col-sm-5 col-xs-12 aside" eq-col>              
                    <!-- Send Request -->
                    <div class="send-request" toggle-active-parent>
                        <div class="row full-scr" eq-height>
                            <div class="col-sm-7 col-xs-7 fh" eq-col>
                                <a href="#" class="tframe fh fw">
                                    <div class="tcell valign-mid call-us">
                                        <p class="h3">Get in Touch</p>
                                        <p class="sub-text">Please, use our customer line to contact us</span>
                                            <span class="num">+1 555 123 4567</span>
                                    </div>
                                </a>
                            </div>
                            <div class="col-sm-5 col-xs-5 fh" eq-col>
                                <div class="tframe fw fh popdown-phonenum">
                                    <div class="tcell valign-mid phone-opener" toggle-active-opener><i class="fa fa-mobile" aria-hidden="true"></i> <span class="more">More</span><span class="less">Less</span> <i class="fa fa-angle-down" aria-hidden="true"></i></div>
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
                                                <div class="col-md-2 col-md-offset-3 col-sm-12">
                                                    <div class="slide-content" eq-col>
                                                        <a href="#">
                                                            <img src="<?php echo get_template_directory_uri(); ?>/_assets/images/ui/Pipes.png" class="icon">
                                                            <h3 class="text-upcase">OCTG</h3>
                                                            <p> Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum.</p>
                                                        </a>
                                                    </div>
                                                </div>
                                                 <div class="col-md-2 col-sm-12">
                                                    <div class="slide-content" eq-col>
                                                        <a href="#">
                                                            <img src="<?php echo get_template_directory_uri(); ?>/_assets/images/ui/canister2.png" class="icon">
                                                            <h3 class="text-upcase">Premium Connections</h3>
                                                            <p> Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum.</p>
                                                        </a>
                                                    </div>
                                                </div> 
                                                <div class="col-md-2 col-sm-12">
                                                    <div class="slide-content" eq-col>
                                                        <a href="#">
                                                            <img src="<?php echo get_template_directory_uri(); ?>/_assets/images/ui/barometer.png" class="icon">
                                                            <h3 class="text-upcase">Tubular Accessories</h3>
                                                            <p> Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum.</p>
                                                        </a>
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
            </div>
            <!-- ******************************************************* -->
            <!-- Tertiary Content -->
            <!-- ******************************************************* -->
            <div class="row compressed">    
                <div class="col-md-12 col-sm-12 col-xs-12 tertiary">
                    <div class="row compressed">
                        <div class="col-md-12">
                            <div class="container-fluid no-padding">
                                <div class="row compressed row-no-padding" eq-height>
                                    <div class="col-md-4 col-sm-12 col-xs-12" eq-col>
                                        <div class="image-cta grey7">
                                            <div class="img-content">
                                                <img alt="B&L Pipe Co" data-src=">0:http://placehold.it/570x300" />
                                                <div class="txt-content">
                                                    <h4>Services</h4>
                                                    <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat.</p>
                                                </div>
                                            </div>
                                            <div class="txt-subcontent">
                                                <a href="#">
                                                    <span>See how the we make the world better</span>
                                                </a>
                                            </div>
                                        </div>     
                                    </div>
                                    <div class="col-md-4 col-sm-12 col-xs-12" eq-col>
                                    <!-- News List -->
                                    <?php echo blpc_home_news_list(); ?>
   
                                    </div> 
                                    <div class="col-md-4 col-sm-12 col-xs-12" eq-col>
                                        <div class="image-cta resource-center">
                                            <div class="img-content">
                                                <img alt="B&L Pipeco"
                                                    data-src=">0:http://placehold.it/570x300" />    
                                            </div>
                                            <div class="txt-content">
                                                <h4>Resource Center</h4>
                                                <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat.</p>
                                            </div>
                                        </div>     
                                    </div>                  
                                </div>
                                <div class="row compressed row-no-padding" eq-height>         
                                    <div class="logo-row" eq-height>
                                        <div class="row compressed grey7">
                                            <div class="col-md-2 col-md-offset-1 col-xs-6">
                                                <div class="slide-content" eq-col>
                                                    <img src="<?php echo get_template_directory_uri(); ?>/_assets/images/ui/axis.png" class="icon">
                                                </div>
                                            </div>
                                             <div class="col-md-2 col-xs-6">
                                                <div class="slide-content" eq-col>
                                                    <img src="<?php echo get_template_directory_uri(); ?>/_assets/images/ui/nssm.png" class="icon">
                                                </div>
                                            </div> 
                                            <div class="col-md-2 col-xs-6">
                                                <div class="slide-content" eq-col>
                                                    <img src="<?php echo get_template_directory_uri(); ?>/_assets/images/ui/paragon.png" class="icon">     
                                                </div>
                                            </div>
                                            <div class="col-md-2 col-xs-6">
                                                <div class="slide-content" eq-col>
                                                    <a href="#">
                                                        <span class="text-upcase">Mill Representation</span>
                                                    </a>
                                                    <img src="<?php echo get_template_directory_uri(); ?>/_assets/images/ui/ipsco.png" class="icon sm">   
                                                </div>
                                            </div>
                                            <div class="col-md-2 col-sm-12">
                                                <div class="bar"></div>
                                                <div class="slide-content" eq-col>
                                                        <a href="#">
                                                            <span class="text-upcase">Additional Sources</span>
                                                        </a>
                                                        <p> Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum.</p>
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
           

        </div>
    </section>

<?php get_footer(); ?>