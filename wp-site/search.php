<?php get_header(); ?>

<title>Search Results - B&amp;L Pipeco Services</title>

<!-- ******************************************************* -->
<!-- Banner -->
<!-- ******************************************************* -->
<section class="banner">
    <div class="row" eq-height>
        <div class="col-md-12 col-sm-12 col-xs-12 bg-content title-content" eq-col>
            <div class="tframe fh fw ">
                <div class="tcell valign-mid ">
                    <div class="container-fluid no-padding ">
                        <img alt="BL Pipeco " data-src="<575: http://ec2-54-210-43-70.compute-1.amazonaws.com/wp-content/uploads/2017/08/TopBanner_AboutUs_Locations.jpg, <768:http://ec2-54-210-43-70.compute-1.amazonaws.com/wp-content/uploads/2017/08/TopBanner_AboutUs_Locations.jpg,>768: http://ec2-54-210-43-70.compute-1.amazonaws.com/wp-content/uploads/2017/08/TopBanner_AboutUs_Locations.jpg" />
                        <div class="subtext-box">
                            <h1 class="text-upcase">
                                Search
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
                                                
                    <?php if (have_posts()) : ?>

                    <h2>Displaying 
                    <?php global $wp_query;
                        echo $wp_query->found_posts.' search results for '?><span class="search-keyword">"<?php echo $s ?>"</span></h2>
                    <ul class="link-list">
                    <?php while (have_posts()) : the_post(); ?>
                        <li>
                            <a href="<?php the_permalink() ?>">
                                    <h2 class="title"><?php the_title(); ?></h2>
                                    <?php if ( function_exists('the_excerpt') && is_search() ) : ?>
                                        <div class="subtitle"><?php echo the_excerpt(); ?></div>
                                    <?php endif; ?>
                            </a>
                        </li>
                    <?php endwhile; ?>
                    </ul>
                    <div class="next-prev clearfix">
                        <?php next_posts_link('<i class="fa fa-angle-left" aria-hidden="true"></i> Previous') ?>
                        <?php previous_posts_link('Next <i class="fa fa-angle-right" aria-hidden="true"></i>') ?>
                    </div>
                
                <?php else : ?>

                    <h2>No posts found. Try a different search?</h2>

                <?php endif; ?>
                        
                        
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
            <!-- <div class="side-nav">
                <?php blpc_custom_menu_list_pages('octg'); ?>
                <?php blpc_custom_menu_list_pages('upstreamproducts'); ?>
                <?php blpc_custom_menu_list_pages('services'); ?>
            </div>
 -->

        </div>
    </div>

  </div>
</section>

<?php get_footer(); ?>