    <!-- ******************************************************* -->
    <!-- Footer -->
    <!-- ******************************************************* -->
   <footer>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 signup">
                    <div class="content tframe fw fh">
                        <div class="tcell valign-mid">
                            <div class="collapsible-data">
                                <a href="#" class="collapsible-opener">Subscribe to our Updates <i class="fa fa-angle-up" aria-hidden="true"></i></a>
                                <div class="collapsible-content">
                                    <div class="row" eq-height>
                                        <!-- Subscribe Form -->
                                        <?php echo do_shortcode( '[contact-form-7 id="303" title="Contact form 2 - Subscribe!" html_id="subscribe-form"]' );
                                         ?>
                                      
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 col-md-8 col-sm-8 hidden-xs copyright text-right">
                    <div class="content tframe fw fh">
                        <div class="tcell valign-mid">
                            &copy; 2017 B&amp;L Pipeco. All rights reserved. | <a href="#">Privacy Policy</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    </div>
    <!-- Pagespeed compliant - Avoid render blocking load of JS -->
    <script type="text/javascript">
    function loadJS(e) {
        var t = document.createElement("script");
        t.type = "text/javascript", t.async = !0, t.src = e;
        var n = document.getElementsByTagName("head")[0];
        n.appendChild(t)
    };
    loadJS('<?php echo get_template_directory_uri(); ?>/_assets/js/all.min.js');
    </script>
    <!-- In case javascript is disabled -->
    <noscript>
        <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/_assets/css/all.min.js"></script>
    </noscript>

    <?php wp_footer(); ?>
    
</body>

</html>
