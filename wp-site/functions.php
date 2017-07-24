<?php

include_once(ABSPATH.WPINC.'/feed.php');

add_filter('show_admin_bar', '__return_false');
add_theme_support( 'post-thumbnails' );

add_filter('single_template', 'g2is_single_template');

function g2is_single_template($single_template) {
	global $wp_query, $post;
	
	foreach((array)get_the_category() as $cat) {
		if(file_exists(TEMPLATEPATH . '/single-category-' . $cat->slug . '.php')) {
			return TEMPLATEPATH . '/single-category-' . $cat->slug . '.php';
		} elseif(file_exists(TEMPLATEPATH . '/single-category-' . $cat->term_id . '.php')) {
			return TEMPLATEPATH . '/single-category-' . $cat->term_id . '.php';
		}
	}
	return $single_template;
}

function remove_yoast_metabox_features(){
    remove_meta_box('wpseo_meta', 'features', 'normal');
		remove_meta_box('wpseo_meta', 'webinars', 'normal');
		remove_meta_box('wpseo_meta', 'carousel', 'normal');
}
add_action( 'add_meta_boxes', 'remove_yoast_metabox_features', 11 );

/* init */
function blpc_init() {
  
	/* menu */	
	register_nav_menus( array(
		'main-menu' => __( 'Main Menu', 'blpc' ),
		'footer-menu'  => __( 'Footer Menu', 'blpc' ),
		'social-menu'  => __( 'Social Menu', 'blpc' )
	) );
}
add_action( 'init', 'blpc_init' );

/* search menu */
function g2is_search_menu($items, $args) {
    if($args->theme_location == 'main-menu'){
       $menu_item = '<li class="search">
											<a href="#" class="top-search-opener"><i class="fa fa-search" aria-hidden="true"></i></a>
											<div class="search-box">
													<form class="tframe fh fw" role="search" method="get" class="search-form" action="'. esc_url( home_url( '/' ) ) .'">
															<div class="tcell valign-mid">
																	<div class="row compressed" eq-height>
																			<div class="col-xs-offset-3 col-xs-6" eq-col>
																					<div class="tframe fh fw">
																							<div class="tcell valign-mid">
																									<input type="text" placeholder="Enter Search here..." value="'.get_search_query().'" name="s" />
																							</div>
																					</div>
																			</div>
																			<div class="col-xs-3" eq-col>
																					<div class="tframe fh fw">
																							<div class="tcell valign-mid">
																									<button type="submit" class="search-btn"><i class="fa fa-search" aria-hidden="true"></i></button>
																									<a href="#" class="search-close"><span class="close thick"></span></a>
																							</div>
																					</div>
																			</div>
																	</div>
															</div>
													</form>
											</div>
									</li>';
       $items = $items . $menu_item;
    }
    return $items;
}
add_filter('wp_nav_menu_items', 'g2is_search_menu', 10, 2);

