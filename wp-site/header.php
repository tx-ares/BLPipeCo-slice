<!doctype html>
<html>
<head>
    <!-- set the encoding of your site -->
    <meta charset="utf-8">
    <!-- set the viewport width and initial-scale on mobile devices -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>
        <?php
            echo blpc_generate_page_title();
        ?>
    </title>

    <style>
    html,
    body {
        opacity: 0;
        overflow: hidden;
    }
    </style>
    <!--[if lt IE 9]>
        <script src="//cdnjs.cloudflare.com/ajax/libs/html5shiv/3.6.2/html5shiv.js"></script>
        <script src="//s3.amazonaws.com/nwapi/nwmatcher/nwmatcher-1.2.5-min.js"></script>
        <script src="//html5base.googlecode.com/svn-history/r38/trunk/js/selectivizr-1.0.3b.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/respond.js/1.1.0/respond.min.js"></script>
    <![endif]-->
    <script type="text/javascript">
    if (navigator.userAgent.match(/IEMobile\/10\.0/)) {
        var msViewportStyle = document.createElement('style')
        msViewportStyle.appendChild(
            document.createTextNode(
                '@-ms-viewport{width:auto!important}'
            )
        )
        document.querySelector('head').appendChild(msViewportStyle)
    }
    </script>

    <!-- Localize template url -->
    <script type="text/javascript">  
        var templateUrl = '<?= get_bloginfo("template_url"); ?>';
    </script>

    <!-- Pagespeed compliant - Avoid render blocking load of CSS -->
    <script type="text/javascript">
    function loadStyleSheet(a, b, c) {
        var d = document.getElementsByTagName("head")[0],
            e = document.createElement("link");
        e.setAttribute("href", a), e.setAttribute("rel", "stylesheet"), e.setAttribute("type", "text/css");
        var f, g;
        "sheet" in e ? (f = "sheet", g = "cssRules") : (f = "styleSheet", g = "rules");
        var h = setInterval(function() {
                try {
                    e[f] && e[f][g].length && (clearInterval(h), clearTimeout(i), b.call(c || window, !0, e))
                } catch (a) {} finally {}
            }, 10),
            i = setTimeout(function() {
                clearInterval(h), clearTimeout(i), d.removeChild(e), b.call(c || window, !1, e)
            }, 15e3);
        return d.appendChild(e), e
    }
    // console.log("Check HEAD Scripts 5")

    loadStyleSheet('<?php echo get_template_directory_uri(); ?>/_assets/css/all.min.css', function(success, link) {
        // console.log($(this), " << loading of stylesheet ")

        if (success) {
            // console.log("CSS Load - SUCCESS")
            document.body.className += " cssloaded";
        }
    });
    </script>
    <!-- In case javascript is disabled -->
    <noscript>
        <link href="<?php echo get_template_directory_uri(); ?>/_assets/css/all.min.css" rel="stylesheet">
    </noscript>

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <noscript>
        <div>Javascript must be enabled for the correct page display</div>
    </noscript>
    <a class="accessibility" href="#main-content" accesskey="S">Skip to Content</a>
    <div id="wrapper">
        <!-- ******************************************************* -->
        <!-- Header -->
        <!-- ******************************************************* -->
        <header>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xs-4 no-padding-md">
                        <div class="tframe fh fw">
                            <div class="tcell valign-mid text-right pull-left-md">
                                <a href="/" class="logo">
                                    <img src="<?php echo get_template_directory_uri(); ?>/_assets/images/BLPipeco_Logo-Horizontal.png" alt="BLPipeCo" />
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-8 no-padding">
						<?php wp_nav_menu( array( 'theme_location' => 'main-menu', 'menu_class' => 'top-nav' ) ); ?>
                    </div>
                </div>
            </div>
            <div class="menu-wrap">
                <a href="#" class="menu-opener"><span></span></a>
            </div>
            <div class="mobile-menu">
                <div class="content-wrapper">
                    <form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' )); ?>">
                        <input type="text" placeholder="Enter search here..." value="<?php echo get_search_query(); ?>" name="s"  />
                        <a href="#" class="search-btn"><i class="fa fa-search" aria-hidden="true"></i></a>
                    </form>
                    <div class="menu-container">
                        <p class="copy text-center">
                            © 2017 B&amp;L Pipeco. All rights reserved. | <a href="#">Privacy Policy</a>
                        </p>
                    </div>
                </div>
            </div>
        </header>
    <!-- ******************************************************* -->
    <!-- Social Media Icons -->
    <!-- ******************************************************* -->
    <div class="social-media-icons">
        <ul>
            <li>
                <a href="#">
                    <i class="fa fa-facebook" aria-hidden="true"></i>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="fa fa-twitter" aria-hidden="true"></i>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="fa fa-linkedin" aria-hidden="true"></i>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="fa fa-commenting" aria-hidden="true"></i>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="fa fa-envelope" aria-hidden="true"></i>
                </a>
            </li>
        </ul>
    </div>
