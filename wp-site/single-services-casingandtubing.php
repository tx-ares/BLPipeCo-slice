<?php
get_header();

if (have_posts()) :
   while (have_posts()) :
      the_post();
         the_content();
   endwhile;
endif;

get_sidebar();


    <!-- ******************************************************* -->
    <!-- Main Content -->
    <!-- ******************************************************* -->
    <section class="main-content">
        <div class="row compressed">
            <!-- ******************************************************* -->
            <!-- Main Content -->
            <!-- ******************************************************* -->
            <div class="col-md-7 col-sm-7 col-xs-12 main">
                <div class="row compressed">
                    <div class="col-md-offset-3 col-md-9">
                        <div class="container-fluid">
                            <h2 class="text-upcase">Casing &amp; Tubing</h2>
                            <p class="subtitle">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum occaecat cupidatat non occaecat cupidatat non.</p>
                            <figure class="pull-left col-lg-4 col-md-5 col-sm-6 col-xs-12">
                                <img alt="B&L Pipe Co" data-src=">0:http://placehold.it/390x280/d55441/ffffff" />
                                <figcaption>Caption would go here</figcaption>
                            </figure>
                            <h3 class="slateBlue">H3 Header Title would go here</h3>
                            <p>Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum.</p>
                            <p> Mirum est notare quam littera gothica, quam nunc putamus parum claram, <span class="bold-red">anteposuerit litterarum formas humanitatis per seacula quarta decima</span> et quinta decima. Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes in futurum. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.</p>
                            <blockquote>
                                <p>
                                    Duis aute irure dolor in te velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                </p>
                            </blockquote>
                            <h3 class="slateBlue">H3 Style for paragraph headers</h3>
                            <ul class="list">
                                <li>A comprehensive software product offering including:
                                    <ul>
                                        <li>Specialized industry insight and experience to help companies identify threats, mitigate risk and create operational priorities
                                        </li>
                                        <li>Assistance in the development of comprehensive risk mitigation management plans from process through closure</li>
                                    </ul>
                                </li>
                                <li>Implementation and tracking of risk management solutions to secure expected outcomes</li>
                            </ul>
                            <div class="feature-box brightRed with-img">
                                <div class="row compressed fh-col" eq-height>
                                    <div class="col-lg-6 col-md-12 img-content" eq-col data-img="http://placehold.it/430x215/d55441/ffffff">
                                        <img alt="B&L Pipe Co" src="http://placehold.it/430x345/d55441/ffffff" />
                                    </div>
                                    <div class="col-lg-6 col-md-12 txt-content" eq-col>
                                        <h4 class="text-upcase f500">Resource Center</h4>
                                        <p> Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum.</p>
                                        <!--    <a href="#" class="btn whiteline">CTA Button Text</a> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ******************************************************* -->
            <!-- Aside Content -->
            <!-- ******************************************************* -->
            <div class="col-md-5 col-sm-5 col-xs-12 aside">
                <div class="container-fluid">
                    <!-- Send Request -->
                    <div class="send-request" toggle-active-parent>
                        <!-- <a href="#" class="btn orange fw">Send Us a Request</a> -->
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
                    <div class="side-nav">
                        <ul>
                            <li><a href="#">Systems Architecture Design and Deployment</a></li>
                            <li><a href="#">Database Structure and Modeling</a></li>
                            <li><a href="#">Business Process Management</a></li>
                            <li><a href="#">Data Conversion, Migration and Ongoing Maintenance</a></li>
                        </ul>
                    </div>
                    <div class="image-cta">
                        <div class="img-content">
                            <img alt="B&L Pipe Co" data-src=">0:http://placehold.it/570x300" />
                            <!--  <span class="caption">Call To Action  <i class="fa fa-angle-right" aria-hidden="true"></i></span> -->
                            <div class="txt-content">
                                <h4>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sunt in culpa qui officia deserunt mollit anim id est laborum.</h4>
                                <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat.</p>
                            </div>
                        </div>
                        <div class="txt-subcontent">
                            <a href="#">
                                <span class="text-upcase">See how the we make the world better</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

get_footer(); 
?>