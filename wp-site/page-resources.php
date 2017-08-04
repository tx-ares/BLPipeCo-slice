<?php 

/* Template Name: Resources */ 

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
                             <h2><?php echo get_field('resources_menu_description'); ?></h2>
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
            <div class="row">
                <div class="col-md-offset-3 col-md-9">
                    <div class="container-fluid">
                        <div class="articles darkblue">
                            <h2>Resources</h2>
                            <p class="subtitle">
                               	Supplying a variety of resources related to our OCTG products and services to ensure our customers obtain the correct product for each application.
                            </p>

                            <!-- News List -->
					        <?php									
								$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

								
								$args = array( 'posts_per_page' => 10, 
												'category_name' => 'resources',
												'paged' => $paged,
												'post_type' => 'post');
								
								
								$postslist = new WP_Query( $args );

								if ( $postslist->have_posts() ) :
									echo '<ul class="link-list">';
									while ( $postslist->have_posts() ) : $postslist->the_post(); 
										 echo '<li class="txt-content"><a href="'.get_permalink().'"><h3 class="title">';
										 echo	get_the_title(); 
										 echo '</h3><span class="date">';
										 echo	get_the_date('F j, Y');
										 echo '</span></a></li>';
									endwhile;  
									echo '</ul>';
								 
									$pages = '';
									$range = 2;
									$showitems = ($range * 2) + 1;  

									global $paged;
									if(empty($paged)) $paged = 1;

									if($pages == '')
									{
										 global $postslist;
										 $pages = $postslist->max_num_pages;
										 if(!$pages)
										 {
												 $pages = 1;
										 }
									}   

									if(1 != $pages)
									{
										 echo "<div class='pager'><div class='page-items'>";
										 if($paged > 1 && $showitems < $pages) echo "<a href='".get_pagenum_link($paged - 1)."'><i class='fa fa-angle-left' aria-hidden='true'></i></a>";

										 for ($i=1; $i <= $pages; $i++)
										 {
												 if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems ))
												 {
														 echo ($paged == $i)? "<a href='#' class='active'>".$i."</a>":"<a href='".get_pagenum_link($i)."' >".$i."</a>";
												 }
										 }

										 if ($paged < $pages && $showitems < $pages) echo "<a href='".get_pagenum_link($paged + 1)."'><i class='fa fa-angle-right' aria-hidden='true'></i></a>";
										 
										 echo "</div></div>";
									}
								 
									wp_reset_postdata();
								else:
									echo '<p>No posts to display.</p>';
								endif; 
								
							?>
                            
                        </div>
                        <br>
                        <br>
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
            <!-- <?php if ( is_active_sidebar( 'sidebar_general' ) ) : ?>
            <?php dynamic_sidebar( 'sidebar_general' ); ?>
            <?php endif; ?> -->


            <!-- Side Navigation -->
                <?php 
                    $feature_id1 = get_field('resources_feature_right'); 
                    
                    if($feature_id1) {
                        echo blpc_content_feature_right($feature_id1); 
                    }

                ?>

          </div>
        </div>
        
            
    </div>
	
</section>

<?php get_footer(); ?>