/* sidebar */
function g2is_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'General', 'g2is' ),
		'id'            => 'sidebar_general',
		'description'   => __( 'General', 'g2is' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title' => '<span class="hidden">',
		'after_title' => '</span>'
	) );
	
	register_sidebar( array(
		'name'          => __( 'Services', 'g2is' ),
		'id'            => 'sidebar_services',
		'description'   => __( 'Services', 'g2is' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title' => '<span class="hidden">',
		'after_title' => '</span>'
	) );
	
	register_sidebar( array(
		'name'          => __( 'Solutions', 'g2is' ),
		'id'            => 'sidebar_solutionss',
		'description'   => __( 'Solutions', 'g2is' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title' => '<span class="hidden">',
		'after_title' => '</span>'
	) );
	
	register_sidebar( array(
		'name'          => __( 'Insights', 'g2is' ),
		'id'            => 'sidebar_insights',
		'description'   => __( 'Insights', 'g2is' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title' => '<span class="hidden">',
		'after_title' => '</span>'
	) );
	
	register_sidebar( array(
		'name'          => __( 'Company', 'g2is' ),
		'id'            => 'sidebar_company',
		'description'   => __( 'Company', 'g2is' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title' => '<span class="hidden">',
		'after_title' => '</span>'
	) );
	
	register_sidebar( array(
		'name'          => __( 'People', 'g2is' ),
		'id'            => 'sidebar_people',
		'description'   => __( 'People', 'g2is' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title' => '<span class="hidden">',
		'after_title' => '</span>'
	) );
	
	register_sidebar( array(
		'name'          => __( 'News', 'g2is' ),
		'id'            => 'sidebar_news',
		'description'   => __( 'News', 'g2is' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title' => '<span class="hidden">',
		'after_title' => '</span>'
	) );
	
	register_sidebar( array(
		'name'          => __( 'Webinars', 'g2is' ),
		'id'            => 'sidebar_webinars',
		'description'   => __( 'Webinars', 'g2is' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title' => '<span class="hidden">',
		'after_title' => '</span>'
	) );
}
add_action( 'widgets_init', 'g2is_widgets_init' );

add_filter( 'body_class', function( $classes ) {
    return array_merge( $classes, array( 'header-sticky footer-sticky' ) );
} );

/* body class */
add_filter( 'body_class', 'page_body_class' );
function page_body_class( $classes ) {
	
	if(is_home()) {
		$classes[] = 'home';
	}
	else if(is_page_template('page-services.php')) {
		$classes[] = 'fullpage main-content-fullpage landing';
	}
	else if(is_page_template('page-solutions.php')) {
		$classes[] = 'fullpage main-content-fullpage';
	}
	else if(is_page_template('page-insight.php')) {
		$classes[] = 'inner main-content-fullpage';
	}
	else if(is_page_template('page-company.php')) {
		$classes[] = 'fullpage main-content-fullpage';
	}
	else if(is_page_template('page-people.php')) {
		$classes[] = 'inner';
	}
	else if(is_singular('solutions')) {
		$classes[] = 'home home-solutions';
	}
	else {
		$classes[] = 'inner';
	}
	
	return $classes;
}

/* solutions */
function g2is_solutions_tile_pages() { 
	$args = array( 
					'parent' => 0,
					'exclude' => 2347,
					'sort_column' => 'menu_order', 
					'sort_order' => 'asc',
					'post_type' => 'solutions'
	);
	
	$pages = get_pages( $args );
	$string = '';
	foreach ( $pages as $page ) { 
		$icon = get_field('page_menu_icon', $page->ID);
		$string .= '<div class="col-lg-3 col-md-4 col-sm-4 col-xs-6" eq-col>
                    <a href="'.get_post_permalink( $page->ID ).'" class="tframe fw fh text-center item-box">
                        <div class="tcell valign-mid">
                            <div class="container-fluid">
                                <img src="'.$icon['url'].'" alt="'.$icon['alt'].'" class="icon" />
                                <h2>' . $page->post_title . '</h2>
                                <p class="details">' . get_field('page_menu_desc', $page->ID)  . '</p>
                            </div>
                        </div>
                    </a>	
                </div>';	
	}
	echo $string;
}

/* services */
function blpc_services_tile_pages() { 
	$args = array( 
					'parent' => 0,
					'sort_column' => 'menu_order', 
					'sort_order' => 'asc',
					'post_type' => 'services'
	);
	
	$pages = get_pages( $args );
	
	foreach ( $pages as $page ) { 
		$icon = get_field('page_menu_icon', $page->ID);
		$string .= '<div class="col-lg-3 col-md-4 col-sm-4 col-xs-6" eq-col>
                    <a href="'.get_post_permalink( $page->ID ).'" class="tframe fw fh text-center item-box">
                        <div class="tcell valign-mid">
                            <div class="container-fluid">
                                <img src="'.$icon['url'].'" alt="'.$icon['alt'].'" class="icon" />
                                <h2>' . $page->post_title . '</h2>
                                <p class="details">' . get_field('page_menu_desc', $page->ID)  . '</p>
                            </div>
                        </div>
                    </a>	
                </div>';							
	}
	echo $string;
}

/* company */
function g2is_company_tile_pages() { 
	global $post; 
	$args = array( 
					'child_of' => $post->ID, 
					'parent' => $post->ID,
					'hierarchical' => 0,
					'sort_column' => 'menu_order', 
					'sort_order' => 'asc',
          'exclude' => 1740
	);
	
	$pages = get_pages( $args );
	
	$string = '';
	foreach ( $pages as $page ) { 
		$target = '';
		if($page->ID == 1741) {
			$target = 'target="_blank"';
		}
		$icon = get_field('page_menu_icon', $page->ID);
		$string .= '<div class="col-lg-3 col-md-4 col-sm-4 col-xs-6" eq-col>
                    <a href="'.get_page_link( $page->ID ).'" '.$target.' class="tframe fw fh text-center item-box">
                        <div class="tcell valign-mid">
                            <div class="container-fluid">
                                <img src="'.$icon['url'].'" alt="'.$icon['alt'].'" class="icon" />
                                <h2>' . $page->post_title . '</h2>
                                <p class="details">' . get_field('page_menu_description', $page->ID)  . '</p>
                            </div>
                        </div>
                    </a>	
                </div>';						
	}
	echo $string;
}

/* our people */
function g2is_people_tile_pages($post_id) { 
	
	switch($post_id) {
		case 2745: //board-of-directors
			$slug = "board-of-directors";
			break;
		case 1742: //senior-management
			$slug = "senior-management";
			break;
	}
	$args = array( 
					'numberposts'       => -1,
					'post_type' => 'people',
					'orderby' => 'menu_order',
					'order' => 'ASC',
					'taxonomy' => 'category',
                        'field' => 'slug',
                        'term' => $slug
	);
	
	$pages = get_posts( $args );
	
	$string = '';
	foreach ( $pages as $page ) { 
		$photo = get_field('people_photo', $page->ID);
		$string .= '<div class="photo-item">
										<a href="'.get_post_permalink( $page->ID ).'">
												<div class="img-wrapper">
														<img src="'.$photo['url'].'" alt="'.$photo['alt'].'" width="206" height="255" />
														<div class="overlay">
																<div class="tframe fw fh">
																		<div class="tcell valign-mid">
																				See Bio <i class="fa fa-angle-right" aria-hidden="true"></i>
																		</div>
																</div>
														</div>
												</div>
												<div class="info-wrapper">
														<h3>' . get_field('people_name', $page->ID) . '</h3>
														<h4>' . get_field('people_title', $page->ID) . '</h4>
												</div>
										</a>
								</div>';							
	}
	echo $string;
}

/* menu_list_pages */
function g2is_menu_list_pages() { 
	global $post; 
	$string = '';
	if ( is_page() && $post->post_parent ) {
		$childpages = wp_list_pages( 'sort_column=menu_order&title_li=&child_of=' . $post->post_parent . '&depth=1&echo=0' );
	}
	else {
		$childpages = wp_list_pages( 'sort_column=menu_order&title_li=&child_of=' . $post->ID . '&depth=1&echo=0' );
	}
	
	if ( $childpages ) {
		$string = '<ul>' . $childpages . '</ul>';
	}
	echo $string;
}

/* home services list */
function g2is_home_services_list() { 
	$args = array( 
					'parent' => 0,
					'sort_column' => 'menu_order', 
					'sort_order' => 'asc',
					'post_type' => 'services'
	);
	
	$pages = get_pages( $args );
	
	foreach ( $pages as $page ) {
		$icon = get_field('page_menu_icon', $page->ID);
		$icon_alt = get_field('page_menu_icon_rollover', $page->ID);		
		$string .= '<div class="col-lg-12 col-md-6 col-sm-6 col-xs-12" eq-col>
										<a href="' . get_post_permalink( $page->ID ) . '" class="icon-wrapper">
												<div class="icon-item">
														<div class="row compressed">
																<div class="col-lg-3 col-md-12">
																		<div class="tframe fh fw">
																				<div class="tcell valign-mid">
																						<img src="'.$icon['url'].'" alt="'.$icon['alt'].'" class="icon" />
																				</div>
																		</div>
																</div>
																<div class="col-lg-9 col-md-12 txt-content">
																		<div class="tframe fh fw">
																				<div class="tcell valign-mid">
																						<h2>' . $page->post_title . '</h2>
																				</div>
																		</div>
																</div>
														</div>
												</div>
												<div class="icon-item-alt">
														<div class="row compressed" eq-height>
																<div class="col-lg-3 col-md-12 txt-content text-right pull-right" eq-col>
																		<div class="tframe fh fw">
																				<div class="tcell valign-mid">
																						<img src="'.$icon_alt['url'].'" alt="'.$icon_alt['url'].'" class="icon" />
																				</div>
																		</div>
																</div>
																<div class="col-lg-9 col-md-12" eq-col>
																		<div class="tframe fh fw">
																				<div class="tcell valign-mid">
																						<p class="subtitle">' . get_field('page_menu_sub_title', $page->ID) . '</p>
																						<p>' . get_field('page_menu_sub_text', $page->ID) . '</p>
																				</div>
																		</div>
																</div>
														</div>
												</div>
										</a>
								</div>';

	}
	echo $string;
}

/* insights news */
function blpc_insights_news_list() {
	$args = array( 'numberposts' => '4',
									'category_name' => 'latest-news');

	$recent_posts = wp_get_recent_posts($args);
	
	$string = '<ul class="link-list">';	
	foreach( $recent_posts as $index => $recent ) {
		
		if ($index == 0) {
			echo '<div class="image-cta dated noline" eq-col>
							<div class="img-content">
									'.get_the_post_thumbnail($recent["ID"], 'full').'
									<span class="date">'. date('M', strtotime($recent['post_date'])) .'<span class="date-num">'. date('d', strtotime($recent['post_date'])) .'</span></span>
									<h2 class="caption"><a href="'.get_site_url().'/insights/news">View All News  <i class="fa fa-angle-right" aria-hidden="true"></i></a></h2>
							</div>
							<a href="'. get_permalink($recent["ID"]) .'">
								<div class="txt-content">
										<h3>'. $recent["post_title"] .'</h3>
										<p>'. $recent["post_title"] .'</p>
								</div>
							</a>
					</div>';
		} else {
			$string .= '<li>
							<a href="'. get_permalink($recent["ID"]) .'">
								<div class="title">'. $recent["post_title"] .'</div>
								<div class="subtitle">'. date('F j, Y', strtotime($recent['post_date'])) .'</div>
							</a>
						</li>';
								
		}
	}
	$string .= '</ul>';	
	echo $string;
}

/* insights webinar */
function blpc_insights_webinar_list() {
	
	$args = array( 
					'posts_per_page'   => 4,
					'orderby' => 'date',
					'order' => 'DESC', 
					'post_type' => 'webinars'
	);
	
	$posts = get_posts( $args );
	
	$string = '<ul class="link-list">';	
	foreach( $posts as $index => $post ) {
		
		if ($index == 0) {
			echo '<div class="image-cta dated noline" eq-col>
							<div class="img-content">
									'.get_the_post_thumbnail($post->ID, 'full').'
									<span class="date">'. date('M', strtotime($post->post_date)) .'<span class="date-num">'. date('d', strtotime($post->post_date)) .'</span></span>
									<h2 class="caption"><a href="'.get_site_url().'/insights/webinars">View All Webinars  <i class="fa fa-angle-right" aria-hidden="true"></i></a></h2>
							</div>
							<a href="'. get_field('hubspot_link', $post->ID) .'" target="_blank">
								<div class="txt-content">
										<h3>'. $post->post_title .'</h3>
										<p>'. $post->post_content .'</p>
								</div>
							</a>
						</div>';
		} else {
			$string .= '<li>
										<a href="'. get_field('hubspot_link', $post->ID) .'" target="_blank">
											<div class="title">'. $post->post_title .'</div>
											<div class="subtitle">'. date('F j, Y', strtotime($post->post_date)) .'</div>
										</a>
									</li>';
								
		}
	}
	$string .= '</ul>';	
	echo $string;
}

/* home latest news */
function g2is_home_news_list() {
	$args = array( 'numberposts' => '3',
									'category_name' => 'latest-news');

	$recent_posts = wp_get_recent_posts($args);
	
	$string = '<ul>';	
	foreach( $recent_posts as $index => $recent ) {
		$string .= '<li>
									<a href="'. get_permalink($recent["ID"]) .'">
											<span class="title">'. $recent["post_title"] .'</span>
											<span class="date">'. date('F j, Y', strtotime($recent['post_date'])) .'</span>
									</a>
								</li>';
		
	}
	$string .= '</ul>';	
	echo $string;
}

/* latest webinar */
function g2is_home_webinar_latest() {
	$args = array( 
					'posts_per_page'   => 1,
					'orderby' => 'date',
					'order' => 'DESC', 
					'post_type' => 'webinars'
	);
	
	$posts = get_posts( $args );
	$string = '';
	foreach( $posts as $index => $post ) {
		$image_attributes = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
		$string .= '<div class="collapsible-data">
									<!-- <a href="#" class="collapsible-opener">'.date('F').' Webinar Signup <i class="fa fa-angle-up" aria-hidden="true"></i></a> -->
									<a href="#" class="collapsible-opener">Upcoming Webinar Signup <i class="fa fa-angle-up" aria-hidden="true"></i></a>
									<div class="collapsible-content">
											<div class="row" eq-height>
													<div class="col-lg-6 col-md-12 pull-right img-info" eq-col data-img="'.$image_attributes[0].'">
															<img alt="G2 Integrated"
																	 data-src="<575:'.$image_attributes[0].',
																					<768:'.$image_attributes[0].',
																					<1440:'.$image_attributes[0].',
																					>1440:'.$image_attributes[0].'"
																	 src="'.$image_attributes[0].'" />
													</div>
													<div class="col-lg-6 col-md-12 pull-left" eq-col>
															<div class="info">
																	<span class="title">'. $post->post_title .'</span>
																	<p>'. $post->post_content .'</p>
																	<a href="'. get_field('hubspot_link', $post->ID) .'" class="btn" target="_blank">Signup</a>
															</div>
													</div>
											</div>
									</div>
							</div>';
		
	}
	
	echo $string;
}

/* hubspot blog */
function blpc_insights_blog_list() {
	$rss = fetch_feed('http://blog.g2-is.com/blog/rss.xml');
	$maxitems = $rss->get_item_quantity(4);
	$rss_items = $rss->get_items(0, $maxitems);
																
	if ($maxitems == 0) {
		$string = '<p>No posts found.</p>';
	} else {
		$string = '<ul class="link-list">';
		foreach ( $rss_items as $index => $item ) {
			if ($index == 0) {
				echo '<div class="image-cta dated noline" eq-col>
								<div class="img-content">
										<img alt="G2-IS Default Blog"
										data-src="/wp-content/uploads/2017/02/Blog_Default_Image_688x378.jpg"
										src="/wp-content/uploads/2017/02/Blog_Default_Image_688x378.jpg"/>
										<span class="date">'. $item->get_date('M') .'<span class="date-num">'. $item->get_date('d') .'</span></span>
										<h2 class="caption"><a href="http://blog.g2-is.com/blog" target="_blank">View All Blog Posts  <i class="fa fa-angle-right" aria-hidden="true"></i></a></h2>
								</div>
								<a href="'. $item->get_permalink() .'" target="_blank">
									<div class="txt-content">
											<h3>'. $item->get_title() .'</h3>
									</div>
								</a>
							</div>';
		  } else {
				$string .= '<li>
											<a href="'. $item->get_permalink() .'" target="_blank">
												<div class="title">'. $item->get_title() .'</div>
												<div class="subtitle">'. $item->get_date('F j, Y') .'</div>
											</a>
										</li>';
			}
		}
		$string .= '</ul>';	
	}
	echo $string;
}

/* primary carousel */
function g2is_primary_carousel() { 
	$args = array( 
					'post_type' => 'carousel',
					'orderby' => 'menu_order',
					'order' => 'ASC',
					'taxonomy' => 'category',
                        'field' => 'slug',
                        'term' => 'carousel-primary'
	);
	
	$pages = get_posts( $args );
	
	foreach ( $pages as $page ) {
		
		$image = get_field('carousel_image', $page->ID);
		$string .= '<div class="slider-item">
										<img alt="'.$image['alt'].'"
												 data-src="<575:'.$image['url'].',
																				<768:'.$image['url'].',
																				<1024:'.$image['url'].',
																				<1280:'.$image['url'].',
																				>1281:'.$image['url'].'"
												 src="'.$image['url'].'" />
										<div class="caption">
												<div class="title top">
														<h3><a href="' . get_field('carousel_button_link', $page->ID)  . '"><div class="text-title"><div>' . $page->post_title  . '</div></div><div class="plus-wrapper"><div class="plus"><div class="plus-icon horiz"></div><div class="plus-icon vert"></div></div></div></a></h3>
												</div>
												<div class="container-fluid">
														<div class="row compressed">
																<div class="col-sm-6 col-xs-12">
																		' . get_field('carousel_caption', $page->ID)  . '
																</div>
														</div>
												</div>
												<div class="title">
														<h3><a href="' . get_field('carousel_button_link', $page->ID)  . '"><div class="text-title"><div>' . $page->post_title  . '</div></div><div class="plus-wrapper"><div class="plus"><div class="plus-icon horiz"></div><div class="plus-icon vert"></div></div></div></a></h3>
												</div>
										</div>
								</div>';
	}
	echo $string;
}
												
												
/* secondary carousel */
function g2is_secondary_carousel() { 
	$args = array( 
					'post_type' => 'carousel',
					'orderby' => 'menu_order',
					'order' => 'ASC',
					'taxonomy' => 'category',
                        'field' => 'slug',
                        'term' => 'carousel-secondary'
	);
	
	$pages = get_posts( $args );
	
	foreach ( $pages as $page ) {
			
			$image = get_field('carousel_image', $page->ID);
			
			$string .= '<div>
										<img alt="'.$image['alt'].'"
												data-src="<575:'.$image['url'].',
																<768:'.$image['url'].',
																<1024:'.$image['url'].'"
												src="'.$image['url'].'" />
										<div class="row row-compressed">
												<div class="col-xs-12">
														<p class="title">' . $page->post_title  . '</p>
														<a href="' . get_field('carousel_button_link', $page->ID)  . '" class="btn orange fw">' . get_field('carousel_button_text', $page->ID)  . '</a>
												</div>
										</div>
								</div>';
						
	}
	echo $string;
}

/* solutions carousel */
function g2is_solutions_carousel($post_id) { 
	
	switch($post_id) {
		case 1648: //risk-and-integrity-management-solution
			$slug = "carousel-risk-integrity";
			break;
		case 2243: //regulatory-compliance-solution
			$slug = "carousel-regulatory-compliance";
			break;
		case 2245: //asset-management-solution
			$slug = "carousel-asset-management";
			break;
		case 2246: //performance-optimization-solution
			$slug = "carousel-performance-optimization";
			break;
		case 2347: //technology
			$slug = "carousel-technology";
			break;		
	}
	$args = array( 
					'post_type' => 'carousel',
					'orderby' => 'menu_order',
					'order' => 'ASC',
					'taxonomy' => 'category',
                        'field' => 'slug',
                        'term' => $slug
	);
	$pages = get_posts( $args );
	$string = '';
	foreach ( $pages as $page ) {
			
			$image = get_field('carousel_image', $page->ID);
			
			$string .= '<div>
										<img alt="'.$image['alt'].'"
												data-src="<575:'.$image['url'].',
																<768:'.$image['url'].',
																<1024:'.$image['url'].'"
												src="'.$image['url'].'" />
										<div class="row row-compressed">
												<div class="col-xs-12">
														<p class="title">' . $page->post_title  . '</p>
														<a href="' . get_field('carousel_button_link', $page->ID)  . '" class="btn orange fw" target="'.get_field('carousel_button_target', $page->ID).'">' . get_field('carousel_button_text', $page->ID)  . '</a>
												</div>
										</div>
								</div>';
						
	}
	echo $string;
}

/* post type pager */
function blpc_post_type_pager($post_type) {
		global $post;
		$args = array( 
						'parent' => $post->post_parent,
						'depth' => 1,
						'hierarchical' => 0,
						'post_type' => $post_type,
						'sort_column' => 'menu_order', 
						'sort_order' => 'asc'
		);
		$page_list = get_pages($args);
		
		$pages = array();
		foreach ($page_list as $page) {
			$pages[] += $page->ID;
		}
		
		$current = array_search($post->ID, $pages);
		$previd = $pages[$current-1];
		$nextid = $pages[$current+1];
		
		$string = '<div class="next-prev clearfix">';
		if (!empty($previd)) {
			$string .= '<a href="'. get_permalink($previd) .'" class="pull-left"><i class="fa fa-angle-left" aria-hidden="true"></i> previous</a>';
		}
		if (!empty($nextid)) { 
			$string .= '<a href="'. get_permalink($nextid). '" class="pull-right">next <i class="fa fa-angle-right" aria-hidden="true"></i></a>';
		}
		$string .= '</div>';
		
		echo $string;
}

/* news detail - latest news */
function g2is_news_detail_latest_news_list() {
	$args = array( 'numberposts' => '3',
									'category_name' => 'latest-news');

	$recent_posts = wp_get_recent_posts($args);
	
	$string = '<div class="related-contents">
								<p class="heading">Latest News</p>
									<div class="row">';	
	foreach( $recent_posts as $index => $recent ) {
		$string .= '<div class="col-md-4">
									<h4 class="title"><a href="'. get_permalink($recent["ID"]) .'">'. $recent["post_title"] .'</a></h4>
									<p class="date">'. date('F j, Y', strtotime($recent['post_date'])) .'</p>
								</div>';
	}
	$string .= '	</div>
							</div>';	
	echo $string;
}

/* menu_list_pages */
function g2is_menu_child_list_pages($post_id) { 
	
	$childpages = wp_list_pages( 'sort_column=menu_order&title_li=&child_of=' . $post_id . '&depth=1&echo=0' );

	if ( $childpages ) {
		$string = '<ul>' . $childpages . '</ul>';
	}

	echo $string;

}

/* Services_submenu_list_pages */  
function blpc_submenu_list_pages($post_type) { 

  global $post;
	$args = array( 
          'posts_per_page' => -1,
					'orderby' => 'menu_order', 
					'order' => 'asc',
          'post_parent' => $post->ID,
          'post_type' => $post_type
	);
	
	$pages = get_posts( $args );

  $string = '<ul>';
	foreach ( $pages as $page ) {

		$string .= '<li class="'. ($page->ID == $post->ID ? 'current_page_item' : '') .'">
									<a href="' . get_permalink( $page->ID ) . '" '.$target.'>' . $page->post_title . '</a>
								</li>';
	}
	$string .= '</ul>';

	echo $string;

}

/* custom_menu_list_pages */
function blpc_custom_menu_list_pages($post_type) { 
	global $post;
	$args = array( 
					'posts_per_page' => -1,
					'orderby' => 'menu_order', 
					'order' => 'asc',
					'post_parent' => $post->post_parent,
					'post_type' => $post_type
	);
	$categories = get_the_category();
 
	if (!empty( $categories ) ) {
		switch($categories[0]->slug) {
			case "board-of-directors":
			case "senior-management":
				$args = array( 
												'posts_per_page' => -1,
												'orderby' => 'menu_order', 
												'order' => 'asc',
												'post_parent' => $post->post_parent,
												'post_type' => $post_type,
												'taxonomy' => 'category',
														 'field' => 'slug',
														 'term' => $categories[0]->name
								);
				break;
		}
	}
	
	$pages = get_posts( $args );
	
	$string = '<ul>';
	foreach ( $pages as $page ) {
		if($page->ID == 1737) {
			$target = 'target="_blank"';
		}
		$string .= '<li class="'. ($page->ID == $post->ID ? 'current_page_item' : '') .'">
									<a href="' . get_permalink( $page->ID ) . '" '.$target.'>' . $page->post_title . '</a>
								</li>';
	}
	$string .= '</ul>';
	echo $string;
}

/* content feature */
function g2is_content_feature($post_id) {
	
	$feature = get_post($post_id);
	$string = '';
	if($feature) {
		$feature_image = get_field('feature_image', $feature->ID);
		
		if($feature_image) {
			$feature_url = get_field('feature_button_url', $feature->ID);
			if ($feature_url) {
			$string .= '<div class="feature-box '.get_field('feature_background_color', $feature->ID).' with-img">
									<div class="row compressed fh-col" eq-height>
												<div class="col-lg-5 col-md-12 img-content" eq-col data-img="'.$feature_image['url'].'">
														<img alt="'.$feature_image['alt'].'"
																src="'.$feature_image['url'].'" />
												</div>
												<div class="col-lg-7 col-md-12 txt-content" eq-col>
														<h3>' . $feature->post_title  . '</h3>
														' . $feature->post_content  . '
														<a href="' . get_field('feature_button_url', $feature->ID)  . '" class="btn '.get_field('feature_button_color', $feature->ID).' hvr-icon-push" target="'.get_field('feature_button_target', $feature->ID).'">' . get_field('feature_button_text', $feature->ID)  . ' <i class="fa fa-angle-right" aria-hidden="true"></i></a>
												</div>
										</div>
								</div>';
			} else {
			$string .= '<div class="feature-box '.get_field('feature_background_color', $feature->ID).' with-img">
									<div class="row compressed fh-col" eq-height>
												<div class="col-lg-5 col-md-12 img-content" eq-col data-img="'.$feature_image['url'].'">
														<img alt="'.$feature_image['alt'].'"
																src="'.$feature_image['url'].'" />
												</div>
												<div class="col-lg-7 col-md-12 txt-content" eq-col>
														<h3>' . $feature->post_title  . '</h3>
														' . $feature->post_content  . '
												</div>
										</div>
								</div>';
				
			}
		} else {
			$string .= '<div class="feature-box '.get_field('feature_background_color', $feature->ID).'">
											<h3>' . $feature->post_title  . '</h3>
											' . $feature->post_content  . '
									</div>';
		}
	}
	
	echo $string;						
}

function blpc_content_feature_right($post_id) {
	
	$feature = get_post($post_id);
	$string = '';
	if($feature) {
		$feature_image = get_field('feature_image', $feature->ID);
		
		if($feature_image) {
			$string .= '<div class="image-cta">
							<a href="' . get_field('feature_button_url', $feature->ID)  . '">
								<div class="img-content">
									<img alt="'.$feature_image['alt'].'"
									src="'.$feature_image['url'].'" />
								
									<div class="txt-content">
										<h4>' . $feature->post_title  . '</h4>
										<p>'. $feature->post_content  . '</p>
									</div>
								</div>
								<div class="txt-subcontent">
		                            <a href="#">
		                                <span class="text-upcase">' . get_field('feature_button_text', $feature->ID) . '</span>
		                            </a>
		                        </div>
		                    </a>
						</div>';
		} else {
			$string .= '<div class="image-cta no-img '.get_field('feature_background_color', $feature->ID).'">
							<a href="' . get_field('feature_button_url', $feature->ID)  . '">
									<div class="txt-content">
											<h3>' . $feature->post_title  . '</h3>
											<p>'. $feature->post_content  . '</p>
											<span class = "btn green">' . get_field('feature_button_text', $feature->ID)  . '
									</div>
							</a>
						</div>';
		}
	}
	
	echo $string;						
}

function g2is_archive_year_list($post_type) {
	$oldest = get_posts( 'post_type='.$post_type.'&post_status=publish&posts_per_page=1&order=ASC' );
	$oldest_date = $oldest[0]->post_date;

	$first_date = date('Y', strtotime($oldest_date));
	$todays_date = date('Y');

	$post_type = $post_type == 'post' ? 'news' : $post_type;
	
	$string = '<div class="archive-list">';
	$string .= '<a href="'.get_site_url().'/insights/'.$post_type.'">All</a>';
	foreach (range($todays_date, $first_date) as $y) {
			$string .= '<a href="'.get_site_url().'/insights/'.$post_type.'?y='.$y.'">'. $y .'</a>';
	}

	$string .= '</div>';
	echo $string;
}

function g2is_solutions_graphics() {
	$args = array( 
					'parent' => 0,
					'exclude' => 2347,
					'sort_column' => 'menu_order', 
					'sort_order' => 'asc',
					'post_type' => 'solutions'
	);
	
	$pages = get_pages( $args );
	$string = '';
	foreach ( $pages as $page ) { 
		
		$string .= '<div>
									<h2>' . $page->post_title . '</h2>
									<p class="details">' . get_field('page_menu_desc', $page->ID)  . '</p>
								</div>';	
	}
	echo $string;
}

/*Get top ancestor*/
function get_top_ancestor_id() {
  global $post;

  if ($post->post_parent) {
      $ancestors = array_reverse(get_post_ancestors($post->ID));
      return $ancestors[0];
    }
    
    return $post->ID;
  }
  
 /*Debugger Console Logging*/
 function debug_to_console( $data ) {
    $output = $data;
    if ( is_array( $output ) )
        $output = implode( ',', $output);

    echo "<script>console.log( 'Debug Objects: " . $output . "' );</script>";
}

/*g2is_people_page_subtitle*/
function g2is_people_page_subtitle() {
	global $post;
	$categories = get_the_category();
 
	if ( ! empty( $categories ) ) {
			echo esc_html( $categories[0]->name );   
	}
}

/*g2is_people_pager*/
function g2is_people_pager() {
		global $post;
		$categories = get_the_category();
		$args = array( 
						'posts_per_page' => -1,
						'orderby' => 'menu_order', 
						'order' => 'asc',
						'post_parent' => $post->post_parent,
						'post_type' => 'people',
						'taxonomy' => 'category',
								 'field' => 'slug',
								 'term' => $categories[0]->name
		);
		$page_list = get_posts($args);
		
		$pages = array();
		foreach ($page_list as $page) {
			$pages[] += $page->ID;
		}
		
		$current = array_search($post->ID, $pages);
		$previd = $pages[$current-1];
		$nextid = $pages[$current+1];
		
		$string = '<div class="next-prev clearfix">';
		if (!empty($previd)) {
			$string .= '<a href="'. get_permalink($previd) .'" class="pull-left"><i class="fa fa-angle-left" aria-hidden="true"></i> previous</a>';
		}
		if (!empty($nextid)) { 
			$string .= '<a href="'. get_permalink($nextid). '" class="pull-right">next <i class="fa fa-angle-right" aria-hidden="true"></i></a>';
		}
		$string .= '</div>';
		
		echo $string;
}
?>

