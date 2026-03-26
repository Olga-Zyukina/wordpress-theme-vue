<?php
	add_action('after_setup_theme', 'add_features');
	add_action('after_setup_theme', 'add_menu');
	function add_features() {
		add_theme_support( 'title-tag' );
		add_theme_support( 'post-thumbnails' );   
	}
	function add_menu() {
		register_nav_menu('top', 'Главное меню сайта');
		register_nav_menu('bottom', 'Политика конфиденциальности');
	}

	add_theme_support( 'html5', array(  'script', 'style' ) );

	add_action( 'template_redirect', 'remove_wpseo' );
	function remove_wpseo() {
		if ( is_single ( 4069 ) ) {
			$front_end = YoastSEO()->classes->get( Yoast\WP\SEO\Integrations\Front_End_Integration::class );
			remove_action( 'wpseo_head', [ $front_end, 'present_head' ], -9999 );
		}
	}

	add_filter("wp_head", "wp_increament_post_view");
	function wp_increament_post_view() {
    global $post;
    if(is_singular()){
      $views_key = 'wp_post_views';
      $views = get_post_meta($post->ID, $views_key, true);
      if(empty($views) || !is_numeric($views)){
        delete_post_meta($post->ID, $views_key);
        add_post_meta($post->ID, $views_key, '1');
      } else {	
			update_post_meta($post->ID, $views_key, ++$views);
    	}
		}
	}
	
	add_action('wp_enqueue_scripts', 'add_scripts_and_styles');
	add_action('wp_enqueue_scripts', 'add_script_data');
	add_action('wp_enqueue_scripts', 'del_styles');
	function add_scripts_and_styles() { 	
    wp_enqueue_style('font', get_template_directory_uri().'/font-ibmplex/font-ibmplex.min.css');
    wp_enqueue_style('icon', get_template_directory_uri().'/font-awesome/font-awesome.min.css');
		wp_enqueue_style('main', get_template_directory_uri().'/dist/css/main.min.css', array('font', 'icon'));
		wp_enqueue_style('style-css', get_template_directory_uri().'/style.css');

		if ( is_page_template ('front-page.php') ) {
			wp_enqueue_script('front-page-js', get_template_directory_uri() . '/dist/js/frontPage.min.js', null, null, true );
			wp_enqueue_style('front-page-css', get_template_directory_uri().'/dist/css/frontPage.min.css');
		}
		if(is_page_template('template-parts/faq.php')) {	
			wp_enqueue_script('details-js', get_template_directory_uri() . '/dist/js/details.min.js', null, null, true );
		}
		if(is_page_template('template-parts/calc.php')) {
			wp_enqueue_script('calc-js', get_template_directory_uri() . '/dist/js/calc.min.js', null, null, true );
		}
		if(is_page( 14908 )) {
			wp_enqueue_script('calcD300-js', get_template_directory_uri() . '/dist/js/calcD300.min.js', null, null, true );
			wp_enqueue_style('calcD300-css', get_template_directory_uri().'/dist/css/calcD300.min.css');
		}
		if(is_page( 14911 )) {
			wp_enqueue_script('calcD400-js', get_template_directory_uri() . '/dist/js/calcD400.min.js', null, null, true );
			wp_enqueue_style('calcD400-css', get_template_directory_uri().'/dist/css/calcD400.min.css');
		}
		if(is_page( 14913 )) {
			wp_enqueue_script('calcD500-js', get_template_directory_uri() . '/dist/js/calcD500.min.js', null, null, true );
			wp_enqueue_style('calcD500-css', get_template_directory_uri().'/dist/css/calcD500.min.css');
		}
		if(is_page( 14915 )) {
			wp_enqueue_script('calcBlock-js', get_template_directory_uri() . '/dist/js/calcBlock.min.js', null, null, true );
			wp_enqueue_style('calcBlock-css', get_template_directory_uri().'/dist/css/calcBlock.min.css');
		}
		if(is_page_template('template-parts/product.php')) {
			wp_enqueue_script('switch-js', get_template_directory_uri() . '/dist/js/switch.min.js', null, null, true );
		}
		wp_enqueue_script('preloader-js', get_template_directory_uri() . '/dist/js/preloader.min.js', null, null, true );                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                   
		wp_enqueue_script('main-js', get_template_directory_uri() . '/dist/js/main.min.js', null, null, true);
	} 
	function add_script_data() {
		wp_script_add_data( 'front-page-js', 'async', true );
		wp_script_add_data( 'calc-js', 'async', true );
		wp_script_add_data( 'calcD300-js', 'async', true );
		wp_script_add_data( 'calcD400-js', 'async', true );
		wp_script_add_data( 'calcD500-js', 'async', true );
		wp_script_add_data( 'calcBlock-js', 'async', true );
		wp_script_add_data( 'details-js', 'async', true );
		wp_script_add_data( 'switch-js', 'async', true );
		wp_script_add_data( 'preloader-js', 'async', true );
		wp_script_add_data( 'main-js', 'async', true );
	}
	function del_styles() {
		wp_dequeue_style( 'classic-theme-styles' );
		wp_dequeue_style( 'wp-block-library' );
	}

	remove_action('wp_head', 'print_emoji_detection_script', 7);
	remove_action('wp_print_styles', 'print_emoji_styles');

	add_filter( 'style_loader_src', 'remove_ver_css_js', 9999 );
	add_filter( 'script_loader_src', 'remove_ver_css_js', 9999 );
	function remove_ver_css_js( $src ) {
		if ( strpos( $src, 'ver=' ) )
			$src = remove_query_arg( 'ver', $src );
		return $src;
	}
	
	add_filter('manage_posts_columns', 'posts_column_views');
	function posts_column_views($defaults){
    $defaults['post_views'] = __('Просмотры');
    return $defaults;
	}

	add_action('manage_posts_custom_column', 'posts_custom_column_views', 5, 2);
	function get_post_views($post_id=NULL){
    global $post;
    if($post_id==NULL)
      $post_id = $post->ID;
    	if(!empty($post_id)){
        $views_key = 'wp_post_views';
        $views = get_post_meta($post_id, $views_key, true);
        if(empty($views) || !is_numeric($views)){
          delete_post_meta($post_id, $views_key);
          add_post_meta($post_id, $views_key, '0');
           return "0";
        }
      else if($views == 1)
        return "1";
        return " ".$views;
		}
	}
	function posts_custom_column_views($column_name, $id){
    if($column_name === 'post_views')
			echo get_post_views(get_the_ID());
	}
?>