<?php
  add_action('wp_enqueue_scripts', 'add_scripts_and_styles');
	add_action('after_setup_theme', 'add_features');
	add_action('after_setup_theme', 'add_menu');
	add_action( 'template_redirect', 'remove_wpseo' );

/**
 * Removes output from Yoast SEO on the frontend for a specific post, page or custom post type.
 */
function remove_wpseo() {
	if ( is_single ( 4069 ) ) {
		$front_end = YoastSEO()->classes->get( Yoast\WP\SEO\Integrations\Front_End_Integration::class );

		remove_action( 'wpseo_head', [ $front_end, 'present_head' ], -9999 );
	}
}
	
	add_theme_support( 'html5', array(  'script', 'style' ) );

  function add_scripts_and_styles() { 	
    wp_enqueue_style('font', get_template_directory_uri().'/font-ibmplex/font-ibmplex.min.css');
    wp_enqueue_style('icon', get_template_directory_uri().'/font-awesome/font-awesome.min.css');
	if ( is_page_template ('front-page.php') ) {
		wp_enqueue_script('front-page-js', get_template_directory_uri() . '/js/front-page.min.js', null, null, true );
		wp_enqueue_style('front-page-css', get_template_directory_uri().'/css/front-page.min.css');
	}
	if(is_page_template('template-parts/faq.php')) {	
		wp_enqueue_script('details-js', get_template_directory_uri() . '/js/details.min.js', null, null, true );
	}
	if(is_page_template('template-parts/calc.php')) {
		wp_enqueue_script('calc-js', get_template_directory_uri() . '/js/calc.min.js', null, null, true );
	}
	if(is_page( 13599 )) {
		wp_enqueue_script('calcD300-js', get_template_directory_uri() . '/js/calcD300.js', null, null, true );
		wp_enqueue_style('calcD300-css', get_template_directory_uri().'/css/calcD300.css');
	}
	if(is_page( 13609 )) {
		wp_enqueue_script('calcD400-js', get_template_directory_uri() . '/js/calcD400.js', null, null, true );
		wp_enqueue_style('calcD400-css', get_template_directory_uri().'/css/calcD400.css');
	}
	if(is_page( 13612 )) {
		wp_enqueue_script('calcD500-js', get_template_directory_uri() . '/js/calcD500.js', null, null, true );
		wp_enqueue_style('calcD500-css', get_template_directory_uri().'/css/calcD500.css');
	}
	if(is_page( 13616 )) {
		wp_enqueue_script('calcBlock-js', get_template_directory_uri() . '/js/calcBlock.js', null, null, true );
		wp_enqueue_style('calcBlock-css', get_template_directory_uri().'/css/calcBlock.css');
	}
	if(is_page_template('template-parts/product.php')) {
		wp_enqueue_script('switch-js', get_template_directory_uri() . '/js/switch.min.js', null, null, true );
	}
	wp_enqueue_style('style-css', get_template_directory_uri().'/style.min.css', array('font', 'icon'));
	wp_enqueue_script('preloader-js', get_template_directory_uri() . '/js/preloader.js', null, null, true );                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                   
	wp_enqueue_script('main-js', get_template_directory_uri() . '/js/main.js', null, null, 'footer');

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

	wp_dequeue_style( 'classic-theme-styles' );
	wp_dequeue_style( 'wp-block-library' );
	} 

	function add_features() {
		add_theme_support( 'title-tag' );
		add_theme_support( 'post-thumbnails' );   
	}

	function add_menu() {
		register_nav_menu('top', 'Главное меню сайта');
		register_nav_menu('bottom', 'Политика конфиденциальности');
		register_nav_menu('calc', 'Калькулятор');
	}
	
	remove_action('wp_head', 'print_emoji_detection_script', 7);
	remove_action('wp_print_styles', 'print_emoji_styles');

	function remove_ver_css_js( $src, $handle ) {
		if ( strpos( $src, 'ver=' ) )
			$src = remove_query_arg( 'ver', $src );
		return $src;
	}
	add_filter( 'style_loader_src', 'remove_ver_css_js', 9999, 2 );
	add_filter( 'script_loader_src', 'remove_ver_css_js', 9999, 2 );
	
	add_filter("wp_head", "wp_increament_post_view");
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
	function wp_increament_post_view() {
    global $post;
    if(is_singular()){
      $views_key = 'wp_post_views';
      $views = get_post_meta($post->ID, $views_key, true);
      if(empty($views) || !is_numeric($views)){
        delete_post_meta($post->ID, $views_key);
        add_post_meta($post->ID, $views_key, '1');
      }
		else
			update_post_meta($post->ID, $views_key, ++$views);
    }
	}
	add_filter('manage_posts_columns', 'posts_column_views');
	add_action('manage_posts_custom_column', 'posts_custom_column_views',5,2);
	function posts_column_views($defaults){
    $defaults['post_views'] = __('Просмотры');
    return $defaults;
	}
	function posts_custom_column_views($column_name, $id){
    if($column_name === 'post_views')
			echo get_post_views(get_the_ID());
	}
?>