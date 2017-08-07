<?php

include_once(ABSPATH.WPINC.'/feed.php');

add_filter('show_admin_bar', '__return_false');
add_theme_support( 'post-thumbnails' );

add_filter('single_template', 'blpc_single_template');

function blpc_single_template($single_template) {
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
function blpc_search_menu($items, $args) {
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
add_filter('wp_nav_menu_items', 'blpc_search_menu', 10, 2);

/* sidebar */
function blpc_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'General', 'blpc' ),
		'id'            => 'sidebar_general',
		'description'   => __( 'General', 'blpc' ),
		'before_widget' => '',
		'after_widget'  => '',
		'before_title' => '',
		'after_title' => ''
	) );
	
	register_sidebar( array(
		'name'          => __( 'Services', 'blpc' ),
		'id'            => 'sidebar_services',
		'description'   => __( 'Services', 'blpc' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title' => '<span class="hidden">',
		'after_title' => '</span>'
	) );
	
	register_sidebar( array(
		'name'          => __( 'Insights', 'blpc' ),
		'id'            => 'sidebar_insights',
		'description'   => __( 'Insights', 'blpc' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title' => '<span class="hidden">',
		'after_title' => '</span>'
	) );
	
	register_sidebar( array(
		'name'          => __( 'About', 'blpc' ),
		'id'            => 'sidebar_about',
		'description'   => __( 'About', 'blpc' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title' => '<span class="hidden">',
		'after_title' => '</span>'
	) );
	
	register_sidebar( array(
		'name'          => __( 'People', 'blpc' ),
		'id'            => 'sidebar_people',
		'description'   => __( 'People', 'blpc' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title' => '<span class="hidden">',
		'after_title' => '</span>'
	) );
	
	register_sidebar( array(
		'name'          => __( 'News', 'blpc' ),
		'id'            => 'sidebar_news',
		'description'   => __( 'News', 'blpc' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title' => '<span class="hidden">',
		'after_title' => '</span>'
	) );
	
}
add_action( 'widgets_init', 'blpc_widgets_init' );

add_filter( 'body_class', function( $classes ) {
    return array_merge( $classes, array( 'header-sticky footer-sticky' ) );
} );

/* body class */
add_filter( 'body_class', 'page_body_class' );
function page_body_class( $classes ) {
	
	$page_template = get_page_template_slug( get_queried_object_id() );

	if(is_home()) {
		$classes[] = 'home homepage';
	}
	else if(is_page_template('page-services.php')) {
		$classes[] = 'fullpage main-content-fullpage landing';
	}
	else if(is_page_template('page-octg.php')) {
		$classes[] = 'fullpage main-content-fullpage landing';
	}
	else if(is_page_template('page-upstreamproducts.php')) {
		$classes[] = 'fullpage main-content-fullpage landing';
	}
	else if(is_page_template('page-insight.php')) {
		$classes[] = 'inner main-content-fullpage';
	}
	else if(is_page_template('page-about.php')) {
		$classes[] = 'fullpage main-content-fullpage';
	}
	else if(is_page_template('page-people.php')) {
		$classes[] = 'inner bio';
	}

	else {
		$classes[] = 'inner';
	}
	
	return $classes;
}

/* OCTG & Upstream Products */
function blpc_products_rollovers($posttype) {

	$args = array( 
		'parent' => 0,
		'exclude' => 2347,
		'sort_column' => 'menu_order', 
		'sort_order' => 'asc',
		'post_type' => $posttype
	);
	
	$pages = get_pages( $args );
	$string = '';
	$classes = '';

	if ( count($pages) == 1 ) {
		$classes = 'col-lg-12 col-md-12 col-sm-12 col-xs-12';
	}

	else if ( count($pages) < 1 && count($pages) > 4 ) {
		$classes = 'col-lg-4 col-md-6 col-sm-6 col-xs-12';
	}

	else if ( count($pages) == 4 ) {
		$classes = 'col-lg-3 col-md-6 col-sm-6 col-xs-12';
	}

	else {
		$classes = 'col-lg-2 col-md-6 col-sm-6 col-xs-12';
	}

	foreach ( $pages as $page ) { 
		$icon = get_field('products_menu_icon', $page->ID);
		$string .= '<div class="' . $classes . '" eq-col>
                        
	                    <a href="'.get_post_permalink( $page->ID ).'" class="tframe fw fh text-center item-box">
		                    <div class="slide-content tframe valign-mid" eq-col>
		                        
                                <img src="'.$icon['url'].'" alt="'.$icon['alt'].'" class="icon" />
                                <h3>' . $page->post_title . '</h3>
                                <p class="details">' . get_field('products_menu_description', $page->ID)  . '</p>
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

/* Management Team Bios */
function blpc_bio_tiles($post_id) { 

	$args = array( 
			'numberposts'       => -1,
			'post_type' => 'people',
			'orderby' => 'menu_order',
			'order' => 'ASC',
			'taxonomy' => 'category',
	            'field' => 'slug'
	);
	
	$pages = get_posts( $args );
	$string = '';

	foreach ( $pages as $page ) { 
		$photo = get_field('people_photo', $page->ID);
		$string .= '<div class="photo-item">
						<div class="img-wrapper">
							<img src="'.$photo['url'].'" alt="'.$photo['alt'].'" width="206" height="255" />
							<div class="overlay">
								<div class="tframe fw fh">
									<div class="tcell valign-mid">
										<div class="info-wrapper">
											<h3>' 
												. get_field('people_name', $page->ID) . 
											'</h3>
											<h4>' 
												. get_field('people_title', $page->ID) . 
											'</h4>
											<span>See Bio</span>
											<i class="fa fa-caret-down" aria-hidden="true"></i>
										</div>
									</div>
								</div>
							</div>
						</div>	
					</div>';							
	}


	echo $string;
}

/* menu_list_pages */
function blpc_menu_list_pages() { 
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

/* Blog List */
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

/* home latest news */
function blpc_home_news_list() {
	$args = array( 'numberposts' => '3',
					'category_name' => 'latest-news');

	$recent_posts = wp_get_recent_posts($args);
	
	
	$string =  '<div class="latest-articles darkblue-theme fh">
                    <h4 class="text-upcase">Latest News</h4>';	
	foreach( $recent_posts as $index => $recent ) {
		$string .= '<div class="txt-content">
						<a href="'. get_permalink($recent["ID"]) .'">
							<h3 class="title">'. $recent["post_title"] 
								.'<span class="date">'. date('F j, Y', strtotime($recent['post_date'])) 
								.'</span>
							</h3>
						</a>
					</div>';
	}
	$string .= '	<div class="txt-subcontent">
                        <a href="'. get_site_url() . '/insights">
                            <span>View All Articles</span>
                        </a>
                    </div>
                </div>';	
	echo $string;
}

/* primary carousel */
function blpc_primary_carousel() { 
	$args = array( 
		'post_type' => 'carousel',
		'orderby' => 'menu_order',
		'order' => 'ASC',
		'taxonomy' => 'category',
            'field' => 'slug',
            'term' => 'carousel-primary'
	);
	
	$pages = get_posts( $args );
	$string = '';

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
						<div class="subtext-box text-center">
							<p class="h1">'
								 . $page->post_title  . '</a>
							</p>
							
							
							<p class="h2">
								' . get_field('carousel_caption', $page->ID)  . '
							</p>
						
							<span class="btn whiteline">
								<a href="' . get_field('carousel_button_link', $page->ID)  . '">' . get_field('carousel_button_text', $page->ID) . '
								</a>
							</span>
						</div>
					</div>';
	}
	echo $string;
}

/* Products Carousel */
function blpc_products_carousel($posttype) {

	$args = array( 
		'parent' => 0,
		'exclude' => 2347,
		'sort_column' => 'menu_order', 
		'sort_order' => 'asc',
		'post_type' => $posttype
	);
	
	$pages = get_pages( $args );
	$string = '';
	$classes = '';

	if ( count($pages) == 1 ) {
		$classes = 'col-lg-12 col-md-12 col-sm-12 col-xs-12';
	}

	else if ( count($pages) < 1 && count($pages) > 4 ) {
		$classes = 'col-lg-4 col-md-6 col-sm-6 col-xs-12';
	}

	else if ( count($pages) == 4 ) {
		$classes = 'col-lg-3 col-md-6 col-sm-6 col-xs-12';
	}

	else {
		$classes = 'col-lg-2 col-md-6 col-sm-6 col-xs-12';
	}

	foreach ( $pages as $page ) { 
		$icon = get_field('products_menu_icon', $page->ID);
		$string .= '<div class="slide-content" eq-col>  
	                    <a href="'.get_post_permalink( $page->ID ).'" class="tframe fw fh text-center item-box">
		                    <div class="slide-content tframe valign-mid" eq-col>
		                        
                                <img src="'.$icon['url'].'" alt="'.$icon['alt'].'" class="icon" />
                                <h3 class="text-upcase">' . $page->post_title . '</h3>
                                <p class="details">' . get_field('products_menu_description', $page->ID)  . '</p>
		                    </div>         
	                    </a> 	
                	</div>';	
	}
	echo $string;
}

/* Logo Carousel */
function blpc_logo_carousel() { 
	$args = array( 
		'post_type' => 'carousel',
		'orderby' => 'menu_order',
		'numberposts' => -1,
		'order' => 'ASC',
		'taxonomy' => 'category',
            'field' => 'slug',
            'term' => 'logo'
	);
	
	$pages = get_posts( $args );
	$string = '';

	// debug_to_console( count($pages) );

	foreach ( $pages as $page ) {
		
		$image = get_field('carousel_image', $page->ID);

		$string .= '<div class="slide-content" eq-col>  
	                    <a href="'.get_post_permalink( $page->ID ).'" class="tframe fw fh text-center item-box">
		                    <div class="slide-content tframe valign-mid" eq-col>
		                        
                                <img src="'.$image['url'].'" alt="'.$image['alt'].'" class="icon" />

		                    </div>         
	                    </a> 	
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

function blpc_latest_articles_by_category_list($category_name) {

	// echo debug_to_console( $category_name );

	$args = array( 'numberposts' => '3',
				   'category_name' => $category_name
				  );

	$categoryString = '';

	if ( $category_name == 'blog' ) { 
		$categoryString = 'Latest Blogs'; 
	}
	else if ( $category_name == 'latest-news' ) { 
		$categoryString = 'Latest News & Events'; 
	}
	else { 
		$categoryString = 'Latest Articles'; 
	};

	$recent_posts = wp_get_recent_posts($args);
	
	$classes = ''; 

	$string = '<div class="latest-articles slateblue-theme fh">
                    <h4 class="text-upcase">' . $categoryString . '</h4>';	
	foreach( $recent_posts as $index => $recent ) {
		$string .= '<div class="txt-content">
						<a href="'. get_permalink($recent["ID"]) .'">
							<h3 class="title">'. $recent["post_title"] 
								.'<span class="date">'. date('F j, Y', strtotime($recent['post_date'])) 
								.'</span>
							</h3>
						</a>
					</div>';
	}
	$string .= '	</div>
							</div>';	
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
	$string = '';
	$target = '';

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
	$string = '';
	$target = '';

	$string = '<ul>';
	foreach ( $pages as $page ) {
		if($page->ID == 1737) {
		// if($page->ID == 53 ) {
			$target = 'target="_blank"';
		}
		$string .= '<li class="'. ($page->ID == $post->ID ? 'current_page_item' : '') .'">
						<a href="' . get_permalink( $page->ID ) . '" '.$target.'>' . $page->post_title . '</a>
					</li>';
	}
	$string .= '</ul>';
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

function blpc_content_feature_bottom($post_id) {
	
	$feature = get_post($post_id);
	$string = '';
	if($feature) {
		$feature_image = get_field('feature_image', $feature->ID);
		
		if($feature_image) {
			$string .=  '<div class="feature-box brightRed with-img">
							<a href="' . get_field('feature_button_url', $feature->ID)  . '">
                                <div class="row compressed" eq-height>
                                    <div class="col-lg-6 col-md-12 img-content" eq-col data-img="http://placehold.it/430x215/d55441/ffffff" style="background: url(&quot;http://placehold.it/430x215/d55441/ffffff&quot;) center center / cover no-repeat; height: 246px;">
                                        <img alt="'.$feature_image['alt'].'"
											src="'.$feature_image['url'].'" />
                                    </div>
                                    <div class="col-lg-6 col-md-12 txt-content" eq-col="" style="height: 246px;">
										<h4 class="text-upcase f500">' . $feature->post_title  . '</h4>
   										<p>'. $feature->post_content  . '</p>
                                    </div>
                                </div>
                            </a>
                        </div>';

		} else {
			$string .= '<div class="image-cta no-img '.get_field('feature_background_color', $feature->ID).'">
							<a href="' . get_field('feature_button_url', $feature->ID)  . '">
								<div class="txt-content">
									<h3>' . $feature->post_title  . '</h3>
									<p>'. $feature->post_content  . '</p>
									<span class = "btn whiteline">
										<a href="/" tabindex="0">' 
										. get_field('feature_button_text', $feature->ID)  . 
										'</a>
									</span>
								</div>
							</a>
						</div>';
		}
	}
	
	echo $string;						
}

function blpc_locations_list() {
	debug_to_console( "Removing Auto P Tags ");
	remove_filter( 'the_content', 'wpautop' );
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

?>

