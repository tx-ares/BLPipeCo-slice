<?php get_header(); ?>

<!-- ******************************************************* -->
<!-- Banner -->
<!-- ******************************************************* -->
<section class="banner">
  <div class="row" eq-height="">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <div class="col-md-4 col-sm-5 col-xs-12 bg-content pull-right" eq-col data-img="<?php echo the_post_thumbnail_url('full'); ?>">
        <img alt=""<?php the_title(); ?>"
          data-src="<575:<?php echo the_post_thumbnail_url('full'); ?>,
          <768:<?php echo the_post_thumbnail_url('full'); ?>,
          >768:<?php echo the_post_thumbnail_url('full'); ?>" />

    </div>
    <div class="col-md-8 col-sm-7 col-xs-12 title-content" eq-col="">
      <div class="tframe fh fw">
        <div class="tcell valign-mid">
          <div class="container-fluid">

            <span class="sub-cat-title">
              News
            </span>
            <h1>
              <?php the_title(); ?>
            </h1>


          </div>
        </div>
      </div>
      <div class="overlay-band">
        <div class="tframe fh fw">
          <div class="tcell valign-mid">
            <div class="container-fluid">
              <span class="title">
                Houston, TX, <span class="date">October 26, 2016</span>
              </span>
              <div class="addthis_toolbox pull-right social">
                Share
                <a href="#" class="addthis_button_facebook" title="Facebook">
                  <i class="fa fa-facebook" aria-hidden="true"></i>
                </a>
                <a href="#" class="addthis_button_twitter" title="Twitter">
                  <i class="fa fa-twitter" aria-hidden="true"></i>
                </a>
                <a href="#" class="addthis_button_email" title="Contact Us">
                  <i class="fa fa-envelope" aria-hidden="true"></i>
                </a>
                <a href="#" class="addthis_button_linkedin" title="LinkedIn">
                  <i class="fa fa-linkedin" aria-hidden="true"></i>
                </a>
                <a href="#" class="addthis_button_more" title="Share">
                  <i class="fa fa-share-alt" aria-hidden="true"></i>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php endwhile; endif; ?>
  </div>
</section>


<!-- ******************************************************* -->
<!-- Content -->
<!-- ******************************************************* -->
<section class="main-content">
  <div class="row compressed">

    <!-- ******************************************************* -->
    <!-- Main -->
    <!-- ******************************************************* -->
    <div class="col-md-8 col-sm-7 col-xs-12 main">
      <div class="container-fluid">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <?php the_content(); ?>
        <?php endwhile; endif; ?>



      </div>

    </div>

    <?php get_sidebar(); ?>

  </div>
</section>

<?php get_footer(); ?>