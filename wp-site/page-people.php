<?php 

/* Template Name: People */ 

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
        <div class="col-md-8 col-sm-12 col-xs-12 main">
            <div class="row">
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

                                <!-- <div class="photo-item">
                                    <div class="img-wrapper">
                                        <img src="<?php echo get_template_directory_uri(); ?>/_assets/images/people/IMG_0304.jpg" alt="Name" width="206" height="255" />
                                        <div class="overlay">
                                            <div class="tframe fw fh">
                                                <div class="tcell valign-mid">
                                                    <div class="info-wrapper">
                                                        <h3>First Last</h3>
                                                        <p>Really Important Title</p> <span>See Bio</span> <i class="fa fa-caret-down" aria-hidden="true"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="photo-item">
                                    <div class="img-wrapper">
                                        <img src="<?php echo get_template_directory_uri(); ?>/_assets/images/people/IMG_0297.jpg" alt="Name" width="206" height="255" />
                                        <div class="overlay">
                                            <div class="tframe fw fh">
                                                <div class="tcell valign-mid">
                                                    <div class="info-wrapper">
                                                        <h3>First Last</h3>
                                                        <p>Really Important Title</p> <span>See Bio</span> <i class="fa fa-caret-down" aria-hidden="true"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="photo-item">
                                    <div class="img-wrapper">
                                        <img src="<?php echo get_template_directory_uri(); ?>/_assets/images/people/IMG_0254.jpg" alt="Name" width="206" height="255" />
                                        <div class="overlay">
                                            <div class="tframe fw fh">
                                                <div class="tcell valign-mid">
                                                    <div class="info-wrapper">
                                                        <h3>First Last</h3>
                                                        <p>Really Important Title</p> <span>See Bio</span> <i class="fa fa-caret-down" aria-hidden="true"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="photo-item">
                                    <div class="img-wrapper">
                                        <img src="<?php echo get_template_directory_uri(); ?>/_assets/images/people/IMG_0235.jpg" alt="Name" width="206" height="255" />
                                        <div class="overlay">
                                            <div class="tframe fw fh">
                                                <div class="tcell valign-mid">
                                                    <div class="info-wrapper">
                                                        <h3>First Last</h3>
                                                        <p>Really Important Title</p> <span>See Bio</span> <i class="fa fa-caret-down" aria-hidden="true"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="photo-item">
                                    <div class="img-wrapper">
                                        <img src="<?php echo get_template_directory_uri(); ?>/_assets/images/people/IMG_0217.jpg" alt="Name" width="206" height="255" />
                                        <div class="overlay">
                                            <div class="tframe fw fh">
                                                <div class="tcell valign-mid">
                                                    <div class="info-wrapper">
                                                        <h3>First Last</h3>
                                                        <p>Really Important Title</p> <span>See Bio</span> <i class="fa fa-caret-down" aria-hidden="true"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="photo-item">
                                    <div class="img-wrapper">
                                        <img src="<?php echo get_template_directory_uri(); ?>/_assets/images/people/IMG_0167.jpg" alt="First Last" width="206" height="255" />
                                        <div class="overlay">
                                            <div class="tframe fw fh">
                                                <div class="tcell valign-mid">
                                                    <div class="info-wrapper">
                                                        <h3>First Last</h3>
                                                        <p>Really Important Title</p> <span>See Bio</span> <i class="fa fa-caret-down" aria-hidden="true"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="photo-item">
                                    <div class="img-wrapper">
                                        <img src="<?php echo get_template_directory_uri(); ?>/_assets/images/people/IMG_0136.jpg" alt="First Last" width="206" height="255" />
                                        <div class="overlay">
                                            <div class="tframe fw fh">
                                                <div class="tcell valign-mid">
                                                    <div class="info-wrapper">
                                                        <h3>First Last</h3>
                                                        <p>Really Important Title</p> <span>See Bio</span> <i class="fa fa-caret-down" aria-hidden="true"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="photo-item">
                                    <div class="img-wrapper">
                                        <img src="<?php echo get_template_directory_uri(); ?>/_assets/images/people/IMG_0131.jpg" alt="First Last" width="206" height="255" />
                                        <div class="overlay">
                                            <div class="tframe fw fh">
                                                <div class="tcell valign-mid">
                                                    <div class="info-wrapper">
                                                        <h3>First Last</h3>
                                                        <p>Really Important Title</p> <span>See Bio</span> <i class="fa fa-caret-down" aria-hidden="true"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="photo-item">
                                    <div class="img-wrapper">
                                        <img src="<?php echo get_template_directory_uri(); ?>/_assets/images/people/IMG_0107.jpg" alt="Name" width="206" height="255" />
                                        <div class="overlay">
                                            <div class="tframe fw fh">
                                                <div class="tcell valign-mid">
                                                    <div class="info-wrapper">
                                                        <h3>First Last</h3>
                                                        <p>Really Important Title</p> <span>See Bio</span> <i class="fa fa-caret-down" aria-hidden="true"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="photo-item">
                                    <div class="img-wrapper">
                                        <img src="<?php echo get_template_directory_uri(); ?>/_assets/images/people/IMG_0088.jpg" alt="Name" width="206" height="255" />
                                        <div class="overlay">
                                            <div class="tframe fw fh">
                                                <div class="tcell valign-mid">
                                                    <div class="info-wrapper">
                                                        <h3>First Last</h3>
                                                        <p>Really Important Title</p> <span>See Bio</span> <i class="fa fa-caret-down" aria-hidden="true"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="photo-item">
                                    <div class="img-wrapper">
                                        <img src="<?php echo get_template_directory_uri(); ?>/_assets/images/people/IMG_0059.jpg" alt="Name" width="206" height="255" />
                                        <div class="overlay">
                                            <div class="tframe fw fh">
                                                <div class="tcell valign-mid">
                                                    <div class="info-wrapper">
                                                        <h3>First Last</h3>
                                                        <p>Really Important Title</p> <span>See Bio</span> <i class="fa fa-caret-down" aria-hidden="true"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="photo-item">
                                    <div class="img-wrapper">
                                        <img src="<?php echo get_template_directory_uri(); ?>/_assets/images/people/IMG_0047.jpg" alt="Name" width="206" height="255" />
                                        <div class="overlay">
                                            <div class="tframe fw fh">
                                                <div class="tcell valign-mid">
                                                    <div class="info-wrapper">
                                                        <h3>First Last</h3>
                                                        <p>Really Important Title</p> <span>See Bio</span> <i class="fa fa-caret-down" aria-hidden="true"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="photo-item">
                                    <div class="img-wrapper">
                                        <img src="<?php echo get_template_directory_uri(); ?>/_assets/images/people/IMG_0007.jpg" alt="Name" width="206" height="255" />
                                        <div class="overlay">
                                            <div class="tframe fw fh">
                                                <div class="tcell valign-mid">
                                                    <div class="info-wrapper">
                                                        <h3>First Last</h3>
                                                        <p>Really Important Title</p> <span>See Bio</span> <i class="fa fa-caret-down" aria-hidden="true"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> -->

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