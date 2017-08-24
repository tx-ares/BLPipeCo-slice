<?php 

/* Template Name: Insights */ 

get_header(); ?>
     
    <!-- ******************************************************* -->
    <!-- Banner -->
    <!-- ******************************************************* -->
    <section class="banner compressed">
        <div class="container-fluid">
            <h1>Insights</h1>
        </div>
    </section>


    <!-- ******************************************************* -->
    <!-- Main -->
    <!-- ******************************************************* -->
    <section class="main-content">
        <div class="row compressed">
        
            <!-- ******************************************************* -->
            <!-- Content -->
            <!-- ******************************************************* -->
            <div class="col-xs-12 main">
                <div class="container-fluid">
                    <div class="news-landing">
                        <!-- ******************************************************* -->
                        <!-- Image CTA -->
                        <!-- ******************************************************* -->
                        <div class="row" eq-height>
                            <div class="col-md-4 col-sm-6">
                                <?php echo blpc_insights_news_list(); ?>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <?php echo blpc_insights_blog_list(); ?>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <!-- Resources -->
                            </div>
                        </div>
                        
                    </div>
                </div>
                
            </div>
            
        </div>
        
    </section>

<?php get_footer(); ?>