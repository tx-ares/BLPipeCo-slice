    <!-- ******************************************************* -->
    <!-- Footer -->
    <!-- ******************************************************* -->
   <footer>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 signup">
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
                <div class="col-lg-9 col-md-9 col-sm-9 hidden-xs copyright text-right">
                    <div class="content tframe fw fh">
                        <div class="tcell valign-mid">
                            &copy; 2017 B&amp;L Pipeco. All rights reserved. | <a href="<?php echo get_site_url() . '/privacy-policy'; ?>">Privacy Policy</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    </div>
    <!-- Pagespeed compliant - Avoid render blocking load of JS -->
    <noscript id="deferred-styles">
      <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/_assets/css/all.min.css?v=<?php echo time(); ?>"/>
    </noscript>
    <script type="text/javascript">

    var loadDeferredStyles = function() {
        var addStylesNode = document.getElementById("deferred-styles");
        var replacement = document.createElement("div");
        replacement.innerHTML = addStylesNode.textContent;
        document.body.appendChild(replacement)
        addStylesNode.parentElement.removeChild(addStylesNode);
        document.body.className += " cssloaded";
        };
        var raf = requestAnimationFrame || mozRequestAnimationFrame ||
        webkitRequestAnimationFrame || msRequestAnimationFrame;
        
    if (raf) raf(function() { window.setTimeout(loadDeferredStyles, 0); });
    else window.addEventListener('load', loadDeferredStyles);

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